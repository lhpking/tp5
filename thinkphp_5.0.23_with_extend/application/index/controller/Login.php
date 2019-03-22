<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019-03-22
 * Time: 11:24
 */
namespace app\index\controller;

class Login
{
    public function index()
    {
        $res =  "这是login控制器";

        $data = "我对login做出来一些修改";

        echo $res.$data;


    }
}