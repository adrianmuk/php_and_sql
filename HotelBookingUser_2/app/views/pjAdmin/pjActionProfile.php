<?php
if (isset($tpl['status']))
{
	$status = __('status', true);
	switch ($tpl['status'])
	{
		case 2:
			pjUtil::printNotice(NULL, $status[2]);
			break;
	}
} else {
	$titles = __('error_titles', true);
	$bodies = __('error_bodies', true);
	?>
	<div class="ui-tabs ui-widget ui-widget-content ui-corner-all b10">
		<ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">
			<li class="ui-state-default ui-corner-top ui-tabs-active ui-state-active"><a href="<?php echo $_SERVER['PHP_SELF']; ?>?controller=pjAdmin&amp;action=pjActionProfile"><?php __('menuProfile'); ?></a></li>
		</ul>
	</div>
	
	<?php
	pjUtil::printNotice(@$titles['AA14'], @$bodies['AA14'], true, false);
	if (isset($_GET['err']))
	{
		pjUtil::printNotice(@$titles[$_GET['err']], @$bodies[$_GET['err']], true, true, true);
	}
	?>
	
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>?controller=pjAdmin&amp;action=pjActionProfile" method="post" id="frmUpdateProfile" class="form pj-form">
		<input type="hidden" name="profile_update" value="1" />
		<p>
			<label class="title"><?php __('email'); ?>:</label>
			<span class="pj-form-field-custom pj-form-field-custom-before">
				<span class="pj-form-field-before"><abbr class="pj-form-field-icon-email"></abbr></span>
				<input type="text" name="email" id="email" class="pj-form-field required email w200" value="<?php echo pjSanitize::html($tpl['arr']['email']); ?>" data-msg-required="<?php __('lblFieldRequired');?>" data-msg-email="<?php __('lblEmailInvalid');?>"/>
			</span>
		</p>
		<p>
			<label class="title"><?php __('pass'); ?>:</label>
			<span class="pj-form-field-custom pj-form-field-custom-before">
				<span class="pj-form-field-before"><abbr class="pj-form-field-icon-password"></abbr></span>
				<input type="text" name="password" id="password" class="pj-form-field required w200" value="<?php echo pjSanitize::html($tpl['arr']['password']); ?>" autocomplete="off" data-msg-required="<?php __('lblFieldRequired');?>"/>
			</span>
		</p>
		<p>
			<label class="title"><?php __('lblName'); ?></label>
			<span class="inline_block">
				<input type="text" name="name" id="name" value="<?php echo pjSanitize::html($tpl['arr']['name']); ?>" class="pj-form-field w250 required" data-msg-required="<?php __('lblFieldRequired');?>"/>
			</span>
		</p>
		<p>
			<label class="title"><?php __('booking_c_phone'); ?></label>
			<span class="pj-form-field-custom pj-form-field-custom-before">
				<span class="pj-form-field-before"><abbr class="pj-form-field-icon-phone"></abbr></span>
				<input type="text" name="phone" id="phone" class="pj-form-field w200" value="<?php echo pjSanitize::html($tpl['arr']['phone']); ?>" />
			</span>
		</p>
		<p>
			<label class="title">&nbsp;</label>
			<input type="submit" value="<?php __('btnSave'); ?>" class="pj-button" />
		</p>
	</form>
	
	<script type="text/javascript">
	var myLabel = myLabel || {};
	myLabel.email_taken = "<?php __('vr_email_taken', false, true); ?>";
	</script>
	<?php
}
?>