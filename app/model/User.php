<?php
/**
 * Author: Henry
 * Date: 2019/5/18
 */

namespace app\model;


class User extends Model
{

    public $table = "henry_base_info";

    public function getChooseUser($ids_str)
    {
        $query = $this->query("SELECT * FROM henry_base_info WHERE mid in ({$ids_str}) AND status = 1");
        return $query->fetchAll(\PDO::FETCH_ASSOC);

    }

    public function getUserWhere($where)
    {
        $query = $this->query("SELECT * FROM henry_base_info WHERE {$where} ORDER BY created_at DESC");
        return $query->fetchAll(\PDO::FETCH_ASSOC);

    }

    public function getLatestUser()
    {
        $query = $this->query("SELECT * FROM henry_base_info WHERE status = 1 ORDER BY created_at DESC");
        return $query->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getUsers($where)
    {
        return $this->getAll($where);
    }

    public function getUser($where)
    {
        return $this->getOne($where);
    }

}