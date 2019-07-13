<?php



/**

 * 0.入口文件

 * 1.定义常量

 * 2.引入函数库

 * 3.自动加载类库

 * 4.启动框架

 * 5.路由解析

 * 6.加载控制器

 * 7.返回结果

 */



define("APP_START",microtime(true));



//获取执行文件所在目录

define('BASE_PATH',realpath(__DIR__));

define('DS',DIRECTORY_SEPARATOR);

define('APP_PATH',BASE_PATH.DS.'app');

define('MODULE_NAME','app');

define('CORE',BASE_PATH.DS.'core');

define('LIB',CORE.DS.'lib');

define('CNF_PATH',APP_PATH.DS.'configs');

define('LOG_PATH',BASE_PATH.DS.'log');

define('CACHE_PATH',BASE_PATH.DS.'cache');

define('APP_DEBUG',true);

define('PHP_EXT','.php');

define('TXT_EXT','.txt');



//项目

define('APP_DIR',DS.'hd'.DS);

//资源目录

define('RESOURCE','public/');



//上传地址

define('UPLOAD','upload');







include "vendor/autoload.php";



if (APP_DEBUG) {

    $whoops = new \Whoops\Run;

    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);

    $whoops->register();

    ini_set('display_errors',"On");

    error_reporting(E_ALL);

} else {

    ini_set('display_errors',"Off");

}



include CORE.DS."common/functions.php";

include LIB.DS."Loader.php";



\core\lib\Loader::register();



\core\App::run();



























