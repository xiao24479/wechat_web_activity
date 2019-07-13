<?php
/**
 * Author: Henry
 * Date: 2019/4/24
 */

namespace app\model;

use core\lib\Config;
use Medoo\Medoo;

class Model extends Medoo
{
    public $table;
    public $prefix;
    public function __construct()
    {
        try{
            parent::__construct(Config::get('database'));
        } catch (\Exception $exception){
            die($exception->getMessage());
        }
    }

    public function getAll($where=[])
    {
        return $this->select($this->table,'*',$where);
    }

    public function getOne($where=[])
    {
        return $this->get($this->table,'*',$where);
    }

    public function getOneById($id)
    {
        return $this->get($this->table,'*',['id'=>$id]);
    }

    public function create($data)
    {
        $this->insert($this->table, $data);
        return $this->id();
    }

    public  function modify($data, $where = null)
    {
        $res= $this->update($this->table, $data, $where);
        return $res->rowCount();
    }

    public function del($where)
    {
        $res= $this->delete($this->table, $where);
        return $res->rowCount();
    }


}