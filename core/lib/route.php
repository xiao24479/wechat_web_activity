<?php
/**
 * Author: Henry
 * Date: 2019/4/22
 */

/**
 * 解析url
 */
namespace core\lib;

class route
{
    public $controller;
    public $action;
    public function __construct()
    {
        if ( $_SERVER['REQUEST_URI'] != APP_DIR && $_SERVER['REQUEST_URI'] != DS.APP_DIR.DS.'index.php')
        {

            if (isset($_GET['c']) && !empty($_GET['c'])){
                $this->controller = strZmDealer($_GET['c']);
            } else {
                $this->controller = strZmDealer(Config::get('route.default_controller'));
            }

            if (isset($_GET['a']) && !empty($_GET['a'])){
                $this->action = trim($_GET['a']);
            } else {
                $this->action = Config::get('route.default_action');
            }

        } else {
            $this->controller = strZmDealer(Config::get('route.default_controller'));
            $this->action = Config::get('route.default_action');
        }
    }
}