<?php
namespace Home\Controller;

use Think\Controller;

class ListsController extends Controller
{
    public function index()
    {
    	

    	$page=$_GET['page']?$_GET['page']:1;
    	$db=M('student');
    	$sum=$db->count();
    	$tiao=5;
    	$pages=ceil($sum/$tiao);
    	$info=$db->field('id,username,telphone,sex')->page($page,$tiao)->select();
    	$this->assign('info',$info);
    	$this->assign('pages',$pages);
    	$this->assign('page',$page);
        $this->display('lists');
    }
    public function pages(){
    	// $page=I('get.page')?I('get.page'):1;
    	echo $page;
    }
}