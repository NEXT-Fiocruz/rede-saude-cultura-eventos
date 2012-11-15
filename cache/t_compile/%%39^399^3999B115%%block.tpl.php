<?php /* Smarty version 2.6.26, created on 2012-09-11 18:42:12
         compiled from file:/var/www/next/conferencias/plugins/blocks/nextOcsBlocks/block.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'file:/var/www/next/conferencias/plugins/blocks/nextOcsBlocks/block.tpl', 14, false),array('function', 'url', 'file:/var/www/next/conferencias/plugins/blocks/nextOcsBlocks/block.tpl', 30, false),array('modifier', 'escape', 'file:/var/www/next/conferencias/plugins/blocks/nextOcsBlocks/block.tpl', 19, false),)), $this); ?>

<div class="block" id="sidebarUser">
	<span class="blockTitle"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.user"), $this);?>
</span>
	<?php if ($this->_tpl_vars['isUserLoggedIn']): ?>
	
	
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.block.user.loggedInAs"), $this);?>
<br /><br />
		<strong><?php echo ((is_array($_tmp=$this->_tpl_vars['loggedInUsername'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</strong><br />



		<ul>
			<?php if ($this->_tpl_vars['hasOtherConferences']): ?>
	    <div class="conferencia-externa">
        <span class="antes-do-link"> </span>
         <a href="#">Conexão Saúde e (Ciber)Cultura</a>
      </div>
			
				<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('conference' => 'index','page' => 'user'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.block.user.myConferences"), $this);?>
</a></li>
			<?php endif; ?>
			<li><a href="<?php echo $this->_tpl_vars['userBlockLogoutUrl']; ?>
"><button type="button" class="ocs-signout-sidebar-button">Sair</button></a></li>
			<?php if ($this->_tpl_vars['userSession']->getSessionVar('signedInAs')): ?>
				<li><a href="<?php echo $this->_tpl_vars['userBlockLogoutUrl']; ?>
"><button type="button" class="ocs-signout-sidebar-button">Sair</button></a></li>
			<?php endif; ?>
		</ul>
	<?php else: ?> 
		<a href="<?php echo $this->_tpl_vars['userBlockLoginUrl']; ?>
"><button type="button" class="ocs-login-sidebar-button">Logar</button></a></br>
		<a href="<?php echo $this->_tpl_vars['userBlockRegisterUrl']; ?>
">Registrar-se</a>
	<?php endif; ?>
</div>