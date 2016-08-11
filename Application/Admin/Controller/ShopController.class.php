<?php
namespace Admin\Controller;
use Think\Controller;
class ShopController extends Controller {
    public function shop_list(){
        $data['a_list'] = "active";
        $data['a_shop'] = "active";
        $this->assign('data',$data);

        $shop_three = M('Shop_three');
        $shop_three = $shop_three->where('sta = 1')->select();
        $this->assign('shop_three',$shop_three);

        $this->display("shop_list");
    }

    function get_shop_list(){
        $data = $_POST;
        $shops = M('Shops');
        $info = $shops->where("shop_brand_id = $data[brand_id] and pid = $data[type_id] and sta = 1")->select();
        $this->assign('info',$info);
        $this->display("Ajax/get_shop_list");
        echo json_encode($data);
    }

    //将商品送到回收站
    function del_this_shop(){
        $id = $_POST['id'];
        $edit['sta'] = 9;
        $shops = M('Shops');
        $shops->where("id = $id")->save($edit);
        echo json_encode(1);
    }

    //编辑商品
    function edit_shop(){

        $data['a_list'] = "active";
        $data['a_shop'] = "active";
        $this->assign('data',$data);

        $id = $_GET['id'];
        //查询商品信息
        $shops = M('Shops');
        $shop_info = $shops->find($id);

        //查询商品属性
        $id = $shop_info['shop_type_id'];
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

        $this->assign("shop_info",$shop_info);
        $this->assign("b",$b);

        $this->display("edit_shop");
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

    //编辑shops的内容
    function edit_shop_info(){
        $data = $_POST;
        $shops = M('Shops');
        $edit['shop_name'] = $data['shop_name'];//商品名称
        $edit['shop_info'] = $data['editorValue'];//商品详情介绍
        $edit['sta'] = 1;//商品状态  2 为待待审核  1为上架  9为回收站
        $shops->where("id = $data[shops_id]")->save($edit);

        echo json_encode(1);
    }

    function edit_shop_all_type(){
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
                $edit_id = implode(",",$v['ID'][0]);
                //将图片裁剪为100x100并保存为corp.jpg
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
                $shops_type->where("id = $edit_id")->save($add);
                break;
            }
        }
        echo json_encode(1);
    }
}