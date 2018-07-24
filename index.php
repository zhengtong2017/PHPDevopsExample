<?php
header("Content-Type:text/html; charset=utf-8");
define('THINK_PATH', './ThinkPHP/'); //定义Thinkphp框架宝的文件路径
//定义项目名称和路径
define('IN_VICBANG', true);
define('APP_NAME', 'APP');//定义APP_NAME,其实就是项目文件夹
define('APP_PATH', './APP/');//定义项目路径
 
define('APP_DEBUG', true); //debug显示错误信息
//加载框架入口文件
require(THINK_PATH . "ThinkPHP.php");
