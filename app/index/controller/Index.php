<?php
namespace app\index\controller;
use think\Controller;
use think\Request;

class Index extends \think\Controller
{
    public function index(Request $request)
    {
		return $this->fetch();
    }
	public function login(){
		return 'yes';
	}
}
