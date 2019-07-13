<?php
/**
 * Author: Henry
 * Date: 2019/4/24
 */

namespace core\lib;


class Loader
{
    private static $classMap = [];
    public static function autoload($class)
    {
        if (!isset(self::$classMap[$class])) {
            $class = str_replace('\\',DS,$class);
            $file = BASE_PATH.DS.$class.PHP_EXT;
            if (is_file($file)) {
                include $file;
                self::$classMap[$class] = $class;
            }
        }
    }

    public static function register()
    {
        spl_autoload_register('\core\lib\\Loader::autoload',true,true);
    }
}