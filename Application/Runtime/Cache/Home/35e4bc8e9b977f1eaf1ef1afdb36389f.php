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

    
        <div style="width: 1240px;margin: 0 auto">
            <h2>支付成功</h2>
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