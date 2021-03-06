<?php
if (!defined("ROOT_PATH"))
{
	header("HTTP/1.1 403 Forbidden");
	exit;
}
class pjCalendarModel extends pjAppModel
{
	protected $primaryKey = 'id';
	
	protected $table = 'calendars';
	
	protected $schema = array(
		array('name' => 'id', 'type' => 'int', 'default' => ':NULL'),
		array('name' => 'user_id', 'type' => 'int', 'default' => ':NULL')
	);
	
	public $i18n = array('confirm_subject_client', 'confirm_tokens_client', 'payment_subject_client', 'payment_tokens_client',
		'confirm_subject_admin', 'confirm_tokens_admin', 'payment_subject_admin', 'payment_tokens_admin', 'terms_url', 'terms_body',
		'cancel_subject_admin', 'cancel_tokens_admin',
		'confirm_sms_admin', 'payment_sms_admin'
	);
	
	public static function factory($attr=array())
	{
		return new self($attr);
	}
}
?>