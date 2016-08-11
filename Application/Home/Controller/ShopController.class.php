<?php
namespace Home\Controller;

use Think\Controller;

class ShopController extends Controller
{
    public function shop_list()
    {
        //解密ID
        $id = $this->decryption($_GET['id']);
        $shop_brand = M('Shop_brand');
        $shop_this_page = M('Shop_three');
        $shops = D('Shops');
        //查询当前页面地址
        $data['shop_this_page'] = $shop_this_page->where("id = $id")->find();

        //查询时候有 筛选条件
        $screen_brand = $this->decryption($_GET['brand']);
        $screen_price = $this->decryption($_GET['price']);
        $screen_wl = $this->decryption($_GET['wl']);
        $screen_nc = $this->decryption($_GET['nc']);

        //商品条件
        if($screen_brand){
            $data['screen_brand'] = $shop_brand->where("id = $screen_brand")->getField('name');
            $where = "shop_brand_id = $screen_brand";
        }else{
            $where = "sta = 1";
        }

        //价格条件  原理 通过Shops_type 查询符合条件的PID 也就是商品的ID 在这些ID里 查询shops
        if($screen_price){
            $data['screen_price'] = $screen_price;
            if($screen_price == "5000+"){
                $p_array = explode("+",$screen_price);
                $shop_type = M('Shops_type');
                $p_res = $shop_type->where("price >= $p_array[0]")->field('pid')->select();
                foreach ($p_res as $k=>$v){
                    $o_end_res[] = $v['pid'];
                }
                $p_res_id = implode(",",array_unique($o_end_res));
                if($p_res_id){
                    $where_p = "id in ($p_res_id)";
                }else{
                    $where_p = "sta = 99";
                }
            }else{
                $p_array = explode("-",$screen_price);
                $shop_type = M('Shops_type');
                $p_res = $shop_type->where("price >= $p_array[0] and price < $p_array[1]")->field('pid')->select();
                foreach ($p_res as $k=>$v){
                    $o_end_res[] = $v['pid'];
                }
                $p_res_id = implode(",",array_unique($o_end_res));
                if($p_res_id){
                    $where_p = "id in ($p_res_id)";
                }else{
                    $where_p = "sta = 99";
                }
            }
        }else{
            $where_p = "sta = 1";
        }
        //网络条件 原理 通过Shops_att 查询条件 去shop_type里面比较 shop_type找到ID 在查询
        if($screen_wl){
            $data['screen_wl'] = $screen_wl;
            $shop_att = M();
            $list_id = $shop_att->query("select id from lee_shop_att where name like '%$screen_wl%'");
            $shops_id = [];
            foreach ($list_id as $k=>$v){
                $shops_id[] = $shop_att->query("select pid from lee_shops_type where shop_type like '%$v[id]%'");
            }
            foreach ($shops_id as $k=>$v){
                foreach ($v as $kk=>$vv){
                    $wl_end[] = $vv['pid'];
                }
            }
            $wl_end_id = implode(",",array_unique($wl_end));
            if($wl_end_id){
                $where_wl = "id in ($wl_end_id)";
            }else{
                $where_wl = "sta = 99";
            }
        }else{
            $where_wl = "sta = 1";
        }
        //内存条件
        if($screen_nc){
            $data['screen_nc'] = $screen_nc;
            $shop_att = M();
            $list_id = $shop_att->query("select id from lee_shop_att where name like '%$screen_nc%'");
            foreach ($list_id as $k=>$v){
                $shops_nc_id[] = $shop_att->query("select pid from lee_shops_type where shop_type like '%$v[id]%'");
            }
            foreach ($shops_nc_id as $k=>$v){
                foreach ($v as $kk=>$vv){
                    $nc_end[] = $vv['pid'];
                }
            }
            $nc_end_id = implode(",",array_unique($nc_end));
            if($nc_end_id){
                $where_nc = "id in ($nc_end_id)";
            }else{
                $where_nc = "sta = 99";
            }
        }else{
            $where_nc = "sta = 1";
        }

        //查询该类目所有商品
        $data['shops'] = $shops->where("pid = $id and sta = 1 and $where and $where_p and $where_wl and $where_nc")->relation(true)->select();

        //查询该类目所有商标
        $data['shop_brand'] = $shop_brand->where("pid = $id and sta = 1")->select();
        $this->assign("data",$data);
        $this->display("shop_list");
    }

    function info(){
        //解密ID
        $id = $this->decryption($_GET['id']);
        $shop_last_page = M('Shop_three');
        $shop_this_page = M('Shop_cate_list');
        $shops = D('Shops');

        //关联查询  该商品的所有属性
        $data['shop'] = $shop_info= $shops->where("id = $id")->relation(true)->find();


        //将图片循环出来，用于展示
        $img = [];
        $img_small = [];
        foreach ($shop_info['shops_type'] as $k=>$v){
            $price[] = $v['price'];
            $kc[] = $v['shop_kc'];
            for ($i=1;$i<=3;$i++){
                if($v["img".$i]){
                    array_push($img,$v["img".$i]);

                }
                if($v["img".$i."_small"]){
                    array_push($img_small,$v["img".$i."_small"]);
                }
            }
        }
     

        $data['max_price'] = max($price);
        $data['min_price'] = min($price);
        $data['kc'] = array_sum($kc);


        $data['big_img'] = array_unique($img);
        $data['small_img'] = array_unique($img_small);

        //查询当前页面以及上一页面
        $data['shop_last_page'] = $shop_last_page->where("id = $shop_info[pid]")->find();
        $data['shop_this_page'] = $shop_this_page->where("id = $shop_info[shop_type_id]")->find();

        //关联查询 该商品所有的 属性 以及 值
        $Has = D('Shop_cate_has');
        $data['has'] = $Has->where("pid = $shop_info[shop_type_id]")->relation(true)->select();
        $this->assign("data",$data);
        $this->display("shop_info");
    }

    //得到商品的库存 ，价格等信息。
    function get_shop_type(){
        $data = $_POST;
        foreach ($data['type_id'] as $k=>$v){
            $id[] = $this->decryption($v);
        }

        $pid = $this->decryption($_GET['id']);
        $shop_type = M('Shops_type');
        $where_one = implode(",",$id);
        $info = $shop_type->where("shop_type = '$where_one' and pid = $pid")->find();
        echo json_encode($info);
    }

    //得到商品购买清单
    function get_shop_buy_list(){
        $data = $_POST;
        foreach (explode(",",$data['info']) as $k=>$v){
            $id[] = $this->decryption($v);
        }

        //得到商品属性  例如土豪今 什么的
        $att = M('Shop_att');
        $att_info = $att->field('name')->select(implode(",",$id));
        foreach ($att_info as $k=>$v){
            $att_info_name[] = $v['name'];
        }

        $pid = $this->decryption($_GET['id']);
        $shop_type = M('Shops_type');
        $where_one = implode(",",$id);
        $info = $shop_type->where("shop_type = '$where_one' and pid = $pid")->find();

        //得到商品名称
        $shop = M('Shops');
        $shop_info = $shop->find($pid);
        $data_info['shop_name'] = $shop_info['shop_name'];                   //商品名称
        $data_info['att_info_name'] = implode(",",$att_info_name);                        //土豪今 、 移动 、64G这类属性
        $data_info['price'] = $info['price'];                                //商品价格
        $data_info['price_m'] = $this->encryption($info['price']);           //商品价格加密
        $data_info['pic'] = $info['img1'];                                   //商品图片
        $data_info['num'] = $_POST['num'];                                   //商品数量
        $data_info['num_m'] = $this->encryption($_POST['num']);              //商品数量加密
        echo json_encode($data_info);
    }

    function get_address(){
        //查询收货地址
        $address = M('My_address');
        $uid = $_SESSION['uid'];
        $address = $address->where("uid = $uid")->select();

        $this->assign("address",$address);
        $this->display("Ajax/my_address");
    }

    function add_address(){
        $data = $_POST;
        if($data < 6){
            echo json_encode(2);
        }else{
            $address = M('My_address');
            $uid = $_SESSION['uid'];

            $add['address'] = $data['province']."/".$data['city']."/".$data['area']."/".$data['xx_adress'];
            $add['consignee_name'] = $data['sh_people'];
            $add['consignee_tel'] = $data['sh_tel'];
            $add['uid'] = $uid;
            if($data['address_sta'] == 1){
                $edit['sta'] = 0;
                $address->where("uid = $uid")->save($edit);
                $add['sta'] = 1;
            }

            $address->add($add);
            echo json_encode(1);
        }
    }

    //添加订单
    function add_to_pay(){
        $data = $_POST;
        foreach (explode(",",$data['shop_info']) as $k=>$v){
            $id[] = $this->decryption($v);
        }
        $add_att['shop_type'] = implode(",",$id);
        $add_att['num'] = $this->decryption($data['num']);
        $add['pay_way'] = $this->decryption($data['pay_way']);
        //查询收货地址
        $address = M('My_address');
        $address_id = $this->decryption($data['buy_address']);
        $address = $address->where("id = $address_id")->find();

        $add['buy_address'] = $address['address'];
        $add['consignee_name'] = $address['consignee_name'];
        $add['consignee_tel'] = $address['consignee_tel'];

        //查询商品的价格
        $pid = $this->decryption($_GET['id']);
        $shop_type = M('Shops_type');
        $add_att['price'] = $shop_type->where("shop_type = '$add_att[shop_type]' and pid = $pid")->getField('price');

        $add['creat_time'] = time();
        $add['pay_sta'] = 0;
        $add['uid'] = $_SESSION['uid'];
        $add['amount'] = $add_att['price'] * $add_att['num'];
        $add['order_id'] = time().rand(0,9999).time().$add['uid'].rand(0,999);

        //存入订单表。
        $orders = M('Orders');
        $o_id = $orders->add($add);

        //将商品信息存到信息表
        //查询商品的信息
        $shop_info = M('Shops');
        $add_att['shop_name'] = $shop_info->where("id = $pid")->getField('shop_name');
        $add_att['pid'] = $add['order_id'];
        $add_att['shop_id'] = $pid;
        $orders_att = M('Order_att');
        $orders_att->add($add_att);


        echo json_encode($o_id);
    }

    function pay_ok(){
        $this->display("pay_ok");
    }

}