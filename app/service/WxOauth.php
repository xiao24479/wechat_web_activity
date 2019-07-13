<?php
/**
 * Author: Henry
 * Date: 2019/5/18
 */
namespace app\service;

use core\lib\Config;
use EasyWeChat\Factory;
class WxOauth
{
    private $app_id;
    private $secret;
    private $token;
    private $scopes;
    private $callback;
    private $targetUrl;
    public function __construct($targetUrl)
    {
        $this->app_id = Config::get("wx.app_id");
        $this->secret = Config::get("wx.secret");
        $this->token = Config::get("wx.token");
        $this->scopes = Config::get("wx.scopes");
        $this->callback = Config::get("wx.callback");
        $this->targetUrl = $targetUrl;
    }

    public function getInstance()
    {

        $config = [
            'app_id'    => $this->app_id,
            'secret'    => $this->secret,
            'token'     => $this->token,
            'oauth' => [
                'scopes'   => $this->scopes,
                'callback' => $this->callback,
            ],
        ];

        $app = Factory::officialAccount($config);

        return $app;
    }


    public function processOauth()
    {
        $app = $this->getInstance();
        $oauth = $app->oauth;


        if (!isset($_SESSION['wx_time'])) {
            $_SESSION['wx_time'] = time();
        } else if (time() - $_SESSION['wx_time'] > 5) {
            $_SESSION['wx_time'] = time();
            unset($_SESSION['wx_user']);
        }

        if (empty($_SESSION['wx_user'])){
            $oauth->redirect()->send();
        }


    }

}