<?php
/**
 * Author: Henry
 * Date: 2019/5/18
 */

namespace app\controller;

use app\service\WxOauth;
use core\lib\Controller;

class WechatController extends Controller
{

    /**
     * 微信回调
     * @throws \EasyWeChat\Kernel\Exceptions\InvalidConfigException
     */
    public function wxCallback()
    {
        $app = (new WxOauth($_SESSION['targetUrl']))->getInstance();
        $oauth = $app->oauth;

        // 获取 OAuth 授权结果用户信息
        $user = $oauth->user();

        $openid = $user->getId();

        $userInfo = $app->user->get($openid);

        $_SESSION['wx_user'] = $userInfo;

        header('location:'. $_SESSION['targetUrl']);

    }
}