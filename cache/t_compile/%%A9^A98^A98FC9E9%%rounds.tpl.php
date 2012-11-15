<?php /* Smarty version 2.6.26, created on 2012-11-14 14:06:24
         compiled from trackDirector/submission/rounds.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'trackDirector/submission/rounds.tpl', 13, false),array('function', 'url', 'trackDirector/submission/rounds.tpl', 74, false),array('function', 'icon', 'trackDirector/submission/rounds.tpl', 148, false),array('modifier', 'escape', 'trackDirector/submission/rounds.tpl', 13, false),array('modifier', 'date_format', 'trackDirector/submission/rounds.tpl', 29, false),array('modifier', 'count', 'trackDirector/submission/rounds.tpl', 56, false),array('modifier', 'to_array', 'trackDirector/submission/rounds.tpl', 74, false),array('modifier', 'ord', 'trackDirector/submission/rounds.tpl', 84, false),array('modifier', 'chr', 'trackDirector/submission/rounds.tpl', 92, false),)), $this); ?>
<div id="stages">
<div id="regretsAndCancels">
<h3><?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "trackDirector.regrets.regretsAndCancels"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp));?>
</h3>

<table width="100%" class="listing">
	<tr><td colspan="4" class="headseparator">&nbsp;</td></tr>
	<tr valign="top">
		<td class="heading" width="30%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.name"), $this);?>
</td>
		<td class="heading" width="25%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.request"), $this);?>
</td>
		<td class="heading" width="25%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "trackDirector.regrets.result"), $this);?>
</td>
		<?php if ($this->_tpl_vars['submission']->getReviewMode() == REVIEW_MODE_BOTH_SEQUENTIAL): ?><td class="heading" width="20%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submissions.reviewType"), $this);?>
</td><?php endif; ?>
	</tr>
	<tr><td colspan="4" class="headseparator">&nbsp;</td></tr>
<?php $_from = $this->_tpl_vars['cancelsAndRegrets']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['cancelsAndRegrets'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cancelsAndRegrets']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['cancelOrRegret']):
        $this->_foreach['cancelsAndRegrets']['iteration']++;
?>
	<tr valign="top">
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['cancelOrRegret']->getReviewerFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</td>
		<td>
			<?php if ($this->_tpl_vars['cancelOrRegret']->getDateNotified()): ?>
				<?php echo ((is_array($_tmp=$this->_tpl_vars['cancelOrRegret']->getDateNotified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatTrunc']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatTrunc'])); ?>

			<?php else: ?>
				&mdash;
			<?php endif; ?>
		</td>
		<td>
			<?php if ($this->_tpl_vars['cancelOrRegret']->getDeclined()): ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "trackDirector.regrets"), $this);?>

			<?php else: ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancelled"), $this);?>

			<?php endif; ?>
		</td>
		<td><?php echo $this->_tpl_vars['cancelOrRegret']->getStage(); ?>
</td>
	</tr>
	<tr>
		<td colspan="4" class="<?php if (($this->_foreach['cancelsAndRegrets']['iteration'] == $this->_foreach['cancelsAndRegrets']['total'])): ?>end<?php endif; ?>separator">&nbsp;</td>
	</tr>
<?php endforeach; else: ?>
	<tr valign="top">
		<td colspan="4" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.none"), $this);?>
</td>
	</tr>
	<tr>
		<td colspan="4" class="endseparator">&nbsp;</td>
	</tr>
<?php endif; unset($_from); ?>
</table>
</div>
<?php $this->assign('numStages', count($this->_tpl_vars['reviewAssignmentStages'])); ?>
<?php unset($this->_sections['stage']);
$this->_sections['stage']['name'] = 'stage';
$this->_sections['stage']['loop'] = is_array($_loop=$this->_tpl_vars['numStages']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['stage']['show'] = true;
$this->_sections['stage']['max'] = $this->_sections['stage']['loop'];
$this->_sections['stage']['step'] = 1;
$this->_sections['stage']['start'] = $this->_sections['stage']['step'] > 0 ? 0 : $this->_sections['stage']['loop']-1;
if ($this->_sections['stage']['show']) {
    $this->_sections['stage']['total'] = $this->_sections['stage']['loop'];
    if ($this->_sections['stage']['total'] == 0)
        $this->_sections['stage']['show'] = false;
} else
    $this->_sections['stage']['total'] = 0;
if ($this->_sections['stage']['show']):

            for ($this->_sections['stage']['index'] = $this->_sections['stage']['start'], $this->_sections['stage']['iteration'] = 1;
                 $this->_sections['stage']['iteration'] <= $this->_sections['stage']['total'];
                 $this->_sections['stage']['index'] += $this->_sections['stage']['step'], $this->_sections['stage']['iteration']++):
$this->_sections['stage']['rownum'] = $this->_sections['stage']['iteration'];
$this->_sections['stage']['index_prev'] = $this->_sections['stage']['index'] - $this->_sections['stage']['step'];
$this->_sections['stage']['index_next'] = $this->_sections['stage']['index'] + $this->_sections['stage']['step'];
$this->_sections['stage']['first']      = ($this->_sections['stage']['iteration'] == 1);
$this->_sections['stage']['last']       = ($this->_sections['stage']['iteration'] == $this->_sections['stage']['total']);
?>
<?php $this->assign('stage', $this->_sections['stage']['index']); ?>
<?php $this->assign('stagePlusOne', $this->_tpl_vars['stage']+1); ?>
<?php $this->assign('stageAssignments', $this->_tpl_vars['reviewAssignmentStages'][$this->_tpl_vars['stagePlusOne']]); ?>
<?php $this->assign('stageDecisions', $this->_tpl_vars['directorDecisions'][$this->_tpl_vars['stagePlusOne']]); ?>

<?php if ($this->_tpl_vars['submission']->getCurrentStage() != $this->_tpl_vars['stagePlusOne']): ?>
<div id="reviewStage">
<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "trackDirector.regrets.reviewStage",'stage' => $this->_tpl_vars['stagePlusOne']), $this);?>
</h4>

<?php if ($this->_tpl_vars['stage'] != REVIEW_STAGE_ABSTRACT): ?>
<table width="100%" class="data">
	<tr valign="top">
		<td class="label" width="20%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.reviewVersion"), $this);?>
</td>
		<td class="value" width="80%">
			<?php $this->assign('reviewFile', $this->_tpl_vars['reviewFilesByStage'][$this->_tpl_vars['stagePlusOne']]); ?>
			<?php if ($this->_tpl_vars['reviewFile']): ?>
				<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'downloadFile','path' => ((is_array($_tmp=$this->_tpl_vars['submission']->getPaperId())) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['reviewFile']->getFileId(), $this->_tpl_vars['reviewFile']->getRevision()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['reviewFile']->getFileId(), $this->_tpl_vars['reviewFile']->getRevision()))), $this);?>
" class="file"><?php echo ((is_array($_tmp=$this->_tpl_vars['reviewFile']->getFileName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a>&nbsp;&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['reviewFile']->getDateModified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>

			<?php else: ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.none"), $this);?>

			<?php endif; ?>
		</td>
	</tr>
</table>
</div>
<?php endif; ?>

<?php $this->assign('start', ((is_array($_tmp='A')) ? $this->_run_mod_handler('ord', true, $_tmp) : ord($_tmp))); ?>

<?php $_from = $this->_tpl_vars['stageAssignments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['reviewKey'] => $this->_tpl_vars['reviewAssignment']):
?>
<?php $this->assign('reviewId', $this->_tpl_vars['reviewAssignment']->getId()); ?>

<?php if (! $this->_tpl_vars['reviewAssignment']->getCancelled()): ?>
<div class="separator"></div>
<div id="reviewer">
<h5><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.reviewer"), $this);?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['reviewKey']+$this->_tpl_vars['start'])) ? $this->_run_mod_handler('chr', true, $_tmp) : chr($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['reviewAssignment']->getReviewerFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</h5>

<table width="100%" class="listing">
	<tr valign="top">
		<td width="20%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "reviewer.paper.schedule"), $this);?>
</td>
		<td width="20%" class="heading"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.request"), $this);?>
</td>
		<td width="20%" class="heading"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.underway"), $this);?>
</td>
		<td width="20%" class="heading"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.due"), $this);?>
</td>
		<td width="20%" class="heading"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.acknowledge"), $this);?>
</td>
	</tr>
	<tr valign="top">
		<td>&nbsp;</td>
		<td>
			<?php if ($this->_tpl_vars['reviewAssignment']->getDateNotified()): ?>
				<?php echo ((is_array($_tmp=$this->_tpl_vars['reviewAssignment']->getDateNotified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatTrunc']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatTrunc'])); ?>

			<?php else: ?>
				&mdash;
			<?php endif; ?>
		</td>
		<td>
			<?php if ($this->_tpl_vars['reviewAssignment']->getDateConfirmed()): ?>
				<?php echo ((is_array($_tmp=$this->_tpl_vars['reviewAssignment']->getDateConfirmed())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatTrunc']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatTrunc'])); ?>

			<?php else: ?>
				&mdash;
			<?php endif; ?>
		</td>
		<td>
			<?php if ($this->_tpl_vars['reviewAssignment']->getDateDue()): ?>
				<?php echo ((is_array($_tmp=$this->_tpl_vars['reviewAssignment']->getDateDue())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatTrunc']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatTrunc'])); ?>

			<?php else: ?>
				&mdash;
			<?php endif; ?>
		</td>
		<td>
			<?php if ($this->_tpl_vars['reviewAssignment']->getDateAcknowledged()): ?>
				<?php echo ((is_array($_tmp=$this->_tpl_vars['reviewAssignment']->getDateAcknowledged())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatTrunc']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatTrunc'])); ?>

			<?php else: ?>
				&mdash;
			<?php endif; ?>
		</td>
	</tr>
	<tr valign="top">
		<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.recommendation"), $this);?>
</td>
		<td colspan="4">
			<?php if ($this->_tpl_vars['reviewAssignment']->getRecommendation() !== null && $this->_tpl_vars['reviewAssignment']->getRecommendation() !== ''): ?>
				<?php $this->assign('recommendation', $this->_tpl_vars['reviewAssignment']->getRecommendation()); ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['reviewerRecommendationOptions'][$this->_tpl_vars['recommendation']]), $this);?>

			<?php else: ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.none"), $this);?>

			<?php endif; ?>
		</td>
	</tr>
	<?php if ($this->_tpl_vars['reviewFormResponses'][$this->_tpl_vars['reviewId']]): ?>
		<tr valign="top">
			<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.reviewFormResponse"), $this);?>
</td>
			<td>
				<a href="javascript:openComments('<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'viewReviewFormResponse','path' => ((is_array($_tmp=$this->_tpl_vars['submission']->getPaperId())) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['reviewAssignment']->getId()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['reviewAssignment']->getId()))), $this);?>
');" class="icon"><?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'letter'), $this);?>
</a>
			</td>
		</tr>
	<?php endif; ?>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "reviewer.paper.reviewerComments"), $this);?>
</td>
		<td colspan="4">
			<?php if ($this->_tpl_vars['reviewAssignment']->getMostRecentPeerReviewComment()): ?>
				<?php $this->assign('comment', $this->_tpl_vars['reviewAssignment']->getMostRecentPeerReviewComment()); ?>
				<a href="javascript:openComments('<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'viewPeerReviewComments','path' => ((is_array($_tmp=$this->_tpl_vars['submission']->getPaperId())) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['reviewAssignment']->getId()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['reviewAssignment']->getId())),'anchor' => $this->_tpl_vars['comment']->getId()), $this);?>
');" class="icon"><?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'comment'), $this);?>
</a> <?php echo ((is_array($_tmp=$this->_tpl_vars['comment']->getDatePosted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>

			<?php else: ?>
				<a href="javascript:openComments('<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'viewPeerReviewComments','path' => ((is_array($_tmp=$this->_tpl_vars['submission']->getPaperId())) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['reviewAssignment']->getId()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['reviewAssignment']->getId()))), $this);?>
');" class="icon"><?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'comment'), $this);?>
</a><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.noComments"), $this);?>

			<?php endif; ?>
		</td>
	</tr>
 	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "reviewer.paper.uploadedFile"), $this);?>
</td>
		<td colspan="4">
			<table width="100%" class="data">
				<?php $_from = $this->_tpl_vars['reviewAssignment']->getReviewerFileRevisions(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['reviewerFile']):
?>
				<tr valign="top">
					<td valign="middle">
						<form name="authorView<?php echo $this->_tpl_vars['reviewAssignment']->getId(); ?>
" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'makeReviewerFileViewable'), $this);?>
">
							<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'downloadFile','path' => ((is_array($_tmp=$this->_tpl_vars['submission']->getPaperId())) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['reviewerFile']->getFileId(), $this->_tpl_vars['reviewerFile']->getRevision()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['reviewerFile']->getFileId(), $this->_tpl_vars['reviewerFile']->getRevision()))), $this);?>
" class="file"><?php echo ((is_array($_tmp=$this->_tpl_vars['reviewerFile']->getFileName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a>&nbsp;&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['reviewerFile']->getDateModified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>

							<input type="hidden" name="reviewId" value="<?php echo $this->_tpl_vars['reviewAssignment']->getId(); ?>
" />
							<input type="hidden" name="paperId" value="<?php echo $this->_tpl_vars['submission']->getPaperId(); ?>
" />
							<input type="hidden" name="fileId" value="<?php echo $this->_tpl_vars['reviewerFile']->getFileId(); ?>
" />
							<input type="hidden" name="revision" value="<?php echo $this->_tpl_vars['reviewerFile']->getRevision(); ?>
" />
							<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "director.paper.showAuthor"), $this);?>
 <input type="checkbox" name="viewable" value="1"<?php if ($this->_tpl_vars['reviewerFile']->getViewable()): ?> checked="checked"<?php endif; ?> />
							<input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.record"), $this);?>
" class="button" />
						</form>
					</td>
				</tr>
				<?php endforeach; else: ?>
				<tr valign="top">
					<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.none"), $this);?>
</td>
				</tr>
				<?php endif; unset($_from); ?>
			</table>
		</td>
	</tr>
</table>
</div>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>

<div class="separator"></div>
<div id="decisionStage">
<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "trackDirector.regrets.decisionStage",'stage' => $this->_tpl_vars['stagePlusOne']), $this);?>
</h4>

<?php $this->assign('authorFiles', $this->_tpl_vars['submission']->getAuthorFileRevisions($this->_tpl_vars['stagePlusOne'])); ?>
<?php $this->assign('directorFiles', $this->_tpl_vars['submission']->getDirectorFileRevisions($this->_tpl_vars['stagePlusOne'])); ?>

<table class="data" width="100%">
	<tr valign="top">
		<td class="label" width="20%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "director.paper.decision"), $this);?>
</td>
		<td class="value" width="80%">
			<?php $_from = $this->_tpl_vars['stageDecisions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['decisionKey'] => $this->_tpl_vars['directorDecision']):
?>
				<?php if ($this->_tpl_vars['decisionKey'] != 0): ?> | <?php endif; ?>
				<?php $this->assign('decision', $this->_tpl_vars['directorDecision']['decision']); ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['directorDecisionOptions'][$this->_tpl_vars['decision']]), $this);?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['directorDecision']['dateDecided'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>

			<?php endforeach; else: ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.none"), $this);?>

			<?php endif; unset($_from); ?>
		</td>
	</tr>
	<tr valign="top">
		<td class="label" width="20%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.notifyAuthor"), $this);?>
</td>
		<td class="value" width="80%">
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.directorAuthorRecord"), $this);?>

			<?php if ($this->_tpl_vars['submission']->getMostRecentDirectorDecisionComment()): ?>
				<?php $this->assign('comment', $this->_tpl_vars['submission']->getMostRecentDirectorDecisionComment()); ?>
				<a href="javascript:openComments('<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'viewDirectorDecisionComments','path' => $this->_tpl_vars['submission']->getPaperId(),'anchor' => $this->_tpl_vars['comment']->getId()), $this);?>
');" class="icon"><?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'comment'), $this);?>
</a> <?php echo ((is_array($_tmp=$this->_tpl_vars['comment']->getDatePosted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>

			<?php else: ?>
				<a href="javascript:openComments('<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'viewDirectorDecisionComments','path' => $this->_tpl_vars['submission']->getPaperId()), $this);?>
');" class="icon"><?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'comment'), $this);?>
</a><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.noComments"), $this);?>

			<?php endif; ?>
		</td>
	</tr>
	<?php $_from = $this->_tpl_vars['authorFiles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['authorFile']):
?>
		<tr valign="top">
			<?php if (! $this->_tpl_vars['authorRevisionExists']): ?>
				<?php $this->assign('authorRevisionExists', true); ?>
				<td width="20%" class="label" rowspan="<?php echo count($this->_tpl_vars['authorFiles']); ?>
" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.authorVersion"), $this);?>
</td>
			<?php endif; ?>
			<td width="80%" class="value"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'downloadFile','path' => ((is_array($_tmp=$this->_tpl_vars['submission']->getPaperId())) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['authorFile']->getFileId(), $this->_tpl_vars['authorFile']->getRevision()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['authorFile']->getFileId(), $this->_tpl_vars['authorFile']->getRevision()))), $this);?>
" class="file"><?php echo ((is_array($_tmp=$this->_tpl_vars['authorFile']->getFileName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a>&nbsp;&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['authorFile']->getDateModified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>
</td>
		</tr>
	<?php endforeach; else: ?>
		<tr valign="top">
			<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.authorVersion"), $this);?>
</td>
			<td width="80%" colspan="4" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.none"), $this);?>
</td>
		</tr>
	<?php endif; unset($_from); ?>
	<?php $_from = $this->_tpl_vars['directorFiles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['directorFile']):
?>
		<tr valign="top">
			<?php if (! $this->_tpl_vars['directorRevisionExists']): ?>
				<?php $this->assign('directorRevisionExists', true); ?>
				<td width="20%" class="label" rowspan="<?php echo count($this->_tpl_vars['directorFiles']); ?>
" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.directorVersion"), $this);?>
</td>
			<?php endif; ?>

			<td width="30%"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'downloadFile','path' => ((is_array($_tmp=$this->_tpl_vars['submission']->getPaperId())) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['directorFile']->getFileId(), $this->_tpl_vars['directorFile']->getRevision()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['directorFile']->getFileId(), $this->_tpl_vars['directorFile']->getRevision()))), $this);?>
" class="file"><?php echo ((is_array($_tmp=$this->_tpl_vars['directorFile']->getFileName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a>&nbsp;&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['directorFile']->getDateModified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>
</td>
		</tr>
	<?php endforeach; else: ?>
		<tr valign="top">
			<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.directorVersion"), $this);?>
</td>
			<td width="80%" colspan="4" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.none"), $this);?>
</td>
		</tr>
	<?php endif; unset($_from); ?>
</table>
</div>
<div class="separator"></div>

<?php endif; ?> 
<?php endfor; endif; ?> </div>