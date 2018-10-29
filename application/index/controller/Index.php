<?php
namespace app\index\controller;
use \think\Request;

class Index extends \think\Controller
{
    public function index()
    {
        $data = [
            [
                'username' => 'David Grey',
                'userpic' => "images/faces/face1.jpg",
                'text' => 'Fund is not recieved',
                'update_at' => 'Dec 5, 2017',
                'status' => 1,
                'tracking_id' => 'WD-12345'
            ],
            [
                'username' => 'Stella Johnson',
                'userpic' => "images/faces/face2.jpg",
                'text' => 'High loading time',
                'update_at' => 'Dec 5, 2017',
                'status' => 1,
                'tracking_id' => 'WD-12345'
            ],
            [
                'username' => 'Marina Michel ',
                'userpic' => "images/faces/face3.jpg",
                'text' => 'High loading time',
                'update_at' => 'Dec 5, 2017',
                'status' => 1,
                'tracking_id' => 'WD-12345'
            ],
            [
                'username' => ' John Doe ',
                'userpic' => "images/faces/face4.jpg",
                'text' => 'High loading time',
                'update_at' => 'Dec 5, 2017',
                'status' => 1,
                'tracking_id' => 'WD-12345'
            ]
        ];
        return view('index', ['data' => $data]);
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
