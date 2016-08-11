<?php
namespace Admin\Controller;
use Think\Controller;
class PicController extends Controller {
    public function index(){
        $data['a_pic'] = "active";
        $this->assign('data',$data);
        $this->display("index");
    }
}