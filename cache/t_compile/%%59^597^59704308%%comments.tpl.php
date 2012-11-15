<?php /* Smarty version 2.6.26, created on 2012-09-02 16:21:22
         compiled from comment/comments.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'comment/comments.tpl', 15, false),array('modifier', 'truncate', 'comment/comments.tpl', 15, false),array('modifier', 'default', 'comment/comments.tpl', 15, false),array('modifier', 'date_format', 'comment/comments.tpl', 39, false),array('modifier', 'to_array', 'comment/comments.tpl', 46, false),array('modifier', 'assign', 'comment/comments.tpl', 46, false),array('modifier', 'strip_unsafe_html', 'comment/comments.tpl', 73, false),array('modifier', 'nl2br', 'comment/comments.tpl', 73, false),array('function', 'translate', 'comment/comments.tpl', 33, false),array('function', 'url', 'comment/comments.tpl', 46, false),array('function', 'mailto', 'comment/comments.tpl', 54, false),)), $this); ?>
<div id="comments">
<?php echo ''; ?><?php if ($this->_tpl_vars['comment']): ?><?php echo ''; ?><?php $this->assign('pageTitle', "comments.readerComments"); ?><?php echo ''; ?><?php $this->assign('pageCrumbTitleTranslated', ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['comment']->getTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 50, "...") : $this->_plugins['modifier']['truncate'][0][0]->smartyTruncate($_tmp, 50, "...")))) ? $this->_run_mod_handler('default', true, $_tmp, "&nbsp;") : smarty_modifier_default($_tmp, "&nbsp;"))); ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php $this->assign('pageTitle', "comments.readerComments"); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<?php if ($this->_tpl_vars['enableComments'] && ! $this->_tpl_vars['commentsClosed'] && ( ! $this->_tpl_vars['commentsRequireRegistration'] || $this->_tpl_vars['isUserLoggedIn'] )): ?>
	<?php $this->assign('postingAllowed', 1); ?>
<?php else: ?>
	<?php $this->assign('postingAllowed', 0); ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['comment']): ?>
	<?php $this->assign('user', $this->_tpl_vars['comment']->getUser()); ?>
	<h3><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['comment']->getTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, "&nbsp;") : smarty_modifier_default($_tmp, "&nbsp;")); ?>
</h3>
	<h4>
		<?php if ($this->_tpl_vars['user']): ?>
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "comments.authenticated",'userName' => ((is_array($_tmp=$this->_tpl_vars['user']->getFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp))), $this);?>

		<?php elseif ($this->_tpl_vars['comment']->getPosterName()): ?>
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "comments.anonymousNamed",'userName' => ((is_array($_tmp=$this->_tpl_vars['comment']->getPosterName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp))), $this);?>

		<?php else: ?>
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "comments.anonymous"), $this);?>

		<?php endif; ?>
		(<?php echo ((is_array($_tmp=$this->_tpl_vars['comment']->getDatePosted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>
)
	</h4>

	<p>

	<?php if ($this->_tpl_vars['parent']): ?>
		<?php $this->assign('parentId', $this->_tpl_vars['parent']->getCommentId()); ?>
		<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'comment','op' => 'view','path' => ((is_array($_tmp=$this->_tpl_vars['paperId'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['parentId']) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['parentId']))), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'url') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'url'));?>

		<em><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "comments.inResponseTo",'url' => $this->_tpl_vars['url'],'title' => ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['parent']->getTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, "&nbsp;") : smarty_modifier_default($_tmp, "&nbsp;"))), $this);?>
</em><br />
	<?php endif; ?>

	<?php $this->assign('hasPriorAction', 0); ?>
	<?php if ($this->_tpl_vars['comment']->getPosterEmail()): ?>
		<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "comments.emailReply"), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'emailReply') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'emailReply'));?>

		<?php echo smarty_function_mailto(array('text' => $this->_tpl_vars['emailReply'],'encode' => 'javascript','address' => $this->_tpl_vars['comment']->getPosterEmail(),'subject' => ((is_array($_tmp=@$this->_tpl_vars['comment']->getTitle())) ? $this->_run_mod_handler('default', true, $_tmp, "&nbsp;") : smarty_modifier_default($_tmp, "&nbsp;")),'extra' => 'class="action"'), $this);?>

		<?php $this->assign('hasPriorAction', 1); ?>
	<?php endif; ?>

	<?php if ($this->_tpl_vars['postingAllowed']): ?>
		<?php if ($this->_tpl_vars['hasPriorAction']): ?>&nbsp;|&nbsp;<?php endif; ?>
		<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'add','path' => ((is_array($_tmp=$this->_tpl_vars['paperId'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galleyId'], $this->_tpl_vars['comment']->getId()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galleyId'], $this->_tpl_vars['comment']->getId()))), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "comments.postReply"), $this);?>
</a>
		<?php $this->assign('hasPriorAction', 1); ?>
	<?php endif; ?>

	<?php if ($this->_tpl_vars['isManager']): ?>
		<?php if ($this->_tpl_vars['hasPriorAction']): ?>&nbsp;|&nbsp;<?php endif; ?>
		<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'delete','path' => ((is_array($_tmp=$this->_tpl_vars['paperId'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galleyId'], $this->_tpl_vars['comment']->getId()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galleyId'], $this->_tpl_vars['comment']->getId()))), $this);?>
" <?php if ($this->_tpl_vars['comment']->getChildCommentCount() != 0): ?>onclick="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "comments.confirmDeleteChildren"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'jsparam') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'jsparam'));?>
')" <?php endif; ?>class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "comments.delete"), $this);?>
</a>
		<?php $this->assign('hasPriorAction', 1); ?>
	<?php endif; ?>

	<br />
	</p>

	<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['comment']->getBody())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>


<br /><br />

<?php if ($this->_tpl_vars['comments']): ?>
	<div class="separator"></div>
	<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "comments.replies"), $this);?>
</h3><?php endif; ?>
<?php endif; ?>

<?php $_from = $this->_tpl_vars['comments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['child']):
?>
<div id="childComment">
<?php $this->assign('user', $this->_tpl_vars['child']->getUser()); ?>
<?php $this->assign('childId', $this->_tpl_vars['child']->getCommentId()); ?>
<h4><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'view','path' => ((is_array($_tmp=$this->_tpl_vars['paperId'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galleyId'], $this->_tpl_vars['childId']) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galleyId'], $this->_tpl_vars['childId']))), $this);?>
" target="_parent"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['child']->getTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, "&nbsp;") : smarty_modifier_default($_tmp, "&nbsp;")); ?>
</a></h4>
<h5>
	<?php if ($this->_tpl_vars['user']): ?>
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "comments.authenticated",'userName' => ((is_array($_tmp=$this->_tpl_vars['user']->getUserName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp))), $this);?>

	<?php elseif ($this->_tpl_vars['child']->getPosterName()): ?>
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "comments.anonymousNamed",'userName' => ((is_array($_tmp=$this->_tpl_vars['child']->getPosterName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp))), $this);?>

	<?php else: ?>
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "comments.anonymous"), $this);?>

	<?php endif; ?>
	(<?php echo ((is_array($_tmp=$this->_tpl_vars['child']->getDatePosted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>
)
</h5>

<?php $this->assign('hasPriorAction', 0); ?>

<?php if ($this->_tpl_vars['child']->getPosterEmail()): ?>
	<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "comments.emailReply"), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'emailReply') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'emailReply'));?>

	<?php echo smarty_function_mailto(array('text' => $this->_tpl_vars['emailReply'],'encode' => 'javascript','address' => ((is_array($_tmp=$this->_tpl_vars['child']->getPosterEmail())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)),'subject' => ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['child']->getTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, "&nbsp;") : smarty_modifier_default($_tmp, "&nbsp;")),'extra' => 'class="action"'), $this);?>

	<?php $this->assign('hasPriorAction', 1); ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['postingAllowed']): ?>
	<?php if ($this->_tpl_vars['hasPriorAction']): ?>&nbsp;|&nbsp;<?php endif; ?>
	<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'add','path' => ((is_array($_tmp=$this->_tpl_vars['paperId'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galleyId'], $this->_tpl_vars['childId']) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galleyId'], $this->_tpl_vars['childId']))), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "comments.postReply"), $this);?>
</a>&nbsp;&nbsp;
	<?php $this->assign('hasPriorAction', 1); ?>
<?php endif; ?>
<?php if ($this->_tpl_vars['isManager']): ?>
	<?php if ($this->_tpl_vars['hasPriorAction']): ?>&nbsp;|&nbsp;<?php endif; ?>
	<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'delete','path' => ((is_array($_tmp=$this->_tpl_vars['paperId'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galleyId'], $this->_tpl_vars['child']->getCommentId()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galleyId'], $this->_tpl_vars['child']->getCommentId()))), $this);?>
" <?php if ($this->_tpl_vars['child']->getChildCommentCount() != 0): ?>onclick="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "comments.confirmDeleteChildren"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'jsparam') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'jsparam'));?>
')" <?php endif; ?>class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "comments.delete"), $this);?>
</a>
	<?php $this->assign('hasPriorAction', 1); ?>
<?php endif; ?>
<br />

<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "comments.readMore"), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'readMore') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'readMore'));?>

<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'view','path' => ((is_array($_tmp=$this->_tpl_vars['paperId'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galleyId'], $this->_tpl_vars['childId']) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galleyId'], $this->_tpl_vars['childId']))), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'moreUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'moreUrl'));?>

<?php $this->assign('moreLink', "<a href=\"".($this->_tpl_vars['moreUrl'])."\">".($this->_tpl_vars['readMore'])."</a>"); ?>
<p><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['child']->getBody())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 300, "... ".($this->_tpl_vars['moreLink'])) : $this->_plugins['modifier']['truncate'][0][0]->smartyTruncate($_tmp, 300, "... ".($this->_tpl_vars['moreLink']))); ?>
</p>

<?php $this->assign('grandChildren', $this->_tpl_vars['child']->getChildren()); ?>
<?php if ($this->_tpl_vars['grandChildren']): ?><ul><?php endif; ?>
<?php $_from = $this->_tpl_vars['child']->getChildren(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['grandChild']):
?>
<div id="grandchildComment">
<?php $this->assign('user', $this->_tpl_vars['grandChild']->getUser()); ?>
	<li>
		<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'view','path' => ((is_array($_tmp=$this->_tpl_vars['paperId'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galleyId'], $this->_tpl_vars['grandChild']->getCommentId()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galleyId'], $this->_tpl_vars['grandChild']->getCommentId()))), $this);?>
" target="_parent"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['grandChild']->getTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, "&nbsp;") : smarty_modifier_default($_tmp, "&nbsp;")); ?>
</a>
		<?php if ($this->_tpl_vars['grandChild']->getChildCommentCount() == 1): ?>
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "comments.oneReply"), $this);?>

		<?php elseif ($this->_tpl_vars['grandChild']->getChildCommentCount() > 0): ?>
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "comments.nReplies",'num' => $this->_tpl_vars['grandChild']->getChildCommentCount()), $this);?>

		<?php endif; ?>
		
		<br/>

		<?php if ($this->_tpl_vars['user']): ?>
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "comments.authenticated",'userName' => ((is_array($_tmp=$this->_tpl_vars['user']->getFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp))), $this);?>

		<?php elseif ($this->_tpl_vars['grandChild']->getPosterName()): ?>
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "comments.anonymousNamed",'userName' => ((is_array($_tmp=$this->_tpl_vars['grandChild']->getPosterName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp))), $this);?>

		<?php else: ?>
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "comments.anonymous"), $this);?>

		<?php endif; ?>
		(<?php echo ((is_array($_tmp=$this->_tpl_vars['grandChild']->getDatePosted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>
)
	</li>
</div>
<?php endforeach; endif; unset($_from); ?>
<?php if ($this->_tpl_vars['grandChildren']): ?>
	</ul>
<?php endif; ?>
</div>
<?php endforeach; else: ?>
	<?php if (! $this->_tpl_vars['comment']): ?>
		<div id="noComments"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "comments.noComments"), $this);?>
</div>
	<?php endif; ?>
<?php endif; unset($_from); ?>

<?php if ($this->_tpl_vars['commentsClosed']): ?><div id="commentsClosed"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "comments.commentsClosed",'closeCommentsDate' => ((is_array($_tmp=$this->_tpl_vars['closeCommentsDate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort']))), $this);?>
<br /></div><?php endif; ?>

<?php if ($this->_tpl_vars['postingAllowed']): ?>
	<div class="separator"></div>
	<div id="addComment"<p><a class="action" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'add','path' => ((is_array($_tmp=$this->_tpl_vars['paperId'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galleyId']) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galleyId']))), $this);?>
" target="_parent"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.addComment"), $this);?>
</a></p></div>
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>