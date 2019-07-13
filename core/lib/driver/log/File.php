<?php
/**
 * Author: Henry
 * Date: 2019/4/25
 */

namespace core\lib\driver\log;


use core\lib\Config;

class File
{
    private $path;

    public function __construct()
    {
        $cnfPath = Config::get('log.path');
        if (isset($cnfPath) && !empty($cnfPath)) {
            $path = $cnfPath.DS.date('YmdH');
        } else {
            $path = LOG_PATH.DS.date('YmdH');
        }

        $this->path = $path;
    }

    public function log($content,$file)
    {

        if (!is_dir($this->path)) {
            mkdir($this->path,' 0777',true);
        }
        $content = date('Y-m-d H:i:s') .'  '. json_encode($content,JSON_UNESCAPED_UNICODE).PHP_EOL.PHP_EOL;
        $filename = $this->path.DS.$file.TXT_EXT;
        file_put_contents($filename,$content,FILE_APPEND);

    }
}