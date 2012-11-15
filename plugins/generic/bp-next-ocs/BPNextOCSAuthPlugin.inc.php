<?php

/**
 * @file BPNextOCSAuthPlugin.inc.php
 *
 * Copyright (c) 2012 Alberto Souza
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class BPNextOCSAuthPlugin
 * @ingroup plugins_auth_wordpress
 *
 * @brief bp-next-ocs authentication plugin.
 * 
 * @TODO 
 * 	Need more security protection against sql injection in select querys
 * 	Add comments to all classes and functions
 */

// $Id$


import('classes.plugins.GenericPlugin');

class BPNextOCSAuthPlugin extends GenericPlugin {

	protected static $loggedInUser;
  protected $token;

	// PLUGIN CONFIGURATION
	
	protected $wordpress_db_name = NULL;
	protected $wordpress_db_prefix = NULL;
	protected $wordpress_db_user = NULL;
	protected $wordpress_db_user_pass = NULL;
	protected $cookie_domain = NULL;
	
	/// 
	
	
	function register($category, $path) {

		// We use the callback mechanism to call the implicitAuth function.
		// If there ends up being another implicitAuth plugin - then this registration statement
		// should be removed - so that the other plugin gets called

		HookRegistry::register('LoadHandler', array(&$this, 'bPNextOcsAuth'));

		$success = parent::register($category, $path);
		$this->addLocaleData();
		return $success;
	}
	
	function getName() {
		return "BP Next OCS";
	}

	function getDisplayName() {
		return __('plugins.generic.bpnextocs.displayName');
	}

	function getDescription() {
		return __('plugins.generic.bpnextocs.description');
	}

	/**
	 * Return true that this is a site-wide plugin (over-riding superclass setting).
	 */

	function isSitePlugin() {
		return true;
	}


  /**
   * Função para logar o usuário
   * 
   */
  function userLogin( $username ){
    // , &$reason, $remember = false
    $valid = false;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $reason = null;
    $valid = false;
    $userDao =& DAORegistry::getDAO('UserDAO');

    $user =& $userDao->getUserByUsername($username, true);
    
    if($user){
      // verifica se os dados de login do usuário estão corretos 
      $valid = ($user->getPassword() === Validation::encryptCredentials($username, $password));
    }
    
    if( $valid ){
    // o usuário vai se logar e as credenciais estão corretas

      $token = $this->getToken();
      $user_email = $user->getEmail();

      $wp_user = $this->getWordpressUserFromBPWithEmail( $user_email );
      
      $this->token = $this->makeToken();

      $this->setLoginCookie( $this->token );

      $this->userLoginDB_insert( $wp_user['id'], $this->token );
      
      
    }  
  }

  
  /**
   * Desloga um usuário
   */
  function userLogout(){
    $token = $this->token;
    $this->deleteToken($token);    
    
  }
   
  function deleteToken($token){
    BPNextOCSAuthPlugin::removeLoginCookie($token);
    BPNextOCSAuthPlugin::userLoginDB_delete($token);
    
  }

  /**
   * Salva o token no banco para um usuário
   * 
   */
  function userLoginDB_insert($uid, $token){
    $conn = mysql_connect( 'localhost:3306', $this->wordpress_db_user, $this->wordpress_db_user_pass );
    if(! $conn ) {
      die('Could not connect with wordpress database : ' . mysql_error());
    }
    
    $table_name = $this->wordpress_db_prefix . 'bp_next_ocs_login';
    
    $sql = "INSERT INTO $table_name
        ( uid, token, time )
        VALUES ( $uid, '$token', NOW() )
    ";

    mysql_select_db($this->wordpress_db_name);
    $retval = mysql_query( $sql, $conn );
    if(! $retval ) {
      die('Could not salve wordpress user login in database: ' . mysql_error());
      return false;
    }
    
    mysql_close($conn);   
    return $user;
    
    
  }

  /*************** COOKIES ***********/
  
  /**
   * Seta o cookei de login
   * 
   */
  function setLoginCookie($token){
      // set user logged in data
      setcookie('wordpress_loggedInUserToken', $token, time()+1209600, '/', $this->cookie_domain , false);
  }

  /**
   * Deleta o cookie de login
   */
  function removeLoginCookie($token){
    setcookie('wordpress_loggedInUserToken', '', time()-3600, '/', $this->cookie_domain , false);
  }
  

   /**
   * deleta o token no banco 
   * 
   */
  function userLoginDB_delete($token){
 
    $conn = mysql_connect( 'localhost:3306', $this->wordpress_db_user, $this->wordpress_db_user_pass );
    if(! $conn ) {
      die('Could not connect with wordpress database : ' . mysql_error());
    }
    
    $table_name = $this->wordpress_db_prefix . 'bp_next_ocs_login';
    
     $sql = "DELETE FROM $table_name
        WHERE token = '$token'
    ";

    mysql_select_db($this->wordpress_db_name);
    $retval = mysql_query( $sql, $conn );
    if(! $retval ) {
      die('Could not get user data from wordpress database: ' . mysql_error());
      return false;
    }
    
    mysql_close($conn);   
    return $user;

  }
  
	// Log a user in after they have been authenticated 

	function bPNextOcsAuth($hookname, $args) {
    //session_start(;)
		// stop here and redirect to wordpress if are in login ou register url
		// $this->redirectToWPIfNeed();
    
		// Set retuser to point to the user that was passed by reference
    $this->wordpress_db_name = Config::getVar('bp_next_ocs', 'wordpress_db_name') ;
    $this->wordpress_db_prefix = Config::getVar('bp_next_ocs', 'wordpress_db_prefix');
    $this->wordpress_db_user = Config::getVar('bp_next_ocs', 'wordpress_db_user');
    $this->wordpress_db_user_pass = Config::getVar('bp_next_ocs', 'wordpress_db_user_pass');
    $this->cookie_domain = Config::getVar('bp_next_ocs', 'cookie_domain');
		
		
    $retuser =& $args[0];  

    // get token and set in this object
    BPNextOCSAuthPlugin::getToken();		
    //var_dump($_SESSION);exit;

    if( (!empty($args[1])) && ($args[0] == 'login' && $args[1] == 'signOut') ){
    // deslogando ...
      $this->userLogout();

    } elseif( (!empty($args[1])) && ($args[0] == 'login' && $args[1] == 'signIn') ) {
    // depois da senha quando um usuário está logando
      $this->userLogin();

    } else {

  		// Get the name of the field to use a UIN (primary key) from config file
  /*
  		$uin = Config::getVar('security', 'implicit_auth_header_uin'); // For TDL this is HTTP_TDL_TDLUID
  
  		if ($uin == "")
  			die("Implicit Auth enabled in config file - but implicit_auth_uin not defined.");
  */
  		// Get email from header -- after consulting the map

      // get logged in wordpress user and set in this object
  		$loggedIn = BPNextOCSAuthPlugin::getLoggedInUser();
  		$isloggedIn = Validation::isLoggedIn();
  		if(!$loggedIn){
  			if($isloggedIn){
  				Validation::logout();
  				header( "Location: ".$_SERVER['HTTP_REFERER'] );
  			}
  
  			return false;
  		}
  
  		// Get the user dao - so we can look up the user
  		$userDao =& DAORegistry::getDAO('UserDAO');
  
  		// Get user by auth string
    //getUserByEmail
  		$user =& $userDao->getUserByEmail( $this->loggedInUser['email'], true );
  		
  		if (isset($user)) {
  			syslog(LOG_ERR, "Found user by uid: " . $this->loggedInUser['id'] . " Returning user.");
  			syslog(LOG_ERR, "Users UID: " . $user->getAuthStr());
  
  			// Go put the user into the session and return it.
  			
  			// The user is valid, mark user as logged in in current session
  			$sessionManager =& SessionManager::getManager();
  
  			// Regenerate session ID first
  			$sessionManager->regenerateSessionId();
  
  			$session =& $sessionManager->getUserSession();
  			$session->setSessionVar('userId', $user->getId());
  			$session->setUserId($user->getId());
  			$session->setSessionVar('username', $user->getUsername());
  			if(empty($remenber)) $remember = 1;
			$session->setRemember($remember);
  
  			if ($remember && Config::getVar('general', 'session_lifetime') > 0) {
  				// Update session expiration time
  				$sessionManager->updateSessionLifetime(time() +  Config::getVar('general', 'session_lifetime') * 86400);
  			}
  
  			$user->setDateLastLogin(Core::getCurrentDate());
  			$userDao->updateObject($user);
  			
  			// reload the page
  			if(!$isloggedIn){
  				header( "Location: ".$_SERVER['HTTP_REFERER'] );
  			}
  			return null;
  
  		}
  
  		// User not found via UID or by email - so they are new - so just create them
  
  		$user = $this->registerUserFromWordpress();
  
  		$retuser = $user;
  
  		// reload the page
  		if(!$isloggedIn){		
  			header( "Location: ".$_SERVER['HTTP_REFERER'] );
  		}
  	}
		return null;
	}


	/**
	 * Register a new user. See classes/user/form/RegistrationForm.inc.php - for how this is done for registering a user in a non-shib environment.
	 */
	function registerUserFromWordpress() {

		// Create a new user object and set it's fields from the header variables

		$user = new User();

		//  id, user_nicename, display_name, email
		
		$user->setAuthStr( $this->loggedInUser['id'] );

		$user->setUsername( $this->loggedInUser['user_nicename'] ); # Mail is userid

		$user->setFirstName( $this->loggedInUser['display_name'] );
		$user->setLastName('');
		$user->setEmail( $this->loggedInUser['email'] );
		$user->setPhone('');
		$user->setMailingAddress('');
		$user->setDateRegistered(Core::getCurrentDate());
		
		
		// Set the user's  password to their email address. This may or may not be necessary

		$user->setPassword(Validation::encryptCredentials($email, $email. rand(0, 10) . 'pass'));

		// Now go insert the user in the db

		$userDao =& DAORegistry::getDAO('UserDAO');

		$userDao->insertUser($user);

		$userId = $user->getId();

		if (!$userId) {
			return false;
		}

		// Go put the user into the session and return it.
		
		// The user is valid, mark user as logged in in current session
		$sessionManager =& SessionManager::getManager();
		
		// Regenerate session ID first
		$sessionManager->regenerateSessionId();
		
		$session =& $sessionManager->getUserSession();
		$session->setSessionVar('userId', $user->getId());
		$session->setUserId($user->getId());
		$session->setSessionVar('username', $user->getUsername());
		$session->setRemember($remember);
		
		if ($remember && Config::getVar('general', 'session_lifetime') > 0) {
			// Update session expiration time
			$sessionManager->updateSessionLifetime(time() +  Config::getVar('general', 'session_lifetime') * 86400);
		}
		
		$user->setDateLastLogin(Core::getCurrentDate());
		$userDao->updateObject($user);
			
		return true;
	}

  // cria um novo texto aleatorio
  function makeToken(){
    return sha1(uniqid(mt_rand(), true));
  }
  
  // function to get logged in Token
	function getToken(){
		
		if(!$this->token){
			
			if(isset($_COOKIE['wordpress_loggedInUserToken'])){
        $this->token = $_COOKIE['wordpress_loggedInUserToken'];
				return true;
			}
		}
		return false;		
		
	}

  // function to get logged in user id
	function getLoggedInUser(){
		
		if(empty($this->loggedInUser)){
			
			if($this->token){
				$this->loggedInUser =  $this->getWordpressUserFromDB( $this->token ) ;
				return true;
			}
		}
		return false;		
		
	}
	
  /**
   * Retira o usuario do banco do wordpress com o email do usuário
   * 
   */
  function getWordpressUserFromBPWithEmail( $email ){
 
    $conn = mysql_connect( 'localhost:3306', $this->wordpress_db_user, $this->wordpress_db_user_pass );
    if(! $conn ) {
      die('Could not connect with wordpress database : ' . mysql_error());
    }

    $sql = '
    SELECT users.id, user_nicename, display_name, user_email as email
    FROM        ' . $this->wordpress_db_prefix . 'users as users
    WHERE users.user_email = "'. $email . '"
    ';

    mysql_select_db($this->wordpress_db_name);
    $retval = mysql_query( $sql, $conn );
    if(! $retval ) {
      die('Could not get user data from wordpress database: ' . mysql_error());
    }
  
    if(!$user = mysql_fetch_array($retval, MYSQL_ASSOC))
      return false;

    mysql_close($conn);   
    return $user;   
    
  }
  
  /**
   * Get Wordpress User data with token 
   *
   */
	function getWordpressUserFromDB( $token ){

		$conn = mysql_connect( 'localhost:3306', $this->wordpress_db_user, $this->wordpress_db_user_pass );
		if(! $conn ) {
			die('Could not connect with wordpress database : ' . mysql_error());
		}
		
		$sql = '
		SELECT users.id, user_nicename, display_name, user_email as email
		FROM        ' . $this->wordpress_db_prefix . 'users as users
    INNER JOIN ' . $this->wordpress_db_prefix . 'bp_next_ocs_login as bp_next_ocs_login
		ON          users.ID             =       bp_next_ocs_login.uid
		WHERE bp_next_ocs_login.token = "'. $token . '"
		';

		mysql_select_db($this->wordpress_db_name);
		$retval = mysql_query( $sql, $conn );
		if(! $retval ) {
			die('Could not get user data from wordpress database: ' . mysql_error());
		}
	
		if(!$user = mysql_fetch_array($retval, MYSQL_ASSOC))
			return false;

		mysql_close($conn);		
		return $user;
	}
  
  /**
   * Redireciona para o wordpress quando acessar alguma página de login ou registro no ocs
   */
  function redirectToWPIfNeed(){
    /*  
    $redirect_url = NULL;

    if( Request::getRequestedPage() == 'login' ){
      // página de login
      $redirect_url = 'http://www.next.icict.fiocruz.br/sec/wp-login.php?from_ocs=true';  
    }

    if( $redirect_url ){
      /* Redirect browser */ 
      //header("Location: $redirect_url"); 
      /* Make sure that code below does not get executed when we redirect. 
      //exit;
    }
    */ 
  }
}

function debugar($var){
  print '<pre><script>console.log('.json_encode($var); print ');</script></pre>';		
}

?>
