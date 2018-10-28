<?php
namespace app\index\controller;
use \think\Request;

class Index extends \think\Controller
{
    public function index()
    {
        return view('index');
    }

    public function button(){
        return $this->fetch('index/buttons');
    }

    public function typograph(){
        return $this->fetch('index/typograph');
    }

    public function icons(){
        return $this->fetch('index/icons');
    }

    public function form(){
        return $this->fetch('index/form');
    }

    public function login(){
        return $this->fetch('main/login');
    }
}
