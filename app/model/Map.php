<?php
/**
 * Author: Henry
 * Date: 2019/5/18
 */

namespace app\model;


class Map extends Model
{
    public $table = "henry_map";

    public function getChooseMaps(){
        return $this->getAll(['flag' => 1]);
    }
}