<?php
namespace app\admin\validate;
use think\Validate;
/** 
* 用户验证规则
*/
class Admin extends Validate
{
	protected $rule = [
		'admin_username' => 'require',
		'admin_password' => 'require',
		'code' => 'require|captcha'
	];

	protected $message = [
		'admin_username.require' => '请输入用户名',
		'admin_password.require' => '请输入密码',
		'code.require' => '请输入验证码',
		'code.captcha' => '验证码不正确'
	];
}