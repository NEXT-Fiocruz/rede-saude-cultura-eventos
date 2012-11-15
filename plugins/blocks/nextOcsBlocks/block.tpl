{**
 * block.tpl

 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Common site sidebar menu -- user tools.
 * 
 * Good part of this code is taken from default OCS user block plugin writed by John Willinsky 
 * 
 * $Id$
 *}

<div class="block" id="sidebarUser">
	<span class="blockTitle">{translate key="navigation.user"}</span>
	{if $isUserLoggedIn}
	
	
		{translate key="plugins.block.user.loggedInAs"}<br /><br />
		<strong>{$loggedInUsername|escape}</strong><br />



		<ul>
			{if $hasOtherConferences}
	    <div class="conferencia-externa">
        <span class="antes-do-link"> </span>
         <a href="#">Conexão Saúde e (Ciber)Cultura</a>
      </div>
			
				<li><a href="{url conference="index" page="user"}">{translate key="plugins.block.user.myConferences"}</a></li>
			{/if}
			<li><a href="{$userBlockLogoutUrl}"><button type="button" class="ocs-signout-sidebar-button">Sair</button></a></li>
			{if $userSession->getSessionVar('signedInAs')}
				<li><a href="{$userBlockLogoutUrl}"><button type="button" class="ocs-signout-sidebar-button">Sair</button></a></li>
			{/if}
		</ul>
	{else} 
		<a href="{$userBlockLoginUrl}"><button type="button" class="ocs-login-sidebar-button">Logar</button></a></br>
		<a href="{$userBlockRegisterUrl}">Registrar-se</a>
	{/if}
</div>
