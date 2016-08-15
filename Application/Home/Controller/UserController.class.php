<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller{

    function index(){
        $uid = $_SESSION['uid'];
        if(!$uid){
            $this->error("请先登录");
            exit;
        }

        $this->display("index");
    }

    function account_setting(){
        $uid = $_SESSION['uid'];
        $user = M('User');
        $user = $user->find($uid);
        $this->assign('user_info',$user);
        $this->assign('res','account_setting');
        $this->display("index");
    }

    //编辑帐号资料
    function edit_account_info(){

    }

    //编辑头像
    function upload_avatar(){
        $savePath = '/PUBLIC/images/uid_avatar/';  //图片存储路径
        $savePicName = rand(0,9999)."_".time();  //图片存储名称
        $filename162 = $savePath.$savePicName.".jpg";
        $src=base64_decode($_POST['pic1']);
        if($src) {
            file_put_contents($filename162,$src);
        }

        $rs['status'] = 1;
        $rs['picUrl'] = $savePath.$savePicName;
        print json_encode($rs);
    }
}
?>