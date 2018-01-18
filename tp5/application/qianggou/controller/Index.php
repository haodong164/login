<?php
namespace app\qianggou\controller;
use think\Controller;
// use think\Redis;
class Index extends Controller{
	
    public function index()
    {
        $redis = new \Redis();
    	return $this->fetch();
    }
}
