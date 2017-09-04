<?php
namespace app\index\controller;
use think\Controller;
use think\Request;
use think\Db;

class Index extends \think\Controller
{
    public function index(Request $request)
    {
		return $this->fetch();
    }
	public function login(){
		$username=Request::instance()->param('username');
		$password=Request::instance()->param('password');
		$status=Request::instance()->param('is_stu');
		$status=($status==true)?"student":"teacher";
		$table=$status.'_users';
		$usercolumn=($status=='student')?'number':'name';
		$result=Db::name($table)->where($usercolumn,$username)->where('password',$password)->find();
		
		if($result){
			return json_encode($result);
		}
		else{
			return 'no this man';
		}
	}
}
