<?php /* Smarty version 2.6.26, created on 2012-09-02 16:06:33
         compiled from trackDirector/submissionsInReview.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sort_search', 'trackDirector/submissionsInReview.tpl', 15, false),array('function', 'translate', 'trackDirector/submissionsInReview.tpl', 21, false),array('function', 'url', 'trackDirector/submissionsInReview.tpl', 43, false),array('function', 'page_info', 'trackDirector/submissionsInReview.tpl', 96, false),array('function', 'page_links', 'trackDirector/submissionsInReview.tpl', 97, false),array('block', 'iterate', 'trackDirector/submissionsInReview.tpl', 35, false),array('modifier', 'date_format', 'trackDirector/submissionsInReview.tpl', 40, false),array('modifier', 'escape', 'trackDirector/submissionsInReview.tpl', 41, false),array('modifier', 'truncate', 'trackDirector/submissionsInReview.tpl', 42, false),array('modifier', 'to_array', 'trackDirector/submissionsInReview.tpl', 43, false),array('modifier', 'strip_unsafe_html', 'trackDirector/submissionsInReview.tpl', 43, false),array('modifier', 'default', 'trackDirector/submissionsInReview.tpl', 55, false),)), $this); ?>
<div id="submissions">
<table width="100%" class="listing">
	<tr><td colspan="7" class="headseparator">&nbsp;</td></tr>
	<tr class="heading" valign="bottom">
		<td width="5%"><?php echo $this->_plugins['function']['sort_search'][0][0]->smartySortSearch(array('key' => "common.id",'sort' => 'id'), $this);?>
</td>
		<td width="5%"><span class="disabled">MM-DD</span><br /><?php echo $this->_plugins['function']['sort_search'][0][0]->smartySortSearch(array('key' => "submissions.submit",'sort' => 'submitDate'), $this);?>
</td>
		<td width="5%"><?php echo $this->_plugins['function']['sort_search'][0][0]->smartySortSearch(array('key' => "submissions.track",'sort' => 'track'), $this);?>
</td>
		<td width="20%"><?php echo $this->_plugins['function']['sort_search'][0][0]->smartySortSearch(array('key' => "paper.authors",'sort' => 'authors'), $this);?>
</td>
		<td width="20%"><?php echo $this->_plugins['function']['sort_search'][0][0]->smartySortSearch(array('key' => "paper.title",'sort' => 'title'), $this);?>
</td>
		<td width="40%">
			<center><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.peerReview"), $this);?>
</center>
			<table width="100%">
				<tr valign="top">
					<td width="20%" style="padding: 0 4px 0 0; font-size: 1.0em"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submissions.reviewStage"), $this);?>
</td>
					<td width="20%" style="padding: 0 4px 0 0; font-size: 1.0em"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.ask"), $this);?>
</td>
					<td width="20%" style="padding: 0 4px 0 0; font-size: 1.0em"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.due"), $this);?>
</td>
					<td width="20%" style="padding: 0 4px 0 0; font-size: 1.0em"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.done"), $this);?>
</td>
				</tr>
			</table>
		</td>
		<td width="5%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submissions.ruling"), $this);?>
</td>
	</tr>
	<tr><td colspan="7" class="headseparator">&nbsp;</td></tr>

<?php $this->_tag_stack[] = array('iterate', array('from' => 'submissions','item' => 'submission')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>

	<?php $this->assign('paperId', $this->_tpl_vars['submission']->getPaperId()); ?>
	<tr valign="top">
		<td><?php echo $this->_tpl_vars['submission']->getPaperId(); ?>
</td>
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['submission']->getDateSubmitted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatTrunc']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatTrunc'])); ?>
</td>
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['submission']->getTrackAbbrev())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</td>
		<td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['submission']->getAuthorString(true))) ? $this->_run_mod_handler('truncate', true, $_tmp, 40, "...") : $this->_plugins['modifier']['truncate'][0][0]->smartyTruncate($_tmp, 40, "...")))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</td>
		<td><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'submissionReview','path' => ((is_array($_tmp=$this->_tpl_vars['submission']->getPaperId())) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['submission']->getCurrentStage()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['submission']->getCurrentStage()))), $this);?>
" class="action"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['submission']->getLocalizedTitle())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 40, "...") : $this->_plugins['modifier']['truncate'][0][0]->smartyTruncate($_tmp, 40, "...")); ?>
</a></td>
		<td>
		<table width="100%">
			<?php $this->assign('displayedRound', 0); ?>
			<?php $_from = $this->_tpl_vars['submission']->getReviewAssignments(null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['reviewAssignmentTypes']):
?>
				<?php $_from = $this->_tpl_vars['reviewAssignmentTypes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['assignmentList'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['assignmentList']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['assignment']):
        $this->_foreach['assignmentList']['iteration']++;
?>
					<?php $this->assign('displayedRound', 1); ?>
					<?php if (! $this->_tpl_vars['assignment']->getCancelled() && ! $this->_tpl_vars['assignment']->getDeclined()): ?>
					<tr valign="top">
						<?php $this->assign('stage', $this->_tpl_vars['assignment']->getStage()); ?>
						<td width="25%" style="padding: 0 4px 0 0; font-size: 1.0em"><?php echo ((is_array($_tmp=$this->_tpl_vars['stage'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</td>
						<td width="25%" style="padding: 0 4px 0 0; font-size: 1.0em"><?php if ($this->_tpl_vars['assignment']->getDateNotified()): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['assignment']->getDateNotified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatTrunc']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatTrunc'])); ?>
<?php else: ?>&mdash;<?php endif; ?></td>
						<td width="25%" style="padding: 0 4px 0 0; font-size: 1.0em"><?php if ($this->_tpl_vars['assignment']->getDateCompleted() || ! $this->_tpl_vars['assignment']->getDateConfirmed()): ?>&mdash;<?php else: ?><?php echo ((is_array($_tmp=@$this->_tpl_vars['assignment']->getWeeksDue())) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
<?php endif; ?></td>
						<td width="25%" style="padding: 0 4px 0 0; font-size: 1.0em"><?php if ($this->_tpl_vars['assignment']->getDateCompleted()): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['assignment']->getDateCompleted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatTrunc']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatTrunc'])); ?>
<?php else: ?>&mdash;<?php endif; ?></td>
					</tr>
					<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?>
			<?php endforeach; endif; unset($_from); ?>
			<?php if (! $this->_tpl_vars['displayedRound']): ?>
				<tr valign="top">
					<td width="25%" style="padding: 0 4px 0 0; font-size: 1.0em">&mdash;</td>
					<td width="25%" style="padding: 0 4px 0 0; font-size: 1.0em">&mdash;</td>
					<td width="25%" style="padding: 0 4px 0 0; font-size: 1.0em">&mdash;</td>
					<td width="25%" style="padding: 0 0 0 0; font-size:1.0em">&mdash;</td>
				</tr>
			<?php endif; ?>
		</table>
		</td>
		<td>
			<?php $_from = $this->_tpl_vars['submission']->getDecisions(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['decisions']):
?>
				<?php $_from = $this->_tpl_vars['decisions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['decisionList'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['decisionList']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['decision']):
        $this->_foreach['decisionList']['iteration']++;
?>
					<?php if (($this->_foreach['decisionList']['iteration'] == $this->_foreach['decisionList']['total'])): ?>
						<?php echo ((is_array($_tmp=$this->_tpl_vars['decision']['dateDecided'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatTrunc']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatTrunc'])); ?>
				
					<?php endif; ?>
				<?php endforeach; else: ?>
					&mdash;
				<?php endif; unset($_from); ?>
			<?php endforeach; endif; unset($_from); ?>			
		</td>
	</tr>
	<tr>
		<td colspan="7" class="<?php if ($this->_tpl_vars['submissions']->eof()): ?>end<?php endif; ?>separator">&nbsp;</td>
	</tr>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php if ($this->_tpl_vars['submissions']->wasEmpty()): ?>
	<tr>
		<td colspan="7" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submissions.noSubmissions"), $this);?>
</td>
	</tr>
	<tr>
		<td colspan="7" class="endseparator">&nbsp;</td>
	</tr>
<?php else: ?>
	<tr>
		<td colspan="5" align="left"><?php echo $this->_plugins['function']['page_info'][0][0]->smartyPageInfo(array('iterator' => $this->_tpl_vars['submissions']), $this);?>
</td>
		<td colspan="2" align="right"><?php echo $this->_plugins['function']['page_links'][0][0]->smartyPageLinks(array('anchor' => 'submissions','name' => 'submissions','iterator' => $this->_tpl_vars['submissions'],'searchField' => $this->_tpl_vars['searchField'],'searchMatch' => $this->_tpl_vars['searchMatch'],'search' => $this->_tpl_vars['search'],'track' => $this->_tpl_vars['track'],'sort' => $this->_tpl_vars['sort'],'sortDirection' => $this->_tpl_vars['sortDirection']), $this);?>
</td>
	</tr>
<?php endif; ?>
</table>
</div>