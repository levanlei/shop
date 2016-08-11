<?php
namespace Admin\Controller;
use Think\Controller;
class CateController extends Controller {
    // 商品品牌列表
    public function shop_brand(){
        $data['a_cate'] = "active";
        $data['a_shop_brand'] = "active";
        $this->assign('data',$data);

    // 关联查询出 每个种类的品牌
        $Shop_three = D("ShopThree");
        $shop_brand = $Shop_three->relation(true)->select();

        $this->assign('shop_brand',$shop_brand);

        $this->display("brand");
    }

    // 修改商品名称
    function change_shop_brand_name(){
        $data = $_POST;
        $shop_brand = M("shop_brand");
        $brand_name = $shop_brand ->find($data['id']);
        if($brand_name['name'] == $data['name']){
            echo json_encode(9);
        }else{
            $edit['id'] = $data['id'];
            $edit['name'] = $data['name'];
            $shop_brand->save($edit);
            echo json_encode(1);
        }
    }

    // 删除商品名称 , 后期 修改为状态,可以恢复,目前先 直接删除
    function del_shop_brand(){
        $id = $_POST['id'];
        $shop_brand = M("shop_brand");
        $shop_brand->delete($id);
        echo json_encode(1);
    }

    // 新增商品品牌
    function add_shop_brand(){
        $data = $_POST;
        $shop_brand = M("shop_brand");
        $add['name'] = $data['name'];
        $add['pid'] = $data['id'];
        $add['sta'] = 1;
        $shop_brand->add($add);
        echo json_encode(1);
    }

    // 商品分类 列表
    function shop_cate(){
        $data['a_cate'] = "active";
        $data['a_shop_cate'] = "active";
        $this->assign('data',$data);

        $shop_three = M('Shop_three');
        $shop_three = $shop_three->where('sta = 1')->select();




        $this->assign('shop_three',$shop_three);
        $this->display("shop_cate");
    }

    //商品分类，获取商品的品牌
    function get_shop_brand(){
        $id = $_POST['id'];
        $shop_brand = M('Shop_brand');
        $info = $shop_brand->where('pid = '.$id)->select();
        echo json_encode($info);
    }

    //商品分类，获得不同分类---不同品牌--的商品型号
    function get_shop_cate_list(){
        $data = $_POST;
        $cate_list = M('Shop_cate_list');
        $info =  $cate_list->where("pid = '$data[brand_id]' and pid_type = '$data[type_id]'")->getField('id',true);
//获取属性方法，测试
        $list = M('Shop_cate_list');
        $cate_has = M('Shop_cate_has');
        $att = M('Shop_att');
        if($info){
            $list = $list->select(implode(",",$info));
        }
        //通过Shop_cate_list 关联到 Shop_cate_has 找到拥有的属性 -->在通过Shop_att找到每个属性拥有的值
        foreach ($list as $k=>$v){
            $has = $cate_has->where("pid = $v[id]")->select();
            $list[$k]['has'] = $has;
            foreach ($has as $kk=>$vv){
                $has_att = $att->where("pid = $vv[id]")->select();
                $list[$k]['has'][$kk]['att'] = $has_att;
            }
        }
        $this->assign('list',$list);
        $this->display('Ajax/get_shop_cate_list');
    }

    //属性 删除
    function del_att(){
        $id = $_POST['id'];
        $att = M('Shop_att');
        $att->delete($id);
        echo json_encode(1);
    }
    //添加新的属性
    function add_att(){
        $data = $_POST;
        $add['name'] = $data['name'];
        $add['pid'] = $data['id'];
        $add['sta'] = 1;
        $att = M('Shop_att');
        $att->add($add);
        echo json_encode(1);
    }

    //修改属性的名称
    function edit_att_name(){
        $data = $_POST;
        $att = M('Shop_att');
        $att_info = $att->find($data['id']);
        if($att_info['name'] == $data['name']){
            echo json_encode(9);
        }else{
            $edit['id'] = $data['id'];
            $edit['name'] = $data['name'];
            $att->save($edit);
            echo json_encode(1);
        }
    }

    //删除 颜色  版本  容量所有属性
    function del_this_type(){
        $id = $_POST['id'];
        $cate_has = M('Shop_cate_has');
        $att = M('Shop_att');
        $cate_has->delete($id);
        $att->where("pid = '$id'")->delete();
        echo json_encode(1);
    }

    //添加新的属性类型
    function add_new_type(){
        $data = $_POST;
        $cate_has = M('Shop_cate_has');
        $add['name'] = $data['name'];
        $add['pid'] = $data['id'];
        $add['sta'] = 1;
        $cate_has->add($add);
        echo json_encode(1);

    }

    //删除 改行所有内容
    function del_this_all(){
        $id = $_POST['id'];
        $list = M('Shop_cate_list');
        $cate_has = M('Shop_cate_has');
        $att = M('Shop_att');

        $att_id = $cate_has->where("pid = $id")->getField('id',true);
        foreach ($att_id as $k=>$v){
            $att->where("pid = $v")->delete();
        }
        $list->delete($id);
        $cate_has->where("pid = $id")->delete();
        echo json_encode(1);
    }

    //添加新的商品属性类型
    function add_new_shop_type(){
        $data = $_POST;
        $add['name'] = $data['v'];
        $add['pid'] = $data['pid'];
        $add['pid_type'] = $data['pid_type'];
        $add['sta'] = 1;
        $cate_list = M('Shop_cate_list');
        $id = $cate_list->add($add);
        echo json_encode($id);
    }

}