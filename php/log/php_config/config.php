<?php
/**
 * Created by PhpStorm.
 * User: koreyoshi
 * Date: 2017/4/11
 * Time: 23:49
 */

//配置文件根定义
define('CONFIG_DIR', 'Z:/lamp/apache/Apache24/htdocs/gitRecord/php/log');
define('LOG4PHP_DIR', CONFIG_DIR . '/log4php');//日志控件地址


//日志名定义
define("SUIXIN", "suixin");


//引入log4php
include_once(LOG4PHP_DIR . "/Logger.php");
Logger::configure(CONFIG_DIR . "/php_config/log4php.xml");
