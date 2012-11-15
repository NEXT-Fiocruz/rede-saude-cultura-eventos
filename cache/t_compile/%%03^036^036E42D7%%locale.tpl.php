<?php /* Smarty version 2.6.26, created on 2012-10-26 22:45:09
         compiled from file:/var/www/next/eventos/plugins/generic/translator/locale.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'file:/var/www/next/eventos/plugins/generic/translator/locale.tpl', 12, false),array('function', 'url', 'file:/var/www/next/eventos/plugins/generic/translator/locale.tpl', 17, false),array('function', 'page_info', 'file:/var/www/next/eventos/plugins/generic/translator/locale.tpl', 73, false),array('function', 'page_links', 'file:/var/www/next/eventos/plugins/generic/translator/locale.tpl', 74, false),array('modifier', 'assign', 'file:/var/www/next/eventos/plugins/generic/translator/locale.tpl', 12, false),array('modifier', 'escape', 'file:/var/www/next/eventos/plugins/generic/translator/locale.tpl', 35, false),array('modifier', 'to_array', 'file:/var/www/next/eventos/plugins/generic/translator/locale.tpl', 45, false),array('block', 'iterate', 'file:/var/www/next/eventos/plugins/generic/translator/locale.tpl', 34, false),)), $this); ?>
<?php echo ''; ?><?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.translator.locale",'locale' => $this->_tpl_vars['locale']), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'pageTitleTranslated') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'pageTitleTranslated'));?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<ul class="menu">
	<li class="current"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'edit','path' => $this->_tpl_vars['locale']), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.edit"), $this);?>
</a></li>
	<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'check','path' => $this->_tpl_vars['locale']), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.translator.check"), $this);?>
</a></li>
</ul>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.translator.localeDescription"), $this);?>
</p>

<div id="localeFiles">
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.translator.localeFiles"), $this);?>
</h3>
<table class="listing" width="100%">
	<tr><td colspan="2" class="headseparator">&nbsp;</td></tr>
	<tr class="heading" valign="bottom">
		<td width="85%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.translator.file.filename"), $this);?>
</td>
		<td width="15%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.action"), $this);?>
</td>
	</tr>
	<tr><td colspan="2" class="headseparator">&nbsp;</td></tr>

<?php $this->assign('needsAsteriskNote', 0); ?>
<?php $this->_tag_stack[] = array('iterate', array('from' => 'localeFiles','item' => 'filename')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php $this->assign('filenameEscaped', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['filename'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'url')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'url'))); ?>
<?php if (file_exists ( $this->_tpl_vars['filename'] )): ?>
	<?php $this->assign('fileExists', 1); ?>
<?php else: ?>
	<?php $this->assign('fileExists', 0); ?>
	<?php $this->assign('needsAsteriskNote', 1); ?>
<?php endif; ?>
	<tr valign="top">
		<td>
			<?php if ($this->_tpl_vars['fileExists']): ?>
				<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'downloadLocaleFile','path' => ((is_array($_tmp=$this->_tpl_vars['locale'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['filenameEscaped']) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['filenameEscaped']))), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['filename'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a>
			<?php else: ?>
				<?php echo ((is_array($_tmp=$this->_tpl_vars['filename'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
&nbsp;*
			<?php endif; ?>
		</td>
		<td>
			<?php if ($this->_tpl_vars['fileExists']): ?>
				<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editLocaleFile','path' => ((is_array($_tmp=$this->_tpl_vars['locale'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['filenameEscaped']) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['filenameEscaped']))), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.edit"), $this);?>
</a>
			<?php else: ?>
				<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editLocaleFile','path' => ((is_array($_tmp=$this->_tpl_vars['locale'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['filenameEscaped']) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['filenameEscaped']))), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'redirectUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'redirectUrl'));?>

				<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'createFile','path' => ((is_array($_tmp=$this->_tpl_vars['locale'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['filenameEscaped']) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['filenameEscaped'])),'redirectUrl' => $this->_tpl_vars['redirectUrl']), $this);?>
" class="action" onclick='return confirm("<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.translator.file.confirmCreate",'filename' => $this->_tpl_vars['filename']), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript'));?>
")'><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.create"), $this);?>
</a>
			<?php endif; ?>
		</td>
	</tr>
	<tr>
		<td colspan="2" class="<?php if ($this->_tpl_vars['localeFiles']->eof()): ?>end<?php endif; ?>separator">&nbsp;</td>
	</tr>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

<?php if ($this->_tpl_vars['localeFiles']->wasEmpty()): ?>
	<tr>
		<td colspan="2" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.none"), $this);?>
</td>
	</tr>
	<tr>
		<td colspan="2" class="endseparator">&nbsp;</td>
	</tr>
<?php else: ?>
	<tr>
		<td align="left"><?php echo $this->_plugins['function']['page_info'][0][0]->smartyPageInfo(array('iterator' => $this->_tpl_vars['localeFiles']), $this);?>
</td>
		<td align="right"><?php echo $this->_plugins['function']['page_links'][0][0]->smartyPageLinks(array('anchor' => 'localeFiles','name' => 'localeFiles','iterator' => $this->_tpl_vars['localeFiles']), $this);?>
</td>
	</tr>
<?php endif; ?>

</table>

<?php if ($this->_tpl_vars['needsAsteriskNote']): ?>
	<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.translator.file.doesNotExistNote"), $this);?>
</span>
<?php endif; ?>
</div>

<div id="miscFiles">
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.translator.miscFiles"), $this);?>
</h3>
<table class="listing" width="100%">
	<tr><td colspan="2" class="headseparator">&nbsp;</td></tr>
	<tr class="heading" valign="bottom">
		<td width="85%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.translator.file.filename"), $this);?>
</td>
		<td width="15%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.action"), $this);?>
</td>
	</tr>
	<tr><td colspan="2" class="headseparator">&nbsp;</td></tr>

<?php $this->assign('needsAsteriskNote', 0); ?>
<?php $this->_tag_stack[] = array('iterate', array('from' => 'miscFiles','item' => 'filename')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php $this->assign('filenameEscaped', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['filename'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'url')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'url'))); ?>
<?php if (file_exists ( $this->_tpl_vars['filename'] )): ?>
	<?php $this->assign('fileExists', 1); ?>
<?php else: ?>
	<?php $this->assign('fileExists', 0); ?>
	<?php $this->assign('needsAsteriskNote', 1); ?>
<?php endif; ?>
	<tr valign="top">
		<td>
			<?php if ($this->_tpl_vars['fileExists']): ?>
				<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'downloadLocaleFile','path' => ((is_array($_tmp=$this->_tpl_vars['locale'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['filenameEscaped']) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['filenameEscaped']))), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['filename'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a>
			<?php else: ?>
				<?php echo ((is_array($_tmp=$this->_tpl_vars['filename'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
&nbsp;*
			<?php endif; ?>
			</td>
		<td>
			<?php if ($this->_tpl_vars['fileExists']): ?>
				<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editMiscFile','path' => ((is_array($_tmp=$this->_tpl_vars['locale'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['filenameEscaped']) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['filenameEscaped']))), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.edit"), $this);?>
</a>
			<?php else: ?>
				<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editMiscFile','path' => ((is_array($_tmp=$this->_tpl_vars['locale'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['filenameEscaped']) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['filenameEscaped']))), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'redirectUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'redirectUrl'));?>

				<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'createFile','path' => ((is_array($_tmp=$this->_tpl_vars['locale'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['filenameEscaped']) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['filenameEscaped'])),'redirectUrl' => $this->_tpl_vars['redirectUrl']), $this);?>
" class="action" onclick='return confirm("<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.translator.file.confirmCreate",'filename' => $this->_tpl_vars['filename']), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript'));?>
")'><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.create"), $this);?>
</a>
			<?php endif; ?>
		</td>
	</tr>
	<tr>
		<td colspan="2" class="<?php if ($this->_tpl_vars['miscFiles']->eof()): ?>end<?php endif; ?>separator">&nbsp;</td>
	</tr>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

<?php if ($this->_tpl_vars['miscFiles']->wasEmpty()): ?>
	<tr>
		<td colspan="2" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.none"), $this);?>
</td>
	</tr>
	<tr>
		<td colspan="2" class="endseparator">&nbsp;</td>
	</tr>
<?php else: ?>
	<tr>
		<td align="left"><?php echo $this->_plugins['function']['page_info'][0][0]->smartyPageInfo(array('iterator' => $this->_tpl_vars['miscFiles']), $this);?>
</td>
		<td align="right"><?php echo $this->_plugins['function']['page_links'][0][0]->smartyPageLinks(array('anchor' => 'miscFiles','name' => 'miscFiles','iterator' => $this->_tpl_vars['miscFiles']), $this);?>
</td>
	</tr>
<?php endif; ?>

</table>

<?php if ($this->_tpl_vars['needsAsteriskNote']): ?>
	<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.translator.file.doesNotExistNote"), $this);?>
</span>
<?php endif; ?>
</div>

<div id="emails">
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.translator.emails"), $this);?>
</h3>
<table class="listing" width="100%">
	<tr><td colspan="3" class="headseparator">&nbsp;</td></tr>
	<tr class="heading" valign="bottom">
		<td width="35%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.emails.emailKey"), $this);?>
</td>
		<td width="50%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.translator.file.filename"), $this);?>
</td>
		<td width="15%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.action"), $this);?>
</td>
	</tr>
	<tr><td colspan="3" class="headseparator">&nbsp;</td></tr>

<?php $this->_tag_stack[] = array('iterate', array('from' => 'emails','key' => 'emailKey','item' => 'email')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<tr valign="top">
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['emailKey'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</td>
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['email']['subject'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</td>
		<td>
			<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editEmail','path' => ((is_array($_tmp=$this->_tpl_vars['locale'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['emailKey']) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['emailKey']))), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.edit"), $this);?>
</a>&nbsp;|&nbsp;<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'deleteEmail','path' => ((is_array($_tmp=$this->_tpl_vars['locale'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['emailKey']) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['emailKey']))), $this);?>
" class="action" onclick="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.translator.confirmDelete"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'jsparam') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'jsparam'));?>
')"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
</a>
		</td>
	</tr>
	<tr>
		<td colspan="3" class="<?php if ($this->_tpl_vars['emails']->eof()): ?>end<?php endif; ?>separator">&nbsp;</td>
	</tr>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

<?php if ($this->_tpl_vars['emails']->wasEmpty()): ?>
	<tr>
		<td colspan="3" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.none"), $this);?>
</td>
	</tr>
	<tr>
		<td colspan="3" class="endseparator">&nbsp;</td>
	</tr>
<?php else: ?>
	<tr>
		<td align="left"><?php echo $this->_plugins['function']['page_info'][0][0]->smartyPageInfo(array('iterator' => $this->_tpl_vars['emails']), $this);?>
</td>
		<td colspan="2" align="right"><?php echo $this->_plugins['function']['page_links'][0][0]->smartyPageLinks(array('anchor' => 'emails','name' => 'emails','iterator' => $this->_tpl_vars['emails']), $this);?>
</td>
	</tr>
<?php endif; ?>

</table>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>