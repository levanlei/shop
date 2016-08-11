<?php if (!defined('THINK_PATH')) exit();?><html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="/Public//bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/Public//bootstrap/css/animate.min.css">
        <link rel="stylesheet" href="/Public/bootstrap/css/jquery.toast.min.css">
        <link rel="stylesheet" type="text/css" href="/Public/Home/css/index.min.css">
        <link rel="stylesheet" href="/Public/my/css/win10loading.css">
        <link href="/Public/bootstrap/css/styles.css" rel="stylesheet">

        <script src="/Public/bootstrap/js/jquery-2.1.4.min.js"></script>
        <script src="/Public/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/Public/bootstrap/js/my.js"></script>
        <link rel="stylesheet" href="/Public/my/css/jquery-labelauty.css">
        <script type="text/javascript" src="/Public/bootstrap/js/jquery.toast.min.js"></script>
        <title><?php echo ($data["shop"]["shop_name"]); ?></title>
        
    <link href="/Public/Home/css/fl.css"  type="text/css" rel="stylesheet">
    <style>
        .row {
            margin-right: 0;
            margin-left: 0;
        }
    </style>

    </head>
    <body>
    <!--最上面的 导航-->
        <div class="header_top">
            <div class="header_main">
                <ul class="header_main_left">
                    <li>送至：湖北</li>
                </ul>
                <ul class="header_main_right">
                    <?php if(session(uid)): ?><li><a href="javascript:void(0)">欢迎回来 <?php echo (session('username')); ?></a></li>
                        <li><a href="<?php echo U('Home/Index/logout');?>">安全退出</a></li>
                        <?php else: ?>
                        <li><a href="javascript:void(0)" onclick="$('.login_tu_div').fadeIn(300);">登录</a></li>
                        <li><a href="javascript:void(0)" onclick="$('.reg_div').fadeIn(300);">注册</a></li><?php endif; ?>
                    <li><a href="">我的订单</a></li>
                    <li><a href="">个人中心</a></li>
                    <li><a href="">客户服务</a></li>
                    <li><a href="">网站导航</a></li>
                </ul>
                <div style="clear: both"></div>
            </div>
        </div>
    <!--最上面的 导航 结束-->
    <!--功能  logo 搜索 购物车-->
    <div class="header_two">
        <div class="header_two_logo">
            <img src="/Public/Home/images/logo.png" alt="">
        </div>
        <div class="header_two_search">
            <input type="text" class="index_search">
            <button type="button" class="ss_btn">搜索</button>
            <div style="clear: both"></div>
            <div class="header_two_keywords">
                <ul>
                    <li><a href="">鞋服清仓</a></li>
                    <li><a href="">鞋服清仓</a></li>
                    <li><a href="">鞋服清仓</a></li>
                    <li><a href="">鞋服清仓</a></li>
                    <li><a href="">鞋服清仓</a></li>
                    <li><a href="">鞋服清仓</a></li>
                </ul>
            </div>
        </div>
        <div class="header_two_cars">
            <div class="header_two_cars_div">
                <img src="/Public/Home/images/cars.png" >
                <span style="float: left">我的购物车</span><span class="badge" style="background-color: #9B060F
                ;float: left">3</span><span style="float: left;margin-left: 10px"> > </span>
                <div style="clear: both"></div>
            </div>
        </div>
        <div style="clear: both"></div>
    </div>
    <!--功能  logo 搜索 购物车 结束-->

    
    <div class="all_fl" style="width: 1240px;margin: 0 auto">
        <ol class="breadcrumb">
            <li><a href="<?php echo U('index/index');?>">主页</a></li>
            <?php $id = $this->encryption($data['shop_last_page']['id']); ?>
            <li><a href="<?php echo U('Home/Shop/shop_list',array( 'id' => $id));?>"><?php echo ($data["shop_last_page"]["name"]); ?></a></li>
            <li class="active"><?php echo ($data["shop_this_page"]["name"]); ?></li>
        </ol>

        <div class="row">
            <div class="col-md-4"  style="padding: 0">
                <div class="banner">
                    <div class="large_box">
                        <ul>
                            <?php if(is_array($data["big_img"])): foreach($data["big_img"] as $key=>$v): ?><li style="display: none;">
                                    <img src="<?php echo ($v); ?>" width="420" height="420">
                                </li><?php endforeach; endif; ?>
                        </ul>
                    </div>
                    <div class="small_box">
                        <span class="k_btn left_btn" style="background-image: url('/Public/Home/images/left-arrow.png')"></span>
                        <div class="small_list">
                            <ul style="width: 720px;">
                                <?php if(is_array($data["big_img"])): foreach($data["big_img"] as $key=>$v): ?><li class="">
                                        <img src="<?php echo ($v); ?>" width="60" height="60">
                                        <div class="bun_bg"></div>
                                    </li><?php endforeach; endif; ?>
                            </ul>
                        </div>
                        <span class="k_btn right_btn" style="background-image: url('/Public/Home/images/right-arrow.png')"></span>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <p style="font-size: 16px;font-weight: 600"><?php echo ($data["shop"]["shop_name"]); ?></p>
                <div style="width: 100%;padding: 15px;margin-bottom: 15px;background: url(//static.360buyimg.com/item/default/1.0.13/components/common/i/price-bg.png) repeat-x #efefef;">
                    <div class="dt">价 格 :</div>
                    <span style="margin-left: 15px;color: #9B060F;font-size: 16px;font-weight: 600" class="shop_price"><?php echo ($data["min_price"]); ?> - <?php echo ($data["max_price"]); ?></span>
                    <div style="clear: both"></div>
                </div>
                <?php if(is_array($data["has"])): foreach($data["has"] as $k=>$v): ?><div style="margin-bottom: 15px">
                        <div class="dt" style="line-height: 41px"><?php echo ($v["name"]); ?> :</div>
                        <div style="float: left;width: 90%;padding: 0 15px">
                            <ul class="dowebok dowebok_radio">
                                <?php if(is_array($v["shop_att"])): foreach($v["shop_att"] as $key=>$vv): ?><li style="margin-right: 5px"><input type="radio" style="opacity: 0" name="shop_type_<?php echo ($k+1); ?>" class="shop_type" value="<?php echo $this->encryption($vv['id']); ?>"  data-labelauty="<?php echo ($vv["name"]); ?>"></li><?php endforeach; endif; ?>
                            </ul>
                        </div>
                        <div style="clear: both"></div>
                    </div><?php endforeach; endif; ?>
                <div class="dt">数量 :</div>
                <div style="float: left;width: 90%;padding: 0 15px">
                    <input type="text" class="tb-text" value="1" name="tb-num" style="width: 36px;height: 36px;float: left">
                    <div style="width: 36px;height: 36px;float: left;position: relative;text-align: center">
                        <a href="javascript:void(0);" class="num_add"><span class="glyphicon glyphicon-menu-up" aria-hidden="true" style="position: absolute;top: 0;left: 5px;width: 30px;height: 16px;border: 1px solid #a7a6ab;color: #a7a6ab"></span></a>
                        <a href="javascript:void(0);" class="num_sub"><span class="glyphicon glyphicon-menu-down" aria-hidden="true" style=";position: absolute;top: 20px;left: 5px;width: 30px;height: 16px;border: 1px solid #a7a6ab;color: #a7a6ab"></span></a>
                    </div>
                    <span style="display: inline;color: #878787;margin-left: 1.2em;">库存<span class="last_num" style="font-size: 16px;margin: 5px"><?php echo ($data["kc"]); ?></span>件</span>
                </div>
                <div style="clear: both"></div>

                <button type="button" class="btn add_pay_ok"  style="border-radius:0;background-color: #ffeded;margin-top: 40px;border: 1px solid #9B060F;width: 20%;color: #9B060F">立即购买</button>
                <button type="button" class="btn add_cars" style="border-radius:0;background-color: #9B060F;margin-top: 40px;border: 1px solid #9B060F;width: 20%;color: #fff" disabled>加入购物车</button>
            </div>
        </div>


        <div class="row" style="margin-top: 15px">
            <div class="col-md-2" style="padding: 0">
                <div class="panel panel-default">
                    <div class="panel-heading">人气推荐</div>
                    <div class="panel-body">
                        Panel content
                    </div>
                </div>
            </div>
            <div class="col-md-9" style="padding-right: 0">
                <div class="bs-example bs-example-tabs" data-example-id="togglable-tabs">
                    <ul id="myTabs" class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#s_info"  data-toggle="tab" role="tab"  aria-controls="s_info" aria-expanded="true">商品详情</a></li>
                        <li role="presentation"><a href="#s_talk" role="tab"  data-toggle="tab" aria-controls="s_talk">商品评价</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="s_info" >
                            <?php echo ($data["shop"]["shop_info"]); ?>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="s_talk" >

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
        <div class="pay_div_left">

        </div>
        <div class="shop_buy">
            <input type="hidden" value="" class="shop_info_buy">
            <button type="button" class="close buy_div_close" style="color: #fff" aria-label="Close"><span aria-hidden="true" >&times;</span></button>
            <h4>商品详情</h4>
            <div class="row">
                <div class="col-md-3" style="padding: 0">
                    <img class="pay_shop_pic" src="/Upload/images/iphone6s/thj1.png" width="80" height="80">
                </div>
                <div class="col-md-9" style="padding: 0">
                    <p class="pay_shop_name"></p>
                    <p style="color: #f0ad4e" class="pay_shop_type"></p>
                </div>
            </div>
            <div style="margin-top: 15px">
                <p><div class="dt">单价：</div><span class="pay_shop_price"></span></p>
                <div style="clear: both"></div>
                <p><div class="dt">数量：</div><span class="pay_shop_num"></span></p>
                <div style="clear: both"></div>
                <p><div class="dt">商品总价：</div><span class="pay_shop_total"></span></p>
                <div style="clear: both"></div>
                <!--<p><div class="dt">优惠：</div><span class="pay_shop_coupon">4900</span></p>-->
            </div>
            <div class="buys_address" style="border-top: 1px dashed #ddd;margin-top: 15px">
                <h4>收货地址</h4>
                <p>寄送至： </p>
                <div class="dowebok_address">

                </div>
            </div>
            <div style="height: 118px">

            </div>
            <div style="position: fixed;right: 0;bottom: 0;width: 400px;background-color: #003f98;">
                <div  style="border-top: 1px dashed #ddd;padding: 0 15px">
                    <h4>付款方式</h4>
                    <ul class="dowebok" style="padding: 15px 0;">
                        <li style="margin-right: 5px"><input type="radio" style="opacity: 0" name="pay_way" class="pay_way" value="<?php echo $this->encryption('支付宝'); ?>" checked data-labelauty="支付宝"></li>
                        <li style="margin-right: 5px"><input type="radio" style="opacity: 0" name="pay_way" class="pay_way" value="<?php echo $this->encryption('货到付款'); ?>"  data-labelauty="货到付款"></li>
                    </ul>
                </div>
                <div style="border-top: 1px dashed #ddd;padding: 15px;">
                    <div class="dt" style="font-size: 20px;">实际支付：<span style="font-size: 30px;" class="pay_shop_total"></span></div>
                    <div style="clear: both"></div>
                </div>
                <button type="button" class="btn btn-success btn-lg btn-block add_to_pay" style="border-radius: 0">立即支付</button>
            </div>
        </div>



<div class="fz_div">

    <!-- 背面内容 -->
    <div class="login_div reg_div" style="display: none">
        <button type="button" style="margin-bottom: 15px" onclick="$('.login_div').fadeOut(300);" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <div style="clear: both"></div>
        <div class="login_div_title">
            <h3>会员注册 <span style="color: #9B060F"><a href="javascript:void(0);" class="l_btn" >立即登录</a></span></h3>
            <div style="clear: both"></div>
        </div>
        <form class="reg_form" action="" method="post">
            <div class="login_div-group">
                <label >用户名</label>
                <input type="text" name="reg_username"  placeholder="请输入用户名">
            </div>
            <p class="reg_username_yz" style="color: #9B060F;height: 15px"></p>
            <div class="login_div-group">
                <label >密码</label>
                <input type="password" name="reg_password"  placeholder="请输入密码">
            </div>
            <p class="reg_password_yz" style="color: #9B060F;height: 15px"></p>
            <p class="top15 captcha">
                <input name="reg_verify" style="width: 50%;float: left;height: 47px;border: 1px solid #333;padding: 15px" placeholder="验证码" type="text">
                <img style="width: 50%;float: right;height: 47px" class="verify_img" height="" alt="验证码" src="<?php echo U('Home/Index/verify');?>"  title="点击刷新">
            <div style="clear: both"></div>
            </p>
            <button type="button" class="btn btn-danger my_btn reg">注册</button>
        </form>
    </div>

    <div class="login_div login_tu_div" >
        <button type="button" style="margin-bottom: 15px" onclick="$('.login_div').fadeOut(300);" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <div style="clear: both"></div>
        <div class="login_div_title">
            <h3>会员登陆 <span style="color: #9B060F"><a href="javascript:void(0);" class="l_btn">立即注册</a></span></h3>
            <div style="clear: both"></div>
        </div>
        <form action="<?php echo U('Home/index/login');?>" method="post">
            <div class="login_div-group">
                <label >用户名</label>
                <input type="text" name="login_username"  placeholder="请输入用户名">
            </div>
            <p class="login_username_yz" style="color: #9B060F;height: 15px"></p>
            <div class="login_div-group">
                <label >密码</label>
                <input type="password"  name="login_password" placeholder="请输入密码">
            </div>
            <p class="login_password_yz" style="color: #9B060F;height: 15px"></p>
            <p class="top15 captcha">
                <input name="login_verify" style="width: 50%;float: left;height: 47px;border: 1px solid #333;padding: 15px" placeholder="验证码" type="text">
                <img style="width: 50%;float: right;height: 47px" class="verify_img" height="" alt="验证码" src="<?php echo U('Home/Index/verify');?>"  title="点击刷新">
            <div style="clear: both"></div>
            </p>
            <button type="button" class="btn btn-danger my_btn my_login">登录</button>
        </form>
    </div>
</div>



    <div style="height: 500px"></div>
    
    <script src="/Public/Home/js/carousel.min.js" type="text/javascript"></script>

    <script type="text/javascript">
        $(function(){
            /* 商品轮播图（带缩略图的轮播效果） */
            $(".banner").thumbnailImg({
                large_elem: ".large_box",
                small_elem: ".small_list",
                left_btn: ".left_btn",
                right_btn: ".right_btn"
            });

            $('.shop_buy').niceScroll({
                cursorcolor: "#003f98",//#CC0071 光标颜色
                cursoropacitymax: 0, //改变不透明度非常光标处于活动状态（scrollabar“可见”状态），范围从1到0
                touchbehavior: false, //使光标拖动滚动像在台式电脑触摸设备
                cursorwidth: "5px", //像素光标的宽度
                cursorborder: "0", // 	游标边框css定义
                cursorborderradius: "5px",//以像素为光标边界半径
                autohidemode: true //是否隐藏滚动条
            });

            $(':input').labelauty();

            $(".num_add").click(function(){
                var num = $(".tb-text").val();
                var n_num  = num*1+1;
                var msx_num = $(".last_num").text();
                if(n_num*1 > msx_num*1){
                    toast_error("超过了库存");
                }else{
                    $(".tb-text").val(n_num);
                }

            });
            $(".tb-text").keyup(function(){
                var num = $(this).val();
                var max_num = $(".last_num").text();
                if(num*1 > max_num*1){
                    $(".tb-text").val(max_num);
                }
            });

            $(".num_sub").click(function(){
                var num = $(".tb-text").val();
                var n_num  = num*1-1;
                if(n_num*1 <= 0){
                    toast_error("最少为1");
                }else{
                    $(".tb-text").val(n_num);
                }
            });

            $(".shop_type").click(function () {
                var type_id = [];
                var $elements = $('.dowebok_radio');
                var len = $elements.length;
                for (i=1;i<=len;i++){
                    var id = $("input[name='shop_type_"+i+"']:checked").val();
                    if(id){
                        type_id.push(id);
                    }
                }
                if(type_id.length == len){
                    $(".shop_info_buy").val(type_id);
                    $.post("<?php echo U('Home/Shop/get_shop_type',array('id'=>$_GET['id']));?>",{type_id:type_id},function (data) {
                        $(".shop_price").text(data.price);
                        $(".last_num").text(data.shop_kc);

                        $(".small_list ul li").each(function () {
                            var src = $(this).children("img").attr("src");
                            if(src == data.img1){
                                $(this).click();
                            }
                        });
                    },"json")
                }
            });
            
            $(".add_pay_ok").click(function () {
                var num = $(".tb-text").val();
                var info = $(".shop_info_buy").val();
                var uid = "<?php echo $_SESSION['uid'] ?>";
                if(!uid){
                    toast_error("请先登录");
                    return;
                }
                if(info){
                    $.ajax({
                        url:"<?php echo U('Home/Shop/get_shop_buy_list',array('id'=>$_GET['id']));?>",
                        dataType:"json",
                        async:true,
                        data:{info:info,num:num},
                        type: "post",
                        beforeSend:function () {


                        },
                        success:function (data) {
//                            console.log(data);
                            if(data){
                                $(".pay_shop_pic").attr("src",data.pic);
                                $(".pay_shop_name").text(data.shop_name);
                                $(".pay_shop_type").text(data.att_info_name);
                                $(".pay_shop_price").text(data.price).attr("data-val",data.price_m);
                                $(".pay_shop_num").text(data.num).attr("data-val",data.num_m);
                                $(".pay_shop_total").text((data.num)*(data.price));

                                $(".pay_div_left").show();
                                $(".shop_buy").addClass('animated fadeInRight').fadeIn(300);
                                setTimeout(function(){
                                    $('.shop_buy').attr('class','shop_buy');
                                }, 1000);

                                $(".dowebok_address").children().remove();
                                var html = my_loading();
                                $(html).appendTo(".dowebok_address").fadeIn(300);
                                $.post("<?php echo U('Home/shop/get_address');?>",{},function (data) {
//                                    console.log(data);
                                    $(".loading_div").remove();
                                    $(".dowebok_address").append(data);
                                });
                            }
                        }
                    })
                }
            });
            
            $(".buy_div_close , .pay_div_left").click(function () {
                $(".pay_div_left").hide();
                $('.shop_buy').addClass('animated fadeOutRight').fadeOut(300);
                setTimeout(function(){
                    $('.shop_buy').attr('class','shop_buy');
                }, 1000);
            });

            $(document).on("click",".tj_address",function () {
                var sh_tel = $.trim($(".sh_tel").val());
                var my_reg = /^(((13[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/;
                if(my_reg.test(sh_tel)) {
                    $.post("<?php echo U('Home/Shop/add_address');?>",$(".form_address").serialize(),function(data){
                        if(data == 2){
                            toast_error('请填写必要字段');
                            return;
                        }else{
                            $(".dowebok_address").children().remove();
                            $(".modal-backdrop").remove();
                            var html = my_loading();
                            $(html).appendTo(".dowebok_address").fadeIn(300);

                            $.post("<?php echo U('Home/shop/get_address');?>",{},function (data) {
                                $(".loading_div").remove();
                                $(".dowebok_address").append(data);
                            });
                        }
                    },"json")
                }else{
                    toast_error('请填写正确的手机号');
                    return;
                }
            });

            $(".add_to_pay").click(function () {
                var shop_info = $(".shop_info_buy").val();
                var num = $(".pay_shop_num").attr("data-val");
                var pay_way = $("input[name='pay_way']:checked").val();
                var buy_address = $("input[name='buy_address']:checked").val();
                if(!pay_way){
                    toast_error("请选择付款方式");
                }else if(!buy_address){
                    toast_error("请选择收货地址");
                }else{
                    $.ajax({
                        url:"<?php echo U('Home/Shop/add_to_pay',array('id'=>$_GET['id']));?>",
                        dataType:"json",
                        data:{shop_info:shop_info,num:num,pay_way:pay_way,buy_address:buy_address},
                        type: "post",
                        beforeSend:function () {

                        },
                        success:function (data) {
//                            console.log(data);
                            if(data){
                                location.href = "http://127.0.0.1/Home/pay/pay_order/id/"+data;//location.href实现客户端页面的跳转
                            }
                        }
                    })
                }

            })

        });
    </script>


    <script type="text/javascript" src="/Public/my/js/jquery-labelauty.js"></script>
    <script type="text/javascript" src="/Public/my/js/jquery.nicescroll.js"></script>

    <script>
        $(function () {
            $(".verify_img").click(function () {
                var ver_url = $(this).attr("src");
                $(this).attr("src", ver_url+'?random='+Math.random());
            });
            $(".l_btn").click(function () {
                var _this =  $(this);
               $(this).parent().parent().parent().parent().addClass('animated flipOutY');
                setTimeout(function(){
                    _this.parent().parent().parent().parent().hide().removeClass('animated flipOutY');
                    _this.parent().parent().parent().parent().siblings().fadeIn(300);
                }, 600);
            });
            $("input[name = 'reg_username']").blur(function () {
                var name = $(this).val();
                if($.trim(name)){
                    $.ajax({
                        url:"<?php echo U('Home/Index/yz_username');?>",
                        dataType:"json",
                        async:true,
                        data:{name:name},
                        type: "post",
                        beforeSend:function () {

                        },
                        success:function (data) {
                            console.log(data);
                            if(data == 1){
                                $(".reg_username_yz").text("用户名已经存在");
                                reg_name_sta = 0;
                            }else{
                                $(".reg_username_yz").text("");
                                reg_name_sta = 1;
                            }
                        }
                    })
                }
            });

            $("input[name='reg_password']").blur(function () {
                var pass = $(this).val();
                if(($.trim(pass).length < 6 || $.trim(pass).length > 12) && $.trim(pass)){
                    $(".reg_password_yz").text("密码长度在6-12位之间");
                    reg_pass_sta = 0;
                }else{
                    $(".reg_password_yz").text("");
                    reg_pass_sta = 1;
                }
            });

            $(".reg").click(function () {
                var name = $("input[name = 'reg_username']").val();
                var pass = $("input[name = 'reg_password']").val();
                var ver =  $("input[name = 'reg_verify']").val();
                if(name && pass && ver && reg_name_sta == 1 && reg_pass_sta == 1){
                    $.ajax({
                        url:"<?php echo U('Home/index/reg');?>",
                        dataType:"json",
                        async:true,
                        data:{name:name,pass:pass,ver:ver},
                        type: "post",
                        beforeSend:function () {

                        },
                        success:function (data) {
                            if(data == 1){
                                location=location;
                            }else{
                                toast_error("验证码错误");
                                return;
                            }
                        }
                    })

                }else{
                    toast_warring("请填写完整");
                }
            });


            $(".my_login").click(function () {
                var name = $("input[name = 'login_username']").val();
                var pass = $("input[name = 'login_password']").val();
                var ver =  $("input[name = 'login_verify']").val();
                if(name && pass && ver){
                    $.ajax({
                        url:"<?php echo U('Home/index/login');?>",
                        dataType:"json",
                        async:true,
                        data:{name:name,pass:pass,ver:ver},
                        type: "post",
                        beforeSend:function () {

                        },
                        success:function (data) {
                            if(data == 1){
                                location=location;
                            }else if(data == 9){
                                toast_error("验证码错误");
                                return;
                            }else{
                                toast_error("帐号密码错误");
                                return;
                            }
                        }
                    })

                }else{
                    toast_warring("请填写完整");
                }
            })
        })
    </script>
    </body>
</html>