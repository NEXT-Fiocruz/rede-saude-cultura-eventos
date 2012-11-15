<?php /* Smarty version 2.6.26, created on 2012-11-13 22:32:46
         compiled from schedConf/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'nl2br', 'schedConf/index.tpl', 24, false),array('modifier', 'escape', 'schedConf/index.tpl', 42, false),array('function', 'translate', 'schedConf/index.tpl', 29, false),array('function', 'url', 'schedConf/index.tpl', 33, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageCrumbTitleTranslated', $this->_tpl_vars['schedConf']->getSchedConfTitle()); ?><?php echo ''; ?><?php $this->assign('pageTitleTranslated', $this->_tpl_vars['schedConf']->getFullTitle()); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<?php if ($this->_tpl_vars['schedConf']->getSetting('startDate')): ?><div class="img-date"> De 03/12/2012 até 05/12/2012 </div><?php endif; ?>

<div><?php echo ((is_array($_tmp=$this->_tpl_vars['schedConf']->getLocalizedSetting('introduction'))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</div>

<?php if ($this->_tpl_vars['enableAnnouncementsHomepage']): ?>
		<div id="announcementsHome">
		<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "announcement.announcementsHome"), $this);?>
</h3>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "announcement/list.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>	
		<table class="announcementsMore">
			<tr>
				<td><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'announcement'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "announcement.moreAnnouncements"), $this);?>
</a></td>
			</tr>
		</table>
	</div>
<?php endif; ?>

<br />

<?php if ($this->_tpl_vars['homepageImage']): ?>
<div id="homepageImage"><img src="<?php echo $this->_tpl_vars['publicFilesDir']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['homepageImage']['uploadName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" width="<?php echo $this->_tpl_vars['homepageImage']['width']; ?>
" height="<?php echo $this->_tpl_vars['homepageImage']['height']; ?>
" <?php if ($this->_tpl_vars['homepageImageAltText'] != ''): ?>alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['homepageImageAltText'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"<?php else: ?>alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.conferenceHomepageImage.altText"), $this);?>
"<?php endif; ?> /></div>
<?php endif; ?>

<?php if ($this->_tpl_vars['schedConfPostOverview'] || $this->_tpl_vars['schedConfShowCFP'] || $this->_tpl_vars['schedConfPostPolicies'] || $this->_tpl_vars['schedConfShowProgram'] || $this->_tpl_vars['schedConfPostPresentations'] || $this->_tpl_vars['schedConfPostSchedule'] || $this->_tpl_vars['schedConfPostPayment'] || $this->_tpl_vars['schedConfPostAccommodation'] || $this->_tpl_vars['schedConfPostSupporters'] || $this->_tpl_vars['schedConfPostTimeline']): ?>

<?php endif; ?>
<?php echo $this->_tpl_vars['additionalHomeContent']; ?>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>