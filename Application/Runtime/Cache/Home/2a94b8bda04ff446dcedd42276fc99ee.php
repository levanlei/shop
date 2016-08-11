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
        <title>商城</title>
        
    <link href="/Public/Home/lunbo/css/flickerplate.css"  type="text/css" rel="stylesheet">
    <link href="/Public/Home/css/index_main.css"  type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="/Public/Home/time/css/demo.css" type="text/css" media="screen"/>
    <script src="/Public/Home/lunbo/js/flickerplate.min.js" type="text/javascript"></script>
    <script src="/Public/Home/lunbo/js/modernizr-custom-v2.7.1.min.js" type="text/javascript"></script>
    <script src="/Public/Home/time/js/script.js"></script>

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

    
    <!--导航 轮播-->
    <div class="header_three">
        <div class="header_three_title">
            <div class="header_three_title_all">
                全部商品
            </div>
            <div class="header_three_title_fl">
                <ul>
                    <li><a href="">服装城</a></li>
                    <li><a href="">电器城</a></li>
                    <li><a href="">团购</a></li>
                </ul>
            </div>
            <div style="clear: both"></div>
        </div>
    </div>
    <div class="header_three_title_tool">
        <div class="header_three_title_tool_left_menu">
            <ul>
                <?php if(is_array($data["one"])): foreach($data["one"] as $key=>$v): ?><li data-index="<?php echo ($v["id"]); ?>"><?php echo ($v["name"]); ?> <span> > </span></li>
                    <div class="header_three_title_tool_left_div tool_div_<?php echo ($v["id"]); ?>">
                    <?php if(is_array($data["two"])): foreach($data["two"] as $key=>$vv): if($vv['pid'] == $v['id']){ ?>
                            <div style="padding-bottom: 15px">
                                <div class="header_three_title_tool_left_div_left" style="color: #555">
                                    <?php echo ($vv["name"]); ?> <span style="font-weight: normal"> > </span>
                                </div>
                                <div class="header_three_title_tool_left_div_right">
                                    <ul>
                                        <?php if(is_array($data["thr"])): foreach($data["thr"] as $key=>$vvv): if($vvv['pid'] == $vv['id']){ $id = $this->encryption($vvv['id']); ?>
                                            <li><a href="<?php echo U('Home/Shop/shop_list',array( 'id' => $id));?>"><?php echo ($vvv["name"]); ?></a></li>
                                            <?php } endforeach; endif; ?>
                                    </ul>
                                </div>
                                <div style="clear: both"></div>
                            </div>
                        <?php } endforeach; endif; ?>
                        <div style="clear: both"></div>
                    </div><?php endforeach; endif; ?>
            </ul>
        </div>





        <!--轮播-->
        <div class="flicker-example" data-block-text="false">
            <ul>
                <li data-background="//img13.360buyimg.com/da/jfs/t2599/249/3745404826/201932/e8783418/5799e3cbNe1d4dee3.jpg">
                    <!--<div class="flick-title">Flickerplate Is Working</div>-->
                    <!--<div class="flick-sub-text">Heaven forbid this package you downloaded is broken. That wouldn't be embarrassing at all.</div>-->
                </li>

                <li data-background="//img10.360buyimg.com/da/jfs/t2863/41/3798069029/290755/ed56604d/579b17a5Ne09938ca.jpg">
                </li>

                <li data-background="//img10.360buyimg.com/da/jfs/t2623/166/3795372603/89561/58852d23/579b0356Nf7e0eac1.jpg">
                </li>
            </ul>
        </div>
        <!--轮播over-->
        <!--快报-->
        <div class="read_quick">
            <div class="read_quick_div">
                <div class="read_quick_title">
                    <span>127快报</span>
                    <span style="float: right;font-size: 12px">更多 ></span>
                    <ul>
                        <li><a href=""><span>[特惠]</span>闪购清仓大促满199减100</a></li>
                        <li><a href=""><span>[公告]</span>华北东北区因强降雨配送延迟 </a></li>
                        <li><a href=""><span>[特惠]</span>闪购清仓大促满199减100</a></li>
                        <li><a href=""><span>[公告]</span>华北东北区因强降雨配送延迟 </a></li>
                        <li><a href=""><span>[特惠]</span>闪购清仓大促满199减100</a></li>
                    </ul>
                </div>
                <div class="bp_div">
                    <ul>
                        <li data-id="1" class="bp_div_no_active bp_div_active"><a href="">话费</a></li>
                        <li data-id="2" class="bp_div_no_active"><a href="">机票</a></li>
                        <li data-id="3" class="bp_div_no_active"><a href="">电影票</a></li>
                        <li data-id="4" class="bp_div_no_active"><a href="">游戏</a></li>
                        <div style="clear: both"></div>
                    </ul>
                </div>
                <div class="bp_info">
                    <div class="bp_info_1">
                       <p>号码 <input type="text"></p>
                       面值 <select name="hf_val" id="">
                       <option value="100" selected>100元</option>
                       <option value="50">50元</option>
                       <option value="20">20元</option>
                       <option value="10">10元</option>
                    </select>
                    </div>
                    <div class="bp_info_2">
                        机票
                    </div>
                    <div class="bp_info_3">
                        电影票
                    </div>
                    <div class="bp_info_4">
                        游戏
                    </div>
                </div>
                <div class="bp_gg">
                    <a href="">
                        <img src="//img11.360buyimg.com/da/jfs/t2647/323/3736131294/23334/d2ef25ff/57997a19N9db89f9f.jpg" alt="" width="250" height="75">
                    </a>
                </div>
            </div>
        </div>
        <!--快报 over-->
        <div style="clear: both"></div>
    </div>
    <!--导航 轮播 结束-->

    <!--今日推荐-->
    <div class="toady_recommend">
        <div class="toady_recommend_left">
            <div class="toady_recommend_left_n">

            </div>
            <span style="color: #555;font-size: 16px">今日推荐</span>
        </div>
        <div class="toady_recommend_right">
            <a class="toady_recommend_an_left"  href="javascrpt:void(0);"> < </a>
           <div class="toady_recommend_right_lb">
               <div class="toady_recommend_left_div">
                   1
               </div>
               <div class="toady_recommend_left_div">
                   2
               </div>
               <div class="toady_recommend_left_div">
                   3
               </div>
               <div class="toady_recommend_left_div">
                   4
               </div>
               <div class="toady_recommend_left_div">
                   5
               </div>
               <div class="toady_recommend_left_div">
                   6
               </div>
               <div class="toady_recommend_left_div">
                   7
               </div>
               <div class="toady_recommend_left_div">
                   8
               </div>
               <div class="toady_recommend_left_div">
                   9
               </div>
               <div class="toady_recommend_left_div">
                   10
               </div>
               <div class="toady_recommend_left_div">
                   11
               </div>
               <div class="toady_recommend_left_div">
                   12
               </div>
           </div>
            <a class="toady_recommend_an_right" href="javascrpt:void(0);"> > </a>
        </div>
    </div>
    <!--今日推荐 over-->
    <!--猜你喜欢-->
    <div class="you_like">
        <div class="you_like_title">
            <h2>猜你喜欢</h2>
            <div style="float: right;line-height: 30px">
                <span>换一批 </span><span class="glyphicon glyphicon-repeat" aria-hidden="true"></span>
            </div>
            <div style="clear: both"></div>
        </div>
        <div style="clear: both"></div>
        <div class="you_like_shop">
            <a href="">
                <div class="you_like_shop_div">
                    <img src="//img11.360buyimg.com/n1/s130x130_jfs/t2119/229/780441585/131700/737964b5/562e071cNd5281854.jpg" alt="">
                    <div>
                        Apple iPad Air 2 平板电脑 9.7英寸（16G WLAN版/A8X 芯片/Retina显示屏/Touch ID技术 MH0W2CH）金色
                    </div>
                    <div class="you_like_shop_price"><i>¥ </i>2888.00</div>
                </div>
            </a>
            <a href="">
                <div class="you_like_shop_div">
                    <img src="//img13.360buyimg.com/n1/s130x130_jfs/t2158/275/1115377524/647696/6c177b0/56792777N23d7cda0.png" alt="">
                    <div>
                        Apple iPad mini 4 平板电脑 7.9英寸（128G WLAN版/A8芯片/Retina显示屏/Touch ID技术 MK9Q2CH）金色
                    </div>
                    <div class="you_like_shop_price"><i>¥ </i>2888.00</div>

                </div>
            </a>
            <a href="">
                <div class="you_like_shop_div">
                    <img src="//img13.360buyimg.com/n1/s130x130_jfs/t2929/227/1931005220/393279/304559cf/5795a1fdNf60743fb.jpg" alt="">
                    <div>
                        【三只松鼠_小贱山楂系列组合674g】小贱山楂片小贱山楂条小贱果丹皮
                    </div>
                    <div class="you_like_shop_price"><i>¥ </i>2888.00</div>

                </div>
            </a>
            <a href="">
                <div class="you_like_shop_div">
                    <img src="//img13.360buyimg.com/n1/s130x130_jfs/t2626/71/2577658687/195091/3a32c151/576b9db7N03c04248.jpg" alt="">
                    <div>
                        暴风TV 超体电视40X 40英寸X战警 金属机身8G闪存平板智能液晶电视机(玫瑰金 暴风会员合约版)
                    </div>
                    <div class="you_like_shop_price"><i>¥ </i>2888.00</div>

                </div>
            </a>
            <a href="">
                <div class="you_like_shop_div">
                    <img src="//img12.360buyimg.com/n1/s130x130_jfs/t2854/169/1441517033/298651/1f2f8ff/573eacadN3ab2c690.jpg" alt="">
                    <div>
                        TCL D49A561U 49英寸 真4K超高清内置WIFI安卓智能LED液晶电视机（黑色）
                    </div>
                    <div class="you_like_shop_price"><i>¥ </i>2888.00</div>

                </div>
            </a>
            <div style="clear: both"></div>
        </div>
    </div>
    <!--猜你喜欢 over-->

    <!--商品 1F 2F 3F-->
    <div class="shop_clothes">
        <div class="shop_clothes_top">
            <div class="shop_clothes_title">
                <h2><i>1F</i>服装鞋包</h2>
            </div>
            <div class="shop_clothes_tab">
                <ul>
                    <li class="shop_clothes_tab_active"><a href="">男装</a></li>
                    <li><a href="">女装</a></li>
                    <li><a href="">鞋靴</a></li>
                    <li><a href="">箱包</a></li>
                    <li><a href="">内衣配饰</a></li>
                    <li><a href="">珠宝首饰</a></li>
                    <li><a href="">奢侈礼品</a></li>
                    <li><a href="">奢华腕表</a></li>
                </ul>
            </div>
            <div style="clear: both"></div>
        </div>
        <div class="shop_clothes_div">
            <div class="shop_clothes_div_left">
                <div class="shop_clothes_div_left_banner">
                    <a href="">
                        <img src="//img12.360buyimg.com/da/jfs/t2824/148/3827608966/23039/fc21e28e/579a1c2eN28ff6da4.jpg" alt="">
                    </a>
                </div>
            </div>
            <div style="clear: both"></div>
        </div>
    </div>
    <!--商品 1F 2F 3F over-->


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
    
    <script>
        $(function(){
            $('.flicker-example').flicker({
                arrows: true,
                arrows_constraint: false,
                auto_flick: true,
                auto_flick_delay: 5,
                block_text: true,
                dot_navigation: true,
                dot_alignment: 'center',
                flick_animation: 'transition-slide',
                flick_position: 1,
                inner_width: false,
                theme: 'light'
            });

            $(".header_three_title_tool_left_menu ul li").hover(function () {
                menu_index = $(this).attr("data-index");
                $(this).toggleClass("header_three_title_tool_left_menu_hover");
                $(".tool_div_"+menu_index).toggle();
            });
            $(".header_three_title_tool_left_div").hover(function () {
                $(".header_three_title_tool_left_menu ul li").eq(menu_index - 1).toggleClass("header_three_title_tool_left_menu_hover");
                $(".tool_div_"+menu_index).toggle();
            });
            $(".bp_div ul li").hover(function () {
                var index_id = $(this).attr("data-id");
                $(".bp_info_"+index_id).show().siblings().hide();
                $(this).addClass("bp_div_active").siblings().removeClass("bp_div_active");
            });
            $(".toady_recommend_right a").hover(function () {
                $(this).css("opacity","1");
            },function () {
                $(this).css("opacity","0.3");
            });
            var toady_recommend_an_click_num = 0;
            $(".toady_recommend_an_left").click(function () {
                if(!$(".toady_recommend_right_lb").is(":animated")) {
                    if(toady_recommend_an_click_num == 0){
                        $(".toady_recommend_right_lb").animate({left:"-=2058.4px"}, 300);
                        toady_recommend_an_click_num = 2;

                    }else{
                        $(".toady_recommend_right_lb").animate({left:"+=1029.2px"}, 300);
                        toady_recommend_an_click_num--;
                    }
                }

            });
            $(".toady_recommend_an_right").click(function () {
                if(!$(".toady_recommend_right_lb").is(":animated")) {
                    if(toady_recommend_an_click_num == 2){
                        $(".toady_recommend_right_lb").animate({left:"+=2058.4px"}, 300);
                        toady_recommend_an_click_num = 0;
                    }else{
                        $(".toady_recommend_right_lb").animate({left:"-=1029.2px"}, 300);
                        toady_recommend_an_click_num++;
                    }
                }
            });
            $(".you_like_shop_div").hover(function () {
                if(!$(this).children("img").is(":animated")) {
                    $(this).children("img").animate({left:"10px"}, 300);
                }
            },function () {
                $(this).children("img").animate({left:"-10px"}, 300);
            });
            $(".shop_clothes_tab ul li").hover(function () {
                $(this).addClass("shop_clothes_tab_active").siblings().removeClass("shop_clothes_tab_active");
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