<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/06/06
 * Time: 13:28
 */
namespace app\admin\controller;
class Index extends Base{

    public function login(){
        return $this->fetch(":login");
    }

}