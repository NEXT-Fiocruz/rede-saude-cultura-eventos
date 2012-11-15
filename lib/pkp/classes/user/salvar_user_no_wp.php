<?php

/**
 * @TODO As queries precisam de tratamento contra sql injection 
 * 
 */

//var_dump( $_POST );


//var_dump( $user );


$banco_ocs_wp_user = 'ocs_wp_user';



function get_url($url){
        $crl = curl_init();
        $timeout = 5;
        curl_setopt ($crl, CURLOPT_URL,$url);
        curl_setopt ($crl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt ($crl, CURLOPT_CONNECTTIMEOUT, $timeout);
        $ret = curl_exec($crl);
        curl_close($crl);
        return $ret;
}




/**
 * Verifica se um user do wordpress existe
 * 
 */
function checkUserWP(){
  
}


/**
 * Salva um user no WP
 */
function saveUserWPComURL(
  $username, $email, $name, $password, 
  $naturezaatuacao, $naturezaatuacaooutro,
  $temas, $participardarede,
  $banco
){

  $url = 'http://www.next.icict.fiocruz.br/sec/auwp.php?';
  $query = "login=$username&senha=$password&email=$email&nickname=$name";
  $url = $url.$query;
  get_url( $url );

}



/**
 * Salva um user no WP
 */
function saveUserWP(
  $username, $email, $name, $password, 
  $naturezaatuacao, $naturezaatuacaooutro,
  $temas, $participardarede, $cpf,
  $banco
){ 
 
  // PLUGIN CONFIGURATION
  $wordpress_db_name = 'sec_conferencias';
  $wordpress_db_prefix = '';
  $wordpress_db_user = 'sec_user';
  $wordpress_db_user_pass = 'sec#2012';

  $conn = mysql_connect( 'localhost:3306', $wordpress_db_user, $wordpress_db_user_pass );
  if(! $conn ) {
    die('Could not connect with wordpress database : ' . mysql_error());
  }


  $sql = "INSERT INTO `$banco` (
    `username`,
    `password`,
    `name`,  
    `email`,
    `naturezaatuacao`,
    `naturezaatuacaooutro`,
    `temas`,
    `participardarede`,
    `cpf`
  ) VALUES (
    '$username',
    '$password',
    '$name',
    '$email',
    '$naturezaatuacao',
    '$naturezaatuacaooutro',
    '$temas',
    '$participardarede',
    '$cpf'
  );"; 

//print_r($sql);
  mysql_select_db($wordpress_db_name);
  $retval = mysql_query( $sql, $conn );
  if(! $retval ) {
    die('Erro no banco de dados: ' . mysql_error());
  }

  if(!$user = mysql_fetch_array($retval, MYSQL_ASSOC))
    return false;

  mysql_close($conn);   
  return $user;

}

// se o user aceitou ser participante da rede sade e cultura na internet
if( !EMPTY( $_POST['participardarede'])){
  
  saveUserWPComURL(
    $_POST['username'],    
    $_POST['email'],
    $_POST['firstName'].' '. $_POST['lastName'], 
    $_POST['password'],
    $_POST['naturezaatuacao'],
    $_POST['naturezaatuacaooutro'],
    $_POST['temas'],
    $_POST['participardarede'],
    $banco_ocs_wp_user
  
  ); 


 saveUserWP(
    $_POST['username'],    
    $_POST['email'],
    $_POST['firstName'].' '. $_POST['lastName'], 
    $_POST['password'],
    serialize($_POST['naturezaatuacao']),
    $_POST['naturezaatuacaooutro'],
    serialize($_POST['temas']),
    $_POST['participardarede'],
    $_POST['cpf'],
    $banco_ocs_wp_user
  ); 
}
//die('finalizando aqui');

