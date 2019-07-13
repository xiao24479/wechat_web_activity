<?php
/**
 * Author: Henry
 * Date: 2019/4/26
 */

namespace core\lib;


use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class Controller
{


    public function view($file,$data=[])
    {

        $loader = new FilesystemLoader(Config::get('view.path'));
        $twig = new Environment($loader, [
            'cache' => Config::get('view.cache'),
            'debug' => APP_DEBUG,
        ]);

        define("APP_END",microtime(true));
        define("APP_MEMORY",round(memory_get_usage()/(1024*1024)));
        define("APP_MEMORY_PEAK",round(memory_get_peak_usage()/(1024*1024)));



        $ms = round((APP_END-APP_START)*1000);
        $data['exetime'] ="后台程序执行时间<span class='label label-default'>".$ms."</span>毫秒,后台程序执行内存<span class='label label-default'>".APP_MEMORY."</span>M";
        echo $twig->render($file, $data);
        exit();

    }

    public function __call($name, $arguments)
    {
        $this->error();
    }

    public function error()
    {
        $this->view("error/404.html");
    }
}