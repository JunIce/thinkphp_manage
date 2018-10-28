<?php
namespace app\index\controller;
use \think\Request;

class Home extends \think\Controller
{
  public function login()
  {
      return view('login');
  }
  
  public function register()
  {
      return view('register');
  }
}
