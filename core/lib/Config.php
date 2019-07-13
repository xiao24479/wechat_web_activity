<?php
/**
 * Author: Henry
 * Date: 2019/4/25
 */

namespace core\lib;


class Config
{
    protected static $configs = [];

    //获取指定键名配置
    public static function get($keyPath)
    {
        $keyPath = trim($keyPath,'.');
        $keys = explode('.',$keyPath);
        if (count($keys) == 2) {
            return self::fetch($keys[0],$keys[1]);
        } elseif (count($keys) == 1) {
            return self::pull($keys[0]);
        }
    }

    private static function fetch($file,$name)
    {
        $conf_key = $file.'_'.$name;
        $file_path = CNF_PATH.DS.$file.PHP_EXT;
        if (isset(self::$configs[$conf_key])) {
            return self::$configs[$conf_key];
        }

        if (is_file($file_path)) {
            $configs = include $file_path;
            if (array_key_exists($name,$configs)) {
                self::$configs[$conf_key] = $configs[$name];
                return self::$configs[$conf_key];
            } else {
                throw new \Exception('不存在的配置键名');
            }
        } else {
            throw new \Exception('不存在的配置文件');
        }
    }

    private static function pull($file)
    {
        $file_path = CNF_PATH.DS.$file.PHP_EXT;
        if (isset(self::$configs[$file])) {
            return self::$configs[$file];
        }
        if (is_file($file_path)) {
            $configs = include $file_path;
            self::$configs[$file] = $configs;
            return self::$configs[$file];
        } else {
            throw new \Exception('不存在的配置文件');
        }
    }

}