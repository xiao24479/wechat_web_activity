<?php
/**
 * 框架基类
 */
namespace core;

use core\lib\Log;
use core\lib\route;

class App
{
    protected $data = [];
    public static function run()
    {
        session_start();
        Log::init();
        $route = new route();
        $controller = $route->controller;
        $action = $route->action;
        $file = APP_PATH.DS."controller".DS.$controller.'Controller'.PHP_EXT;
        $ctrlClass = '\\'.MODULE_NAME."\\controller\\".$controller.'Controller';
        if (is_file($file)) {
            require $file;
            $ctrl = new $ctrlClass();
            $ctrl->$action();
        } else {
            throw new \Exception('找不到控制器'.$ctrlClass);
        }
    }

}
















 ?>