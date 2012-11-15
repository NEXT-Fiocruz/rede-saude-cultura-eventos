<?php /* Smarty version 2.6.26, created on 2012-11-07 10:38:32
         compiled from file:/var/www/next/eventos/plugins/generic/customBlockManager/editCustomBlockForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'plugin_url', 'file:/var/www/next/eventos/plugins/generic/customBlockManager/editCustomBlockForm.tpl', 13, false),array('function', 'fieldLabel', 'file:/var/www/next/eventos/plugins/generic/customBlockManager/editCustomBlockForm.tpl', 17, false),array('function', 'translate', 'file:/var/www/next/eventos/plugins/generic/customBlockManager/editCustomBlockForm.tpl', 24, false),array('modifier', 'escape', 'file:/var/www/next/eventos/plugins/generic/customBlockManager/editCustomBlockForm.tpl', 19, false),)), $this); ?>
<?php $this->assign('pageTitle', "plugins.generic.customBlock.editContent"); ?> 
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<br />
<form method="post" name="editCustomBlockForm" action="<?php echo $this->_plugins['function']['plugin_url'][0][0]->smartyPluginUrl(array('path' => 'save'), $this);?>
" >
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<table class="data" width="100%">
	<tr>
		<td width="20%" class="label" valign="top"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('required' => 'true','name' => 'blockContent','key' => "plugins.generic.customBlock.content"), $this);?>
</td>
		<td>
		<textarea name="blockContent" cols="30" rows="30"><?php echo ((is_array($_tmp=$this->_tpl_vars['blockContent'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</textarea>
		</td>
	</tr>
</table>

<p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.save"), $this);?>
" class="button defaultButton" />
<input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" class="button" onclick="document.location.href='<?php echo $this->_plugins['function']['plugin_url'][0][0]->smartyPluginUrl(array('path' => 'settings'), $this);?>
'" /></p>

</form>

<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>