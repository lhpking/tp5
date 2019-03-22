<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
        $res =  "hello word!";



        $data = "对index做出的修改";
        echo $res.$data;
    }
}
