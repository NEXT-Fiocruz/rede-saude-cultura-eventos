<?php

/**
 * UserBlockPlugin.inc.php
 *
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class UserBlockPlugin
 * @ingroup plugins
 *
 * @brief Class for user block plugin
 * 
 * Part of this code is taken from default OCS user block plugin writed by John Willinsky
 */

//$Id$

import('plugins.BlockPlugin');
 
class NextOcsBlocksBlockPlugin extends BlockPlugin {
	function register($category, $path) {
		$success = parent::register($category, $path);
		if ($success) {
			$this->addLocaleData();
			AppLocale::requireComponents(array(LOCALE_COMPONENT_PKP_USER));
		}
		return $success;
	}

	/**
	 * Get the supported contexts (e.g. BLOCK_CONTEXT_...) for this block.
	 * @return array
	 */
	function getSupportedContexts() {
		return array(BLOCK_CONTEXT_LEFT_SIDEBAR, BLOCK_CONTEXT_RIGHT_SIDEBAR);
	}

	/**
	 * Get the name of this plugin. The name must be unique within
	 * its category.
	 * @return String name of plugin
	 */
	function getName() {
		return 'nextOcsBlocksUserBlockPlugin';
	}

	/**
	 * Install default settings on system install.
	 * @return string
	 */
	function getInstallSitePluginSettingsFile() {
		return $this->getPluginPath() . '/settings.xml';
	}

	/**
	 * Install default settings on conference creation.
	 * @return string
	 */
	function getNewConferencePluginSettingsFile() {
		return $this->getPluginPath() . '/settings.xml';
	}

	/**
	 * Get the display name of this plugin.
	 * @return String
	 */
	function getDisplayName() {
		return __('plugins.block.user.displayName');
	}

	/**
	 * Get a description of the plugin.
	 */
	function getDescription() {
		return __('plugins.block.user.description');
	}

	function getContents(&$templateMgr) {
		if (!defined('SESSION_DISABLE_INIT')) {
			$session =& Request::getSession();
			$templateMgr->assign_by_ref('userSession', $session);

			$templateMgr->assign('loggedInUsername', $session->getSessionVar('username'));
			$templateMgr->assign('userBlockLoginUrl', $this->getUserLoginUrl());
      $templateMgr->assign('userBlockLogoutUrl', $this->getUserLogoutUrl());
      $templateMgr->assign('userBlockRegisterUrl', $this->getUserRegisterUrl());
			$templateMgr->assign('wpLoginPage', $this->wpLoginPagePrint());
		}
		return parent::getContents($templateMgr);
	}
	
	function wpLoginPagePrint(){
		return 'http://www.next.icict.fiocruz.br/sec/wp-login.php' . '?redirect_to=' . $this->curentPageURL();
	}

	function curentPageURL() {
		$pageURL = 'http';
		if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
		$pageURL .= "://";
		if ($_SERVER["SERVER_PORT"] != "80") {
			$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
		} else {
			$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
		}
		return $pageURL;
	}
  
  // getters //
  
  function getUserLoginUrl(){
    return 'http://www.next.icict.fiocruz.br/sec/wp-login.php?from_ocs=true' .
    $this->redirectToOcs();
  }

  function getUserLogoutUrl(){
    return 'http://www.next.icict.fiocruz.br/sec/wp-login.php?action=logout&from_ocs=true' .
    $this->redirectToOcs();
  }
  
  function getUserProfileUrl(){
    return 'http://www.next.icict.fiocruz.br/sec/my-profile' .
    $this->redirectToOcs();
  }
  
  function getUserRegisterUrl(){
    return 'http://www.next.icict.fiocruz.br/sec/register/?from_ocs=true' .
    $this->redirectToOcs();
  }
  
  function redirectToOcs(){
    return '&redirect_to=' . Request::url();
  }
  
}

?>
