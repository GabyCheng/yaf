<?php
define("APPLICATION_PATH",  dirname(__FILE__));
//配置工具类路径
define('APP_LIBRARY',APPLICATION_PATH. '/application');

$app  = new Yaf\Application(APPLICATION_PATH . "/conf/application.ini");
$app->bootstrap() //call bootstrap methods defined in Bootstrap.php
->run();
