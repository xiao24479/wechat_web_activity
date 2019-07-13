<?php
/**
 * Author: Henry
 * Date: 2019/4/21
 * @param $controller
 * @param $action
 * @return mixed
 */

//获取Header信息
function getHeaders(){
    foreach ($_SERVER as $name => $value)
    {
        if (substr($name, 0, 5) == 'HTTP_')
        {
            $headers[str_replace(' ', '-', ucwords(strtolower(str_replace('_', ' ', substr($name, 5)))))] = $value;
        }
    }
    return $headers;
}

//跳转
function redirect($controller,$action){
    $url = "?c=".$controller."&a=".$action;
    header("location:".$url);
}

//是否AJAX请求
function is_ajax_request()
{
    if ( isset($_SERVER["HTTP_X_REQUESTED_WITH"]) && strtolower($_SERVER["HTTP_X_REQUESTED_WITH"]) == 'xmlhttprequest' ){
        return true;
    }
    return false;
}

function makeOrderNumber()
{
    $letters = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];

    //return $letters[date('Y')-2019].date('Ymd').str_pad(str_shuffle(substr(microtime(),2,5)),5,'0',STR_PAD_LEFT);

    return  $letters[intval(date('Y')) - 2019] . strtoupper(dechex(date('m'))) . date('d') . substr(time(), -5) . substr(microtime(), 2, 5) . sprintf('%\'02d', rand(0, 99));

}

function generateUniqueNum(){
    return date("ymd").str_pad(rand(0,9999),4,0,STR_PAD_LEFT);
}

/**
 * 参数过滤
 * @param $k
 * @param $default
 * @return mixed
 */
function input($k,$default = ''){

    if(!array_key_exists($k,$_REQUEST)){
        return $default;
    } elseif (isset($_REQUEST[$k]) && empty($_REQUEST[$k])){
        return $default;
    } else {
        return htmlspecialchars(addslashes(trim($_REQUEST[$k])));
    }

}


/**
 * 首字母大写
 * @param $string
 * @return string
 */
function strZmDealer($string){
    return ucfirst(strtolower(trim($string)));
}


function p($var){
    echo '<pre>';
    print_r($var);
    echo '</pre>';
    die();
}


//无限极递归
function getList($array, $pid =0, $level = 0){

    //声明静态数组,避免递归调用时,多次声明导致数组覆盖
    static $list = [];
    foreach ($array as $key => $value){
        //第一次遍历,找到父节点为根节点的节点 也就是pid=0的节点
        if ($value['pid'] == $pid){
            //父节点为根节点的节点,级别为0，也就是第一级
            $value['level'] = $level;
            //把数组放到list中
            $list[] = $value;
            //把这个节点从数组中移除,减少后续递归消耗
            unset($array[$key]);
            //开始递归,查找父ID为该节点ID的节点,级别则为原级别+1
            getList($array, $value['id'], $level+1);

        }
    }
    return $list;
}

//引用分类
function generateTree($array){
    //第一步 构造数据
    $items = array();
    foreach($array as $value){
        $items[$value['id']] = $value;
    }
    //第二部 遍历数据 生成树状结构
    $tree = array();
    foreach($items as $key => $value){
        if(isset($items[$value['pid']])){
            $items[$value['pid']]['son'][] = &$items[$key];
        }else{
            $tree[] = &$items[$key];
        }
    }
    return $tree;
}
