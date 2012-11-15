<?php /* Smarty version 2.6.26, created on 2012-09-02 16:18:54
         compiled from comment/comment.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'comment/comment.tpl', 30, false),array('modifier', 'default', 'comment/comment.tpl', 41, false),array('modifier', 'to_array', 'comment/comment.tpl', 43, false),array('modifier', 'date_format', 'comment/comment.tpl', 91, false),array('function', 'url', 'comment/comment.tpl', 43, false),array('function', 'translate', 'comment/comment.tpl', 46, false),array('function', 'fieldLabel', 'comment/comment.tpl', 75, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "comments.enterComment"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<script type="text/javascript">
<!--
<?php echo '
function handleAnonymousCheckbox(theBox) {
	if (theBox.checked) {
		document.submit.posterName.disabled = false;
		document.submit.posterEmail.disabled = false;
		document.submit.posterName.value = "";
		document.submit.posterEmail.value = "";
		document.submit.posterName.focus();
	} else {
		document.submit.posterName.disabled = true;
		document.submit.posterEmail.disabled = true;
		'; ?>
<?php if ($this->_tpl_vars['commentsAllowAnonymous']): ?>
		document.submit.posterName.value = "<?php echo ((is_array($_tmp=$this->_tpl_vars['userName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
";
		document.submit.posterEmail.value = "<?php echo ((is_array($_tmp=$this->_tpl_vars['userEmail'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
";
		<?php endif; ?><?php echo '
	}
}
// -->
'; ?>

</script>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $this->assign('parentId', ((is_array($_tmp=@$this->_tpl_vars['parentId'])) ? $this->_run_mod_handler('default', true, $_tmp, '0') : smarty_modifier_default($_tmp, '0'))); ?>
<div id="comment">
<form name="submit" action="<?php if ($this->_tpl_vars['commentId']): ?><?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'edit','path' => ((is_array($_tmp=$this->_tpl_vars['paperId'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galleyId'], $this->_tpl_vars['commentId']) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galleyId'], $this->_tpl_vars['commentId']))), $this);?>
<?php else: ?><?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'add','path' => ((is_array($_tmp=$this->_tpl_vars['paperId'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galleyId'], $this->_tpl_vars['parentId'], 'save') : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galleyId'], $this->_tpl_vars['parentId'], 'save'))), $this);?>
<?php endif; ?>" method="post">
<table class="data" width="100%">
	<tr valign="top">
		<td class="label" width="20%"><label for="posterName"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "comments.name"), $this);?>
</label></td>
		<td class="value" width="80%"><input type="text" class="textField" name="posterName" id="posterName" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['posterName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="40" maxlength="90" /></td>
	</tr>
	<tr valign="top">
		<td class="label"><label for="posterEmail"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "comments.email"), $this);?>
</label></td>
		<td class="value"><input type="text" class="textField" name="posterEmail" id="posterEmail" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['posterEmail'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="40" maxlength="90" /></td>
	</tr>
	<?php if ($this->_tpl_vars['isUserLoggedIn'] && $this->_tpl_vars['commentsAllowAnonymous']): ?>
	<tr valign="top">
		<td class="label">&nbsp;</td>
		<td class="value">
			<input type="checkbox" name="anonymous" id="anonymous" onclick="handleAnonymousCheckbox(this)">
			<label for="anonymous"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "comments.postAnonymously"), $this);?>
</label>
		</td>
	</tr>
	<?php endif; ?>
	<tr valign="top">
		<td class="label"><label for="title"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "comments.title"), $this);?>
</label></td>
		<td class="value"><input type="text" class="textField" name="title" id="title" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="60" maxlength="255" /></td>
	</tr>
	<tr valign="top">
		<td class="label"><label for="bodyField"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "comments.body"), $this);?>
</label></td>
		<td class="value">
			<textarea class="textArea" name="body" id="bodyField" rows="5" cols="60"><?php echo ((is_array($_tmp=$this->_tpl_vars['body'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</textarea>
		</td>
	</tr>

<?php if ($this->_tpl_vars['captchaEnabled']): ?>
	<tr valign="top">
		<td class="label" valign="top"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'captcha','required' => 'true','key' => "common.captchaField"), $this);?>
</td>
		<td class="value">
			<img src="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user','op' => 'viewCaptcha','path' => $this->_tpl_vars['captchaId']), $this);?>
" alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.captchaField.altText"), $this);?>
" /><br />
			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.captchaField.description"), $this);?>
</span><br />
			<input name="captcha" id="captcha" value="" size="20" maxlength="32" class="textField" />
			<input type="hidden" name="captchaId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['captchaId'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'quoted') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'quoted')); ?>
" />
		</td>
	</tr>
<?php endif; ?>

</table>

<p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.save"), $this);?>
" class="button defaultButton" /> <input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" class="button" onclick="location.href='<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'comment','op' => 'view','path' => ((is_array($_tmp=$this->_tpl_vars['paperId'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galleyId'], $this->_tpl_vars['parentId']) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galleyId'], $this->_tpl_vars['parentId']))), $this);?>
';" /></p>

</form>
</div>
<?php if ($this->_tpl_vars['commentsClosed']): ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "comments.commentsClosed",'closeCommentsDate' => ((is_array($_tmp=$this->_tpl_vars['closeCommentsDate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort']))), $this);?>
<br /><?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>