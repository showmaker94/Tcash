<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){

        //*************8登陆注册******************
//        if(!session('adminUser')){
//            redirect('index.php?m=Home&c=Login');
//        }else{
//            $this->display();
//        }
        //*****************************************
        $time = date("Y-m-d", time());
        $User = M("assets"); // 实例化User对象
        $condition['date'] = array('like',$time);
//        $condition['date'] = array('like','2017-10-10');
// 把查询条件传入查询方法
        $data =$User->where($condition)->find();
//    header('Content-Type:text/html; charset=utf-8');
        $this->assign('data',$data);
//    dump($data);
        $this->display();

    }
}