<?php
namespace app\index\controller;
use think\Controller;
use app\index\controller\Common;
use think\cache\driver\Redis;
class Index extends Common{
	
    public function index()
    {
        $this->assign('username',session('username'));
    	return $this->fetch();
    }
    public function des(){
        $_SESSION = array(); //清除SESSION值.  
          if(isset($_COOKIE["username"])){  //判断客户端的cookie文件是否存在,存在的话将其设置为过期.  
                setcookie('username','',time()-1,'/');  
            }  
        session_destroy();  //清除服务器的sesion文件  
        return $this->redirect('Login/login');
    }
    public function qianggou(){
        $redis=new Redis;
        $db=db('mianshi');
        $kucun=$db->field('kucun')->where("username='刘飞'")->find()['kucun'];
        echo $kucun."<br/>";
        // if(session('username'))
        exit;

        // $redis->set('test_name', 'test');
        // // 把 'test_name' 的 值从 redis 读取出来 
        // echo $redis->get('test_name');
        // exit;

        // $num = 10;   //系统库存量
        // $user_id =  session('username');//当前抢购用户id
        // $len =$redis->llen('order:1');  //检查库存，order:1 定义为健名
        // if($len >= $num){
        //     return '已经抢光了哦';
        // }
        // $result =$redis->lpush('order:1',$user_id);  //把抢到的用户存入到列表中
        // if($result){
        //     return '恭喜您!抢到了哦';
        // }
   }
}
