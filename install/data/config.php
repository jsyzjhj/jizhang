<?php
ob_start();
session_start();
//基本设置
date_default_timezone_set("Asia/Shanghai");

// 检查PHP版本
if(PHP_VERSION<5.3){
	die("PHP版本小于5.3，请升级！");
}
define("siteName","===sitename===");
define("SiteURL","===url===");
define("Multiuser","0");/*是否开启多用户，1为开启，0为禁用*/
define("Invite","0");/*是否开启邀请码注册，1为开启，0为禁用*/
// database
define("DB_HOST","===db_host===");
define("DB_USER","===db_user===");
define("DB_PASS","===db_pwd===");
define("DB_NAME","===db_name===");
define("DB_PORT","===db_port===");
define("TABLE","===db_prefix===");