<?php
namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller
{
    public function index()
    {
//        $memcache = new \Memcache();
//        $memcache->connect('127.0.0.1', 11211);
//        $memcache->set('mem_key', 'Hello Memcache!', 0, 360);
//        $val = $memcache->get('mem_key');
//        echo $val;

        $one = M('Shop_one');
        $two = M('Shop_two');
        $thr = M('Shop_three');
        $data['one'] = $one->where('sta = 1')->select();
        $data['two'] = $two->where('sta = 1')->select();
        $data['thr'] = $thr->where('sta = 1')->select();
        $this->assign("data",$data);
        $this->display("index");
    }

    function jiam($data){
        $memcache = new \Memcache();
        $memcache->connect('127.0.0.1', 11211);
        $name = str_shuffle(md5($data));
        $memcache->set($name, $data, 0, 360);
        return $name;

    }

    function jiem($name){
        $memcache = new \Memcache();
        $memcache->connect('127.0.0.1', 11211);
        $val = $memcache->get($name);
        return $val;
    }


//    注册
    function reg(){
        $verify = new \Think\Verify();
        $data = $_POST;
        $code = $_POST['ver'];
        if($verify->check($code) === false){
            echo json_encode(9);
        }else{
            $add['key'] = $key = $this->random_str(6);
            $add['username'] = $data['name'];
            $add['password'] = md5($data['pass'].$key);
            $add['reg_time'] = time();
            $add['last_time'] = time();
            $add['user_avatar'] = "PUBLIC/Home/images/user_avatar/".rand(1,10).".jpg";
            $User = D('user');
            $user_id = $User->add($add);
            session('uid', $user_id);
            session('username', $data['name']);
            session('user_avatar', $data['user_avatar']);
            echo json_encode(1);
        }
    }

//    登录
    function login(){
        $verify = new \Think\Verify();
        $data = $_POST;
        $code = $_POST['ver'];
        if($verify->check($code) === false){
            echo json_encode(9);
        }else{
            $User = D('user');
            $user_info = $User ->where("username = '$data[name]'")->find();
            if($user_info['password'] == md5($data['pass'].$user_info['key'])){
                session('uid', $user_info['id']);
                session('username', $data['name']);
                session('user_avatar', $data['user_avatar']);
                echo json_encode(1);
            }else{
                echo json_encode(3);
            }

        }
    }

    function logout(){
        session(null);
        $this->success('退出成功', 'Index');
    }



    public function verify(){
        $Verify = new \Think\Verify();
        $Verify->fontSize = 30;
        $Verify->length   = 3;
        $Verify->useNoise = false;
        $Verify->codeSet = '0123456789';
        $Verify->imageW = 200;
        $Verify->imageH = 47;
        $Verify->entry();
    }

    
    function yz_username(){
        $name = $_POST['name'];
        $user = D('user');
        $ck = $user->where("username = '$name'")->find();
        if($ck){
            echo json_encode(1);
        }else{
            echo json_encode(2);
        }
    }
    function aaa(){
        $shop = M();
        $num = $shop->query("select count(shop_brand_id),shop_brand_id from lee_shops GROUP by shop_brand_id");
        var_dump($num);
    }
}