<?php /* Smarty version 2.6.26, created on 2012-09-25 19:55:37
         compiled from common/sizer.tpl */ ?>

	<!-- Add javascript required for font sizer -->
	<script type="text/javascript" src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/lib/pkp/js/jquery.cookie.js"></script>	
	<script type="text/javascript" src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/lib/pkp/js/fontController.js" ></script>
	<script type="text/javascript"><?php echo '
		$(function(){
			fontSize("#sizer", "body", 9, 16, 32, "'; ?>
<?php echo $this->_tpl_vars['baseUrl']; ?>
<?php echo '"); // Initialize the font sizer
		});
	'; ?>
</script>