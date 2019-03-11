<?php

/**
 * Created by PhpStorm.
 * User: longyan
 * Date: 2019/3/11
 * Time: 16:35
 */
namespace app\admin\controller;
use think\Controller;
use think\Db;
use think\Session;

class Index extends Controller{
    public function index(){
        return $this->fetch("login/login");
    }

    //退出
    public function sout(){
        Session::clear();
        return $this->fetch("login/login");
    }

    //判断账号是否存在
    public function check(){
        $name=$_POST['name'];
        $re=Db::name('login')->where("name",$name)->find();
        if($re){
            return 1;
        }else{
            return 2;
        }
    }

    //验证登录
    public function login(){
        $name=$_POST['name'];
        $pass=$_POST['pass'];
        $db=Db::name("login");
        $res=$db->where("name",$name)->find();
        if($res){
            if($pass == $res['pass']){
                Session::set("username",$name);
                echo 3;
            }else{
                echo 4;
            }
        }else{
            echo 5;
        }

    }

    public function dump(){
        return $this->fetch("login/index");
    }
}