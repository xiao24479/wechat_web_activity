<?php
/**
 * Author: Henry
 * Date: 2019/5/19
 */

namespace app\controller;

use app\model\Model;
use Pagerfanta\Adapter\ArrayAdapter;
use Pagerfanta\Pagerfanta;
use Pagerfanta\View\TwitterBootstrap3View;
use app\model\Map;
use app\model\User;
use core\lib\Config;
use core\lib\Controller;

class AdminController extends Controller
{
    public $data = [];
    public function __construct()
    {
        $this->data['public'] = Config::get('global.public');
    }

    public function login()
    {
        if ( isset($_SESSION['is_login']) && $_SESSION['is_login']){
            redirect("admin","index");
        }

        $_SESSION['csrf_token'] = rand(10000,999999);
        $this->data['csrf_token'] = $_SESSION['csrf_token'];
        $this->view("admin/login.html",$this->data);
    }

    public function postLogin()
    {

        $headers = getHeaders();
        if ( (!isset($headers['Token']) && !isset($_SESSION['csrf_token'])) || ($headers['Token'] != $_SESSION['csrf_token']) ){
            echo json_encode([
                'errono' => 401,
                'msg' => '无权限访问'
            ],JSON_UNESCAPED_UNICODE);
            exit();
        }

        $pass = input("term");

        if (trim($pass) != Config::get("global.adminpass")){
            echo json_encode([
                'errono' => 4,
                'msg' => '密码错误'
            ],JSON_UNESCAPED_UNICODE);
            exit();
        } else {
            $_SESSION['is_login'] = true;
            echo json_encode([
                'errono' => 0,
                'msg' => '登录成功'
            ],JSON_UNESCAPED_UNICODE);
            exit();
        }

    }

    public function logout()
    {
        unset($_SESSION['is_login']);
        redirect("admin","login");
    }

    public function index()
    {
        $this->auth();

        $page = input("page",1);
        $phone = input("phone");
        $belongs = input("belongs",0);
        $flag = input("flag",0);

        $offset = $page - 1;
        $length = 10;

        $where = 1;

        if (!empty($phone)){
            $where .= " AND phone = '{$phone}'";
        }

        if ($belongs == 1){

            //$sql = "SELECT * FROM henry_base_info ORDER BY created_at DESC LIMIT {$offset}, {$length} ";
            //$sql = "SELECT * FROM henry_base_info WHERE {$where} ORDER BY created_at DESC";
            $infos = (new User())->getUserWhere($where);

            foreach ($infos as $key => $value) {
                $resd[$value['mid']][] = $value;
            }

            foreach ($resd as $key => $value) {
                if (count($value) == 2){
                    $matchmid[] = $key;
                }
            }

            if (!empty($matchmid)){
                $matchmid_str = implode(',',$matchmid);
                $where .= " AND mid in ({$matchmid_str}) ";
            } else {
                $where .= " AND mid in (0) ";
            }

        } elseif ($belongs == 2){

            //$sql = "SELECT * FROM henry_base_info ORDER BY created_at DESC LIMIT {$offset}, {$length} ";
            $infos = (new User())->getUserWhere($where);

            foreach ($infos as $key => $value) {
                $resd[$value['mid']][] = $value;
            }

            foreach ($resd as $key => $value) {
                if (count($value) == 2){
                    $matchmid[] = $key;
                }
            }

            if (!empty($matchmid)){
                $matchmid_str = implode(',',$matchmid);
                $where .= " AND mid not in ({$matchmid_str}) ";
            } else {
                $where .= " AND mid not in (0) ";
            }

        }

        $flags = (new Map())->getChooseMaps();
        $flags = array_column($flags,'id');


        if ($flag == 1){
            if (!empty($flags)){
                $mids_str = implode(',',$flags);
                $where .= " AND mid in ({$mids_str}) ";
            } else {
                $where .= " AND mid in (0) ";
            }
        } elseif ($flag == 2){
            if (!empty($flags)){
                $mids_str = implode(',',$flags);
                $where .= " AND mid not in ({$mids_str}) ";
            } else {
                $where .= " AND mid not in (0) ";
            }
        }

        //$sql = "SELECT * FROM henry_base_info ORDER BY created_at DESC LIMIT {$offset}, {$length} ";
        $infos = (new User())->getUserWhere($where);

        $adapter = new ArrayAdapter($infos);
        $pagerfanta = new Pagerfanta($adapter);

        $pagerfanta->setMaxPerPage($length);
        $pagerfanta->setCurrentPage($page);

        $routeGenerator = function($page) use($phone,$belongs,$flag) {
            return '?c=admin&a=index&phone='.$phone.'&belongs='.$belongs.'&flag='.$flag.'&page='.$page;
        };

        $view = new TwitterBootstrap3View();
        $options = [
            'proximity' => 3,
            'prev_message' => "上一页",
            'next_message' => "下一页",
        ];

        $nbResults = $pagerfanta->getNbResults();
        $infos = $pagerfanta->getCurrentPageResults();

        foreach ($infos as $key => $value) {
            if (in_array($value['mid'],$flags)){
                $infos[$key]['flag'] = 1;
            } else {
                $infos[$key]['flag'] = 0;
            }
        }

        $datas = [];
        foreach ($infos as $key => $value) {
            $datas[$value['mid']][] = $value;
        }

        $this->data["phone"] = $phone;
        $this->data["flag"] = $flag;
        $this->data["belongs"] = $belongs;
        $this->data["datas"] = $datas;
        $this->data["nums"] = $nbResults;
        $this->data["perpage"] = $length;

        $this->data["page"] = $view->render($pagerfanta, $routeGenerator, $options);

        $this->view("admin/index.html",$this->data);

    }

    public function getDetail()
    {
        $this->auth();

        if (!is_ajax_request()){
            echo json_encode([
                "errono" => 4,
                "content" => ''
            ],JSON_UNESCAPED_UNICODE);
            die();
        }
        $id = intval(input('id'));
        $res = (new User())->getOne(['id'=>$id]);
        echo json_encode([
            "errono" => 0,
            "content" => $res['content']
        ],JSON_UNESCAPED_UNICODE);
        die();
    }

    public function edit()
    {
        $this->auth();

        if (!is_ajax_request()){
            echo json_encode([
                "errono" => 4,
                "content" => ''
            ],JSON_UNESCAPED_UNICODE);
            die();
        }

        $id = intval(input('id'));
        $res = (new User())->getOne(['id'=>$id]);

        $map = (new Map())->getOne(['id'=>$res['mid']]);
        $res['flag'] = $map['flag'];

        echo json_encode([
            "errono" => 0,
            "data" => $res
        ],JSON_UNESCAPED_UNICODE);
        die();
    }

    public function uploadImg()
    {
        $this->auth();

        if (!is_ajax_request()){
            echo json_encode([
                "errno" => 4,
                'msg' => '请求错误！'
            ],JSON_UNESCAPED_UNICODE);
            die();
        }

        if (($_FILES["file"]["type"] != "image/gif") && ($_FILES["file"]["type"] != "image/jpeg") && ($_FILES["file"]["type"] != "image/pjpeg") && ($_FILES["file"]["type"] != "image/png") ) {

            echo json_encode([
                "errno" => 5,
                'msg' => '图片格式错误'
            ],JSON_UNESCAPED_UNICODE);
            exit();

        }

        if ($_FILES["file"]["size"] > 1024000) {

            echo json_encode([
                "errno" => 6,
                'msg' => '图片不能超过1M'
            ],JSON_UNESCAPED_UNICODE);
            exit();

        }

        if ($_FILES["file"]["error"] > 0)
        {

            echo json_encode([
                "errno" => $_FILES["file"]["error"],
                'msg' => '图片上传失败'
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
                echo json_encode([
                    "errno" => 0,
                    'msg' => '图片上传成功',
                    'path' => $img_dest_path
                ],JSON_UNESCAPED_UNICODE);
                exit();

            } else {
                echo json_encode([
                    "errno" => 9,
                    'msg' => '图片上传失败',
                    'path' => $img_dest_path
                ],JSON_UNESCAPED_UNICODE);
                exit();
            }

        }
    }

    public function updateData()
    {
        $this->auth();

        if (!is_ajax_request()){
            echo json_encode([
                "errno" => 4,
                'msg' => '请求错误！'
            ],JSON_UNESCAPED_UNICODE);
            die();
        }

        $id = intval(input('id'));
        $flag = empty(input("flag",0))?0:1;

        $data = [
            'name' => input("name"),
            'phone' => input("phone"),
            'relative_phone' =>input("relative_phone"),
            'img' => input("img"),
            'status' => empty(input("status",0))?0:1,
            'content' => input("content"),
        ];

        $model = (new Model());
        $user = (new User());
        $map = (new Map());

        $model->action(function () use($user,$map,$data,$id,$flag){

            $affected = $user->modify($data,['id' => $id]);

            $res = $user->getOne(['id'=>$id]);
            $affected = $map->modify(['flag'=>$flag],['id' => $res['mid']]);
            //p($map->log());
            echo json_encode([
                "errno" => 0,
                'msg' => '数据更新成功',
            ],JSON_UNESCAPED_UNICODE);
            return true;

        });

    }

    public function deleteData()
    {
        $this->auth();

        if (!is_ajax_request()){
            echo json_encode([
                "errno" => 4,
                'msg' => '请求错误！'
            ],JSON_UNESCAPED_UNICODE);
            die();
        }

        $id = intval(input('id'));

        $affected = (new User())->del(['id' => $id]);

        if ($affected) {
            echo json_encode([
                "errno" => 0,
                'msg' => '数据删除成功'
            ],JSON_UNESCAPED_UNICODE);
            die();
        } else {
            echo json_encode([
                "errno" => 9,
                'msg' => '数据删除失败'
            ],JSON_UNESCAPED_UNICODE);
            die();
        }
    }

    public function addData()
    {
        $this->auth();

        if (!is_ajax_request()){
            echo json_encode([
                "errno" => 4,
                'msg' => '请求错误！'
            ],JSON_UNESCAPED_UNICODE);
            die();
        }

        $openid = input('openid');
        $img = input('img');
        $content = input('content');
        $name = input('name',isset($_SESSION['nickname'])?$_SESSION['nickname']:'');
        $phone = input('phone');
        $relative_phone = input('relative_phone');
        $flag = input('flag',1);
        $time = time();

        $model = (new Model());
        $user = (new User());
        $map = (new Map());

        $model->action(function() use($user,$map,$phone,$relative_phone,$openid,$name,$img,$content,$time) {

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

            $rs = $map->getOne(['phone' => $relative_phone,'relative_phone' => $phone]);
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
                'img' => $img,
                'content' => $content,
                'created_at' => $time,
                'mid' => $mid
            ];

            $id = $user->create($insert_datas);

            if ($id) {

                echo json_encode([
                    'errno' => 0,
                    'msg' => '数据添加成功！',
                ],JSON_UNESCAPED_UNICODE);

                return true;

            } else {
                echo json_encode([
                    'errno' => 33,
                    'msg' => '数据添加失败！',
                ],JSON_UNESCAPED_UNICODE);

                //回滚
                return false;

            }

        });




    }

    private function auth(){
        if ( !isset($_SESSION['is_login']) || !$_SESSION['is_login']){
            redirect("admin","login");
        }
    }

    public function test()
    {
        if (0 === $_SESSION['wx_user']['subscribe']){
            echo 111;
        } else {
            echo 222;
        }
    }

}