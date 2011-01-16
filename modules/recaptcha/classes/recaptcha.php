<?php
defined('SYSPATH') or die('No direct script access.');
include Kohana::find_file('vendor', 'recaptchalib');

class Recaptcha
{
	public static function get_html()
	{
		$config = Kohana::config('recaptcha');
		return recaptcha_get_html($config['public_key']);
	}
	
	public static function validate(Validate $validate, $field)
	{
		$config = Kohana::config('recaptcha');
		$response = recaptcha_check_answer($config['private_key'], 
		                                   $_SERVER['REMOTE_ADDR'],
										   $_POST['recaptcha_challenge_field'],
										   $_POST['recaptcha_response_field']);
		if (!$response->is_valid)
		{
			$validate->error('recaptcha_challenge_field', 'captcha');
		}
	}
}
?>