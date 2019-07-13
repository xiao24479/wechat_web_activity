<?php
/**
 * Author: Henry
 * Date: 2019/4/24
 */

namespace app\controller;

use app\model\Model;
use app\service\WxOauth;
use app\model\Map;
use app\model\User;
use core\lib\Config;
use core\lib\Controller;

class IndexController extends Controller
{
    public $data = [];
    public function __construct()
    {
        $this->data['suffix'] = Config::get('global.suffix');
        $this->data['public'] = Config::get('global.public');
        $this->data['title'] = Config::get('global.title');
    }

    private function auth($url)
    {
        (new WxOauth($url))->processOauth();
    }

    //首页
    public function index()
    {
        $_SESSION['targetUrl'] = $_SERVER['REQUEST_URI'];
        $targetUrl = $_SESSION['targetUrl'];
        $this->auth($targetUrl);

        //精选记忆对
        $maps = (new Map())->getChooseMaps();
        $ids = array_column($maps,'id');
        $ids_str = implode(',',$ids);

        $user = new User();
        $chooseDatas = $user->getChooseUser($ids_str);

        //最新记忆对
        $latestDatas = $user->getLatestUser();

        $chooseInfo = [];
        foreach ($chooseDatas as $value) {
            $chooseInfo[$value['mid']][] = $value;
        }

        $latestInfo = [];
        foreach ($latestDatas as $value) {
            $latestInfo[$value['mid']][] = $value;
        }

        //排除当前用户配对信息并赋值
        $openid = isset($_SESSION['wx_user']['openid'])?$_SESSION['wx_user']['openid']:'';
        $where = [
            "openid" => $openid,
            'ORDER' => ["created_at" => "DESC"],
        ];
        $selfs = $user->getUser($where);
        $myInfo = [];
        if (!empty($selfs)){
            $myInfo = $latestInfo[$selfs['mid']];
            unset($latestInfo[$selfs['mid']]);
        }

        $this->data['myInfo'] = $myInfo;
        $this->data['chooseInfo'] = array_slice($chooseInfo,0,3,true );
        $this->data['latestInfo'] = array_slice($latestInfo,0,3,true );
        //p($this->data);
        $this->view("index/index.html",$this->data);


    }

    //首页ajax请求
    public function indexPageData()
    {

        $page = input('page',1);
        $type = input('type',1);

        if (!is_ajax_request()){
            echo json_encode([
                'errno' => 4,
                'page' => $page,
                'data' => '',
            ],JSON_UNESCAPED_UNICODE);
            exit();
        }

        $length = 3;
        $offset = ($page)*$length;

        if ($type == 2) {
            //最新记忆对
            $user = new User();
            $latestDatas = $user->getLatestUser();

            $latestInfo = [];
            foreach ($latestDatas as $value) {
                $latestInfo[$value['mid']][] = $value;
            }

            //排除当前用户配对信息
            $openid = isset($_SESSION['wx_user']['openid'])?$_SESSION['wx_user']['openid']:'';
            $where = [
                "openid" => $openid,
                'ORDER' => ["created_at" => "DESC"],
            ];
            $selfs = $user->getUser($where);
            if (!empty($selfs)){
                unset($latestInfo[$selfs['mid']]);
            }

            $latestInfo = array_slice($latestInfo,$offset,$length,true );
            if (!empty($latestInfo)){
                echo json_encode([
                    'errno' => 0,
                    'page' => $page + 1,
                    'data' => $latestInfo,
                ],JSON_UNESCAPED_UNICODE);
                exit();
            } else {
                echo json_encode([
                    'errno' => 2,
                    'page' => $page,
                    'data' => '',
                ],JSON_UNESCAPED_UNICODE);
                exit();
            }

        } else {
            //精选记忆对
            $maps = (new Map())->getChooseMaps();
            $ids = array_column($maps,'id');
            $ids_str = implode(',',$ids);
            $chooseDatas = (new User())->getChooseUser($ids_str);

            $chooseInfo = [];
            foreach ($chooseDatas as $value) {
                $chooseInfo[$value['mid']][] = $value;
            }
            $chooseInfo = array_slice($chooseInfo,$offset,$length,true );
            if (!empty($chooseInfo)){
                echo json_encode([
                    'errno' => 0,
                    'page' => $page + 1,
                    'data' => $chooseInfo,
                ],JSON_UNESCAPED_UNICODE);
                exit();
            } else {
                echo json_encode([
                    'errno' => 2,
                    'page' => $page,
                    'data' => '',
                ],JSON_UNESCAPED_UNICODE);
                exit();
            }
        }
    }

    //详情页
    public function article()
    {
        $_SESSION['targetUrl'] = $_SERVER['REQUEST_URI'];
        $targetUrl = $_SESSION['targetUrl'];
        $this->auth($targetUrl);

        if (!isset($_SESSION['CREATED'])) {
            $_SESSION['CREATED'] = time();
            $_SESSION['ticket'] = generateUniqueNum();
        } else if (time() - $_SESSION['CREATED'] > 1800) {
            $_SESSION['CREATED'] = time();
            $_SESSION['ticket'] = generateUniqueNum();
        }

        $mid = intval(input('id',0));

        $res = (new User())->getUsers(['status' => 1,'mid' => $mid]);
        if (empty($res)){
            $this->error();
        }

        $this->data['ticket'] = $_SESSION['ticket'];
        $this->data['datas'] = (new User())->getUsers(['status' => 1,'mid' => $mid]);

        $this->view("index/article.html",$this->data);

    }

    //引导页
    public function follow(){
        $this->view("index/follow.html",$this->data);
    }

    //报名页
    public function enroll()
    {
        $_SESSION['targetUrl'] = $_SERVER['REQUEST_URI'];
        $targetUrl = $_SESSION['targetUrl'];
        $this->auth($targetUrl);

        if ( isset($_SESSION['wx_user']['subscribe']) && $_SESSION['wx_user']['subscribe'] == 0 ){
            redirect("index","follow");
        }

        $this->data['nickname'] = isset($_SESSION['wx_user']['nickname'])?$_SESSION['wx_user']['nickname']:'';
        $this->view("index/enroll.html",$this->data);
    }

    //POST报名
    public function receive()
    {

        if (!is_ajax_request()){
            echo json_encode([
                'errno' => 4,
                'msg' => '提交不合法',
            ],JSON_UNESCAPED_UNICODE);
            exit();
        }

        $openid = isset($_SESSION['wx_user']['openid'])?$_SESSION['wx_user']['openid']:'';
        $content = input("content");
        $name = input("name",'');
        $phone = input("phone",'');
        $relative_phone = input("relative_phone",'');
        $time = time();

        if ( $content == '' || $name == '' || $phone == '' || $relative_phone == '' ){
            echo json_encode([
                'errno' => 7,
                'msg' => '信息填写不完整',
            ],JSON_UNESCAPED_UNICODE);
            exit();
        }

        $pattern = '/^\d{8,15}$/';
        if (!preg_match($pattern,$phone) || !preg_match($pattern,$relative_phone)){
            echo json_encode([
                'errno' => 8,
                'msg' => '号码格式错误',
            ],JSON_UNESCAPED_UNICODE);
            exit();
        }

        if (($_FILES["file"]["type"] != "image/gif") && ($_FILES["file"]["type"] != "image/jpeg") && ($_FILES["file"]["type"] != "image/pjpeg") && ($_FILES["file"]["type"] != "image/png") ) {

            echo json_encode([
                'errno' => 5,
                'msg' => '图片格式错误',
            ],JSON_UNESCAPED_UNICODE);
            exit();

        }

        if ($_FILES["file"]["size"] > 1024000) {

            echo json_encode([
                'errno' => 6,
                'msg' => '图片不能超过1M',
            ],JSON_UNESCAPED_UNICODE);
            exit();

        }

        if ($_FILES["file"]["error"] > 0)
        {
            echo json_encode([
                'errno' => $_FILES["file"]["error"],
                'msg' => '图片上传失败',
            ],JSON_UNESCAPED_UNICODE);
            exit();

        } else {

            $path = UPLOAD.DS.date('Ymd');

            $exts = explode('.', $_FILES['file']['name']);

            $fineName = time().'.'.end($exts);

            if (!is_dir($path)) {
                mkdir($path,0777,true);
            }

            $bool = move_uploaded_file( $_FILES["file"]["tmp_name"], $path.'/'.$fineName);
            if ($bool) {
                $img_dest_path = $path.'/'.$fineName;
            } else {
                echo json_encode([
                    'errno' => 9,
                    'msg' => '图片上传失败',
                ],JSON_UNESCAPED_UNICODE);
                exit();
            }

        }

        $model = (new Model());
        $user = (new User());
        $map = (new Map());

        $model->action(function() use($user,$map,$phone,$relative_phone,$openid,$name,$img_dest_path,$content,$time) {

            $is = $map->getOne(['phone' => $phone]);
            if ($is){
                echo json_encode([
                    'errno' => 33,
                    'msg' => '该号码已参加报名',
                ],JSON_UNESCAPED_UNICODE);
                exit();
            }

            $is = $map->getOne(['relative_phone' => $relative_phone]);
            if ($is){
                echo json_encode([
                    'errno' => 33,
                    'msg' => '该号码已匹配过了!',
                ],JSON_UNESCAPED_UNICODE);
                exit();
            }

            $rs = $map->getOne(['phone' => $relative_phone,'relative_phone' =>$phone]);
            $mid = $rs['id'];
            if (empty($mid)){
                $insert_map_datas = [
                    'phone' => $phone,
                    'relative_phone' => $relative_phone,
                ];
                $mid = $map->create($insert_map_datas);
            }

            $insert_datas = [
                'openid' => $openid,
                'name' => $name,
                'phone' => $phone,
                'relative_phone' => $relative_phone,
                'img' => $img_dest_path,
                'content' => $content,
                'created_at' => $time,
                'mid' => $mid
            ];

            $id = $user->create($insert_datas);

            if ($id) {

                echo json_encode([
                    'errno' => 0,
                    'msg' => '报名成功！',
                ],JSON_UNESCAPED_UNICODE);

                return true;

            } else {
                echo json_encode([
                    'errno' => 33,
                    'msg' => '报名失败！',
                ],JSON_UNESCAPED_UNICODE);

                //回滚
                return false;

            }

        });

    }

    public function test()
    {
        $this->view("index/test.html",$this->data);
    }


}