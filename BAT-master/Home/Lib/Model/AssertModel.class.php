<?php
/**
 * Created by PhpStorm.
 * User: liujunjun
 * Date: 2015/7/6
 * Time: 10:31
 */

class AssertModel extends Model{
    public function getByStepId($id){
        //$condition['id']=$id;
        return $this->where(array("id"=>$id))->field('content')->select();
//        return $this->where("id = 257")->select();
}
}