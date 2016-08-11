<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display("index");
    }

    //重新组合排序
    function zuhe($arr){
        if(count($arr) >= 2){
            $tmparr = array();
            $arr1 = array_shift($arr);
            $arr2 = array_shift($arr);
            foreach($arr1 as $k1 => $v1){
                foreach($arr2 as $k2 => $v2){
                    $tmparr[] = $v1.",".$v2;
                }
            }
            array_unshift($arr, $tmparr);
            $arr = $this->zuhe($arr);
        }else{
            return $arr;
        }
        return $arr;
    }

    function add_shop(){
        $shop_one = D('shop_one');
        $id = $_GET;
        if($id){
            $data['a_add_shop'] = "active";
            $data['a_shop'] = "active";
            $thr = explode("-",$id['id'])[2];

            $brand = M('Shop_brand');
            $data['brand'] = $brand->where("pid = $thr and sta = 1")->select();
            $data['type_id'] = $thr;
            $this->assign('data',$data);






            $this->display("add_shop_action");
        }else{
            $data['a_add_shop'] = "active";
            $data['a_shop'] = "active";
            $this->assign('data',$data);

            $shop_one_info = $shop_one->select();
            $this->assign('shop_one_info',$shop_one_info);
            $this->display("add_shop");
        }

    }



    function get_shop_lx(){
        $data = $_POST;
        if($data['lv'] == 1){
            $shop_lv = D('shop_two');
        }else if($data['lv'] == 2){
            $shop_lv = D('shop_three');
        }

        $info = $shop_lv->where("pid = ".$data['id'])->select();
        echo json_encode($info);
    }

    function add_cla_ok(){
        $data = $_POST;
        if($data['lv'] == 1){
            $shop_lv = D('shop_one');
        }else if($data['lv'] == 2){
            $shop_lv = D('shop_two');
            $add['pid'] = $data['id'];
        }else if($data['lv'] == 3){
            $shop_lv = D('shop_three');
            $add['pid'] = $data['id'];
        }

        $add['name'] = trim($data['name']);
        $add['sta'] = 1;
        $shop_lv->add($add);
        echo json_encode(1);
    }

    //得到商品的型号
    function get_shop_all_type(){
        $data = $_POST;
        $cate = M('Shop_cate_list');
        $info = $cate->where("pid = $data[id] and pid_type = $data[type]")->select();
        echo json_encode($info);
    }

    //得到所都的 商品属性，去填写 库存等信息
    function get_shop_all_to_input(){
        $id = $_POST['id'];
        $has = M('Shop_cate_has');
        $arr = M('Shop_att');
        $has_info = $has->where("pid = $id and sta = 1")->select();
        foreach ($has_info as $k=>$v){
            $att_info[] = $arr->where("pid = $v[id] and sta = 1")->select();
        }
        static $tmp = array();
        foreach ($att_info as $k=>$v){
            foreach ($v as $kk=>$vv){
                $a[$k][] = $vv['name']."-".$vv['id'];
            }
        }
        $arr = $this->zuhe($a);
        foreach ($arr as $k=>$v){
            $a = $v;
        }
        foreach ($a as $k=>$v){
            $b[] = explode(",",$v);
        }
        $this->assign("b",$b);
        $this->display('Ajax/input_shop_some');
    }

    //添加商品
    function add_shop_info(){
        $data = $_POST;
        $shops = M('Shops');
        $add['shop_name'] = $data['shop_name'];//商品名称
        $add['shop_brand_id'] = $data['shop_brand'];//商品品牌，比如 苹果 ，小米
        $add['shop_type_id'] = $data['shop_type'];//商品类型 ，比如 6s 5s note
        $add['shop_info'] = $data['editorValue'];//商品详情介绍
        $add['pid'] = $data['thr_id'];//商品类别  比如手机 衣服

        $add['sta'] = 2;//商品状态  2 为待待审核  1为上架  9为回收站
        $id = $shops->add($add);
        echo json_encode($id);
    }

    //添加商品的属性 到shops_type  跟  shops是关联的 关系
    function add_shop_all_type(){
        $data = $_POST;
        //循环值  把值变成数组，好操作
        foreach ($data as $k=>$v){
            foreach ($v as $kk=>$vv){
                $v_a[] = explode("-",$vv);
            }
        }

        //通过jq设置的 序号 区分每一条商品，并删除序号
        foreach ($v_a as $k => $v) {
            $kk = $v[0];
            unset($v[0]);
            $res[$kk][] = $v;
        }

        //通过jq设置的 类别  比如 图片，库存等 区分信息，方便存到数据库，并删除类别
        foreach ($res as $k=>$v){
            foreach ($v as $kk=>$vv){
                $a_k = $vv[1];
                unset($vv[1]);
                $res_a[$k][$a_k][] = $vv;
            }
        }

        foreach ($res_a as $k=>$v){
            foreach ($v as $kk=>$vv){
                if($kk == "属性"){
                    foreach ($vv as $kkk=>$vvv){
                        $res_b[$k][$kk][] = implode(",",$vvv);
                    }
                }else{
                    $res_b[$k][$kk] = $vv;
                }
            }
        }

        $shops_type = M('Shops_type');
        foreach ($res_b as $k=>$v){
            foreach ($v as $kk=>$vv){
                $add['price'] = implode(",",$v['价格'][0]);
                $add['shop_kc'] = implode(",",$v['库存'][0]);
                $add['shop_type'] = implode(",",$v['属性']);
                $add['img1'] = implode(",",$v['图片'][0]);
                //将图片裁剪为40x40并保存为corp.jpg
                $image = new \Think\Image();
                for($i=0;$i<=2;$i++){
                    $add['img'.($i+1)] = implode(",",$v['图片'][$i]);
                    $img = implode(",",$v['图片'][$i]);
                    if($img){
                        $image->open('.'.$img);
                        $img_n = $img = substr($img, strrpos($img, '/')+1);
                        $img_name = "small_".$img_n;
                        $u = './Upload/images/small/'.time().rand(0,99).$img_name;
                        $image->thumb(100,100)->save($u);
                        $add['img'.($i+1)."_small"] = ltrim($u, ".");
                    }
                }
                $add['pid'] = $data['pid'];
                $shops_type->add($add);
                break;
            }
        }
        echo json_encode(1);
    }

   
}