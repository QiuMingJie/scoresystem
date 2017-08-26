<?php
namespace app\index\controller;
use think\Controller;
use think\Request;

class Index extends \think\Controller
{
    public function index(Request $request)
    {
		if($request->isPost()){
			dump($request->isPost());
		}
		else
		return $this->fetch();
    }
}
