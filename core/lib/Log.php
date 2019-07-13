<?php
/**
 * Author: Henry
 * Date: 2019/4/25
 */

namespace core\lib;


class Log
{
    private static $class;

    public static function init()
    {
        $driver = Config::get('log.driver');
        $class = '\\core\\lib\\driver\\log\\'.ucfirst($driver);
        self::$class = new $class;
    }

    public static function log($content,$file='log') {
        $bool = Config::get('log.open');
        if ($bool) {
            return self::$class->log($content,$file);
        }
    }
}