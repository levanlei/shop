<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="keywords" content="admin, dashboard, bootstrap, template, flat, modern, theme, responsive, fluid, retina, backend, html5, css, css3">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="#" type="image/png">

    <title>
        后台管理-商品管理
    </title>
    <!--common-->
    <link href="/Public/bootstrap/css/styles.css" rel="stylesheet">
    <link href="/Public/Admin/css/style.css" rel="stylesheet">
    <link href="/Public/Admin/css/style-responsive.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/Public//bootstrap/css/animate.min.css">
    <link rel="stylesheet" href="/Public/my/css/win10loading.css">
    <link rel="stylesheet" href="/Public/my/css/jquery-labelauty.css">
    <link rel="stylesheet" href="/Public/bootstrap/css/jquery.toast.min.css">

    
    <link rel="stylesheet" href="/Public/Admin/css/add_shop.css"/>
    <script type="text/javascript" charset="utf-8" src="/Public/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/Public/ueditor/ueditor.all.min.js"> </script>
    <style>
        .row div{
            padding: 0;
        }
    </style>

</head>
<body class="sticky-header">
<section>
    <!-- left side start-->
    <div class="left-side sticky-left-side">
        <!--logo and iconic logo start-->
        <div class="logo">
            <a href="index.html"><img src="/Public/Admin/images/logo.png" alt=""></a>
        </div>
        <div class="logo-icon text-center">
            <a href="index.html"><img src="/Public/Admin/images/logo_icon.png" alt=""></a>
        </div>
        <!--logo and iconic logo end-->
        <div class="left-side-inner">
            <!-- visible to small devices only -->
            <div class="visible-xs hidden-sm hidden-md hidden-lg">
                <div class="media logged-user">
                    <img alt="" src="/Public/Admin/images/photos/user-avatar.png" class="media-object">
                    <div class="media-body">
                        <h4><a href="#">John Doe</a></h4>
                        <span>"Hello There..."</span>
                    </div>
                </div>

                <h5 class="left-nav-title">Account Information</h5>
                <ul class="nav nav-pills nav-stacked custom-nav">
                    <li><a href="#"><i class="fa fa-user"></i> <span>Profile</span></a></li>
                    <li><a href="#"><i class="fa fa-cog"></i> <span>Settings</span></a></li>
                    <li><a href="#"><i class="fa fa-sign-out"></i> <span>Sign Out</span></a></li>
                </ul>
            </div>
            <!--sidebar nav start-->
            <ul class="nav nav-pills nav-stacked custom-nav">
                <li class="<?php echo ($data["a_index"]); ?>"><a href="index.html"><i class="fa fa-home"></i> <span>主页</span></a></li>
                <li class="menu-list <?php echo ($data["a_shop"]); ?>"><a href=""><i class="fa fa-laptop"></i> <span>商品管理</span></a>
                    <ul class="sub-menu-list">
                        <li class="<?php echo ($data["a_list"]); ?>"><a href="<?php echo U('Shop/shop_list');?>">商品列表</a></li>
                        <li class="<?php echo ($data["a_add_shop"]); ?>"><a href="<?php echo U('Index/add_shop');?>">添加商品</a></li>
                        <li class="<?php echo ($data["a_shop_sh"]); ?>"><a href="leftmenu_collapsed_view.html">审核商品</a></li>
                        <li class="<?php echo ($data["a_shop_hsz"]); ?>"><a href="horizontal_menu.html">回收站</a></li>
                    </ul>
                </li>
                <li class="menu-list <?php echo ($data["a_cate"]); ?>"><a href=""><i class="fa fa-book"></i> <span>分类管理</span></a>
                    <ul class="sub-menu-list">
                        <li class="<?php echo ($data["a_shop_brand"]); ?>"><a href="<?php echo U('Cate/shop_brand');?>">商品品牌</a></li>
                        <li class="<?php echo ($data["a_shop_cate"]); ?>"><a href="<?php echo U('Cate/shop_cate');?>">商品分类</a></li>
                        <li><a href="tabs-accordions.html"> Tabs & Accordions</a></li>
                        <li><a href="typography.html"> Typography</a></li>
                        <li><a href="slider.html"> Slider</a></li>
                        <li><a href="panels.html"> Panels</a></li>
                    </ul>
                </li>
                <li class="<?php echo ($data["a_pic"]); ?>"><a href="<?php echo U('Pic/index');?>"><i class="fa fa-bar-chart-o"></i> <span>图片管理</span></a>
                </li>
                <li class="menu-list"><a href=""><i class="fa fa-cogs"></i> <span>Components</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="grids.html"> Grids</a></li>
                        <li><a href="gallery.html"> Media Gallery</a></li>
                        <li><a href="calendar.html"> Calendar</a></li>
                        <li><a href="tree_view.html"> Tree View</a></li>
                        <li><a href="nestable.html"> Nestable</a></li>

                    </ul>
                </li>

                <li><a href="fontawesome.html"><i class="fa fa-bullhorn"></i> <span>Fontawesome</span></a></li>

                <li class="menu-list"><a href=""><i class="fa fa-envelope"></i> <span>Mail</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="mail.html"> Inbox</a></li>
                        <li><a href="mail_compose.html"> Compose Mail</a></li>
                        <li><a href="mail_view.html"> View Mail</a></li>
                    </ul>
                </li>

                <li class="menu-list"><a href=""><i class="fa fa-tasks"></i> <span>Forms</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="form_layouts.html"> Form Layouts</a></li>
                        <li><a href="form_advanced_components.html"> Advanced Components</a></li>
                        <li><a href="form_wizard.html"> Form Wizards</a></li>
                        <li><a href="form_validation.html"> Form Validation</a></li>
                        <li><a href="editors.html"> Editors</a></li>
                        <li><a href="inline_editors.html"> Inline Editors</a></li>
                        <li><a href="pickers.html"> Pickers</a></li>
                        <li><a href="dropzone.html"> Dropzone</a></li>
                        <li><a href="http://www.weidea.net"> More</a></li>
                    </ul>
                </li>

                <li class="menu-list"><a href="#"><i class="fa fa-th-list"></i> <span>Data Tables</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="basic_table.html"> Basic Table</a></li>
                        <li><a href="dynamic_table.html"> Advanced Table</a></li>
                        <li><a href="responsive_table.html"> Responsive Table</a></li>
                        <li><a href="editable_table.html"> Edit Table</a></li>
                    </ul>
                </li>

                <li class="menu-list"><a href="#"><i class="fa fa-map-marker"></i> <span>Maps</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="google_map.html"> Google Map</a></li>
                        <li><a href="vector_map.html"> Vector Map</a></li>
                    </ul>
                </li>
                <li class="menu-list"><a href=""><i class="fa fa-file-text"></i> <span>Extra Pages</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="profile.html"> Profile</a></li>
                        <li><a href="invoice.html"> Invoice</a></li>
                        <li><a href="pricing_table.html"> Pricing Table</a></li>
                        <li><a href="timeline.html"> Timeline</a></li>
                        <li><a href="blog_list.html"> Blog List</a></li>
                        <li><a href="blog_details.html"> Blog Details</a></li>
                        <li><a href="directory.html"> Directory </a></li>
                        <li><a href="chat.html"> Chat </a></li>
                        <li><a href="404.html"> 404 Error</a></li>
                        <li><a href="500.html"> 500 Error</a></li>
                        <li><a href="registration.html"> Registration Page</a></li>
                        <li><a href="lock_screen.html"> Lockscreen </a></li>
                    </ul>
                </li>
                <li><a href="login.html"><i class="fa fa-sign-in"></i> <span>Login Page</span></a></li>

            </ul>
            <!--sidebar nav end-->

        </div>
    </div>
    <!-- left side end-->

    <!-- main content start-->
    <div class="main-content" style="background-color: #fff">

        <!-- header section start-->
        <div class="header-section">
            <!--toggle button start-->
            <a class="toggle-btn"><i class="fa fa-bars"></i></a>
            <!--toggle button end-->

            <!--search start-->
            <form class="searchform" action="index.html" method="post">
                <input type="text" class="form-control" name="keyword" placeholder="Search here..." />
            </form>
            <!--search end-->
            <!--notification menu start -->
            <div class="menu-right">
                <ul class="notification-menu">
                    <li>
                        <a href="#" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                            <i class="fa fa-tasks"></i>
                            <span class="badge">8</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-head pull-right">
                            <h5 class="title">You have 8 pending task</h5>
                            <ul class="dropdown-list user-list">
                                <li class="new">
                                    <a href="#">
                                        <div class="task-info">
                                            <div>Database update</div>
                                        </div>
                                        <div class="progress progress-striped">
                                            <div style="width: 40%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-warning">
                                                <span class="">40%</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="new">
                                    <a href="#">
                                        <div class="task-info">
                                            <div>Dashboard done</div>
                                        </div>
                                        <div class="progress progress-striped">
                                            <div style="width: 90%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="90" role="progressbar" class="progress-bar progress-bar-success">
                                                <span class="">90%</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="task-info">
                                            <div>Web Development</div>
                                        </div>
                                        <div class="progress progress-striped">
                                            <div style="width: 66%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="66" role="progressbar" class="progress-bar progress-bar-info">
                                                <span class="">66% </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="task-info">
                                            <div>Mobile App</div>
                                        </div>
                                        <div class="progress progress-striped">
                                            <div style="width: 33%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="33" role="progressbar" class="progress-bar progress-bar-danger">
                                                <span class="">33% </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="task-info">
                                            <div>Issues fixed</div>
                                        </div>
                                        <div class="progress progress-striped">
                                            <div style="width: 80%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" role="progressbar" class="progress-bar">
                                                <span class="">80% </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="new"><a href="">See All Pending Task</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge">5</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-head pull-right">
                            <h5 class="title">You have 5 Mails </h5>
                            <ul class="dropdown-list normal-list">
                                <li class="new">
                                    <a href="">
                                        <span class="thumb"><img src="/Public/Admin/images/photos/user1.png" alt="" /></span>
                                        <span class="desc">
                                          <span class="name">John Doe <span class="badge badge-success">new</span></span>
                                          <span class="msg">Lorem ipsum dolor sit amet...</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="thumb"><img src="/Public/Admin/images/photos/user2.png" alt="" /></span>
                                        <span class="desc">
                                          <span class="name">Jonathan Smith</span>
                                          <span class="msg">Lorem ipsum dolor sit amet...</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="thumb"><img src="/Public/Admin/images/photos/user3.png" alt="" /></span>
                                        <span class="desc">
                                          <span class="name">Jane Doe</span>
                                          <span class="msg">Lorem ipsum dolor sit amet...</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="thumb"><img src="/Public/Admin/images/photos/user4.png" alt="" /></span>
                                        <span class="desc">
                                          <span class="name">Mark Henry</span>
                                          <span class="msg">Lorem ipsum dolor sit amet...</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="thumb"><img src="/Public/Admin/images/photos/user5.png" alt="" /></span>
                                        <span class="desc">
                                          <span class="name">Jim Doe</span>
                                          <span class="msg">Lorem ipsum dolor sit amet...</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="new"><a href="">Read All Mails</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="badge">4</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-head pull-right">
                            <h5 class="title">Notifications</h5>
                            <ul class="dropdown-list normal-list">
                                <li class="new">
                                    <a href="">
                                        <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                        <span class="name">Server #1 overloaded.  </span>
                                        <em class="small">34 mins</em>
                                    </a>
                                </li>
                                <li class="new">
                                    <a href="">
                                        <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                        <span class="name">Server #3 overloaded.  </span>
                                        <em class="small">1 hrs</em>
                                    </a>
                                </li>
                                <li class="new">
                                    <a href="">
                                        <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                        <span class="name">Server #5 overloaded.  </span>
                                        <em class="small">4 hrs</em>
                                    </a>
                                </li>
                                <li class="new">
                                    <a href="">
                                        <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                        <span class="name">Server #31 overloaded.  </span>
                                        <em class="small">4 hrs</em>
                                    </a>
                                </li>
                                <li class="new"><a href="">See All Notifications</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            <img src="/Public/Admin/images/photos/user-avatar.png" alt="" />
                            John Doe
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                            <li><a href="#"><i class="fa fa-user"></i>  Profile</a></li>
                            <li><a href="#"><i class="fa fa-cog"></i>  Settings</a></li>
                            <li><a href="#"><i class="fa fa-sign-out"></i> Log Out</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
            <!--notification menu end -->

        </div>
        <!-- header section end-->

        <!-- page heading start-->
        <div class="page-heading">
            <h3>
                商品管理
            </h3>
            <ul class="breadcrumb">
                <li>
                    <a href="#">
                        商品管理
                    </a>
                </li>
                <li class="active">
                    编辑商品
                </li>
            </ul>
        </div>
        <!-- page heading end-->

        <!--body wrapper start-->
        <div class="wrapper">

            
    <form class="shop_info">

        <div style="padding: 0 50px;width: 80%">
            <div class="controls">
                <input type="text" class="floatLabel" name="shop_name" value="<?php echo ($shop_info["shop_name"]); ?>" style="padding: 15px">
                <label style="color: #9B060F;font-size: 12px">1、商品名称</label>
            </div>


            <!---->
            <div class="controls">
                <div>
                    <input type="text" class="floatLabel" style="width: 0;height: 0;border: none">
                    <label style="color: #9B060F">4、填写库存以及图片</label>

                </div>
            </div>
            <div class="input_shop_some">

                <button type="button" class="btn btn-info" onclick="$('.checked_tools').addClass('animated fadeInRight').fadeIn(300);
              setTimeout(function(){
                 $('.checked_tools').attr('class','checked_tools');
           }, 1000);
           ">打开多选操作列表</button>
                <div style="clear: both"></div>
                <div class="row">
                    <div class="col-md-1">
                        <h4>多选</h4>
                    </div>
                    <div class="col-md-3">
                        <h4>商品属性</h4>
                    </div>
                    <div class="col-md-1">
                        <h4>库存</h4>
                    </div>
                    <div class="col-md-1">
                        <h4>价格</h4>

                    </div>
                    <div class="col-md-6">
                        <h4>图片</h4>
                    </div>
                </div>


                <?php if(is_array($b)): foreach($b as $key=>$v): ?><div class="row shop_type_info" style="padding:15px 0;border-bottom: 1px dashed #ddd">
                        <div class="col-md-1 checkbox_info">
                            <input type="checkbox" name="shop_some" value="">
                        </div>
                        <div class="col-md-3 name_info">
                            <?php $b_id = []; ?>
                            <?php if(is_array($v)): foreach($v as $key=>$vv): $a = explode("-",$vv); array_push($b_id,$a[1]); ?>
                                <span data-id="<?php echo ($a[1]); ?>"> <?php echo ($a[0]); ?> </span><?php endforeach; endif; ?>
                            <?php $b_end_id = implode(",",$b_id); $k = M(); $type_info = $k->query("select * from lee_shops_type where shop_type = '$b_end_id'"); foreach($type_info as $k=>$v){ $type_info_end = $v; } ?>
                        </div>
                        <div class="col-md-1 kc_info">
                            <input type="text" style="width: 50px" value="<?php echo ($type_info_end["shop_kc"]); ?>">
                        </div>
                        <div class="col-md-2 price_info">
                            <input type="text" style="width: 100px" value="<?php echo ($type_info_end["price"]); ?>">
                        </div>
                        <div class="col-md-5 pic_info">
                            <img src="<?php echo ($type_info_end["img1"]); ?>"  style="width: 50px" alt="">
                            <img src="<?php echo ($type_info_end["img2"]); ?>" style="width: 50px" alt="">
                            <img src="<?php echo ($type_info_end["img3"]); ?>"  style="width: 50px" alt="">
                        </div>
                        <input type="hidden" class="type_id" value="<?php echo ($type_info_end["id"]); ?>">
                    </div><?php endforeach; endif; ?>

                <div class="checked_tools">
                    <button type="button" class="btn btn-danger" onclick="$('.checked_tools').addClass('animated fadeOutRight').fadeOut(300);
                        setTimeout(function(){
                            $('.checked_tools').attr('class','checked_tools');
                        }, 1000);
               " style="width: 100%;border-radius: 0;margin-bottom: 5px;">退出操作</button>
                    <p class="bg-warning" style="padding: 15px">你可以，在这里批量处理库存，图片，通过输入关键字，快速选中您需要处理的商品</p>
                    <button type="button" class="btn btn-danger CheckedRev" style="margin-bottom: 15px">全部选择</button>
                    <div>
                        <div class="form-group todo-entry">
                            <input type="text" placeholder="请输入关键字" class="form-control search_key" style="width: 100%">
                        </div>
                        <button class="btn btn-primary pull-right search_ok" type="button">查找
                        </button>
                    </div>
                    <div style="padding-top: 15px">
                        <div style="clear: both"></div>
                        <h4 style="color: #fff">设置库存</h4>
                        <div>
                            <div class="form-group todo-entry">
                                <input type="text" placeholder="请输入库存" class="form-control" data-name="shop_batch_kc" style="width: 100%">
                            </div>
                            <button class="btn btn-primary pull-right batch_ok" type="button">确认</button>
                        </div>

                        <div style="clear: both"></div>
                        <h4 style="color: #fff">设置价格</h4>
                        <div>
                            <div class="form-group todo-entry">
                                <input type="text" placeholder="请输入价格" class="form-control" data-name="shop_batch_price" style="width: 100%">
                            </div>
                            <button class="btn btn-primary pull-right batch_ok" type="button">确认</button>
                        </div>

                        <div style="clear: both"></div>
                        <h4 style="color: #fff">上传图片</h4>

                        <div class="img_div">
                            <div style="padding: 5px 0">
                                <input type="text" id="thumb1" class="span5" name="thumb" style="width: 50%">
                                <input type="button"  value="上 传" data-id="1"  class="btn btn-success upload_pic" />
                                <img src="" id="img_show1" width="50px" height="50px" />
                                <button class="btn btn-danger pull-right del_this_pic" type="button">-</button>
                            </div>



                        </div>
                        <button class="btn btn-primary pull-right pic_add_div" type="button">+</button>
                        <button type="button" class="btn btn-danger upload_pic_ok">确认图片上传</button>
                    </div>
                </div>

            </div>

            <!--//填写商品info-->
            <div class="controls">
                <input type="text" class="floatLabel" style="width: 0;height: 0;border: none">
                <label style="color: #9B060F">4、商品详情</label>
                <script id="editor" type="text/plain" style="width:100%;height:500px;"><?php echo ($shop_info["shop_info"]); ?></script>
            </div>
            <button type="button" class="btn btn-success btn-lg btn-block add_ok" style="width: 100%;border-radius: 0;margin-top: 15px">提交</button>
        </div>
        </div>
        <input type="hidden" name="shops_id" class="shops_id" value="<?php echo ($_GET['id']); ?>">
    </form>





        </div>
        <!--body wrapper end-->

        <!--footer section start-->
        <!--<footer>-->
            <!--<a target="_blank" href="http://127.0.0.1">127.0.0.1商城</a>-->
        <!--</footer>-->
        <!--footer section end-->
    </div>
    <!-- main content end-->
</section>

<!-- Placed js at the end of the document so the pages load faster -->
<script src="/Public/Admin/js/jquery-1.10.2.min.js"></script>
<script src="/Public/Admin/js/bootstrap.min.js"></script>
<script src="/Public/Admin/js/jquery.nicescroll.js"></script>
<script src="/Public/Admin/js/scripts.js"></script>
<script type="text/javascript" src="/Public/my/js/jquery-labelauty.js"></script>
<script type="text/javascript" src="/Public/bootstrap/js/my.js"></script>
<script type="text/javascript" src="/Public/bootstrap/js/jquery.toast.min.js"></script>

    <script src="/Public/ckfinder/ckfinder.js"></script>
    <script type="text/javascript">
        //初始化 图片上传 工具
        function BrowseServer(thumb, img_show) {
            var finder = new CKFinder();

            //当选中图片时执行的函数
            finder.selectActionFunction = function(fileUrl){
                $("#"+thumb).val(fileUrl);
                $("#"+img_show).attr("src",""+fileUrl+"");
            };

            finder.popup();//调用窗口
        }
    </script>
    <script>
        $(function () {
            function floatLabel(inputType) {
                $(inputType).each(function () {
                    var $this = $(this);
                    if ($this.val() != null) {
                        $this.next().addClass("active");
                    }
                    $this.focus(function () {
                        $this.next().addClass('active');
                    });
                    $this.blur(function () {
                        if ($this.val() === '' || $this.val() === 'blank') {
                            $this.next().removeClass();
                        }
                    });
                });
            }
            floatLabel('.floatLabel');

            var ue = UE.getEditor('editor');


            $(document).on("click",".search_ok",function () {
                var sta = 0;
                $("input[name='shop_some']").prop("checked",false);
                var key = $.trim($(".search_key").val());
                $(".name_info span").each(function(){
                    var name = $.trim($(this).text());
                    var _this = $(this);
                    if(name == key){
                        sta = 1;
                        _this.parent().siblings(".checkbox_info").children("input").prop("checked",true);
                    }
                });
                if(sta == 1){
                    toast_success("选中成功");
                }else{
                    toast_error("选中失败，请保证输入了关键字并且与表中的相同");
                }
            });

            $(document).on("click",".CheckedRev",function () {
                var text = $(this).text();
                if(text == "全部选择"){
                    $(this).text("取消全选");
                    $('[name=shop_some]:checkbox').prop('checked', true);
                }else{
                    $(this).text("全部选择");
                    $('[name=shop_some]:checkbox').prop('checked', false);
                }
            });

            $(document).on("click",".batch_ok",function () {
                var batch_v = $(this).siblings().children().val();
                var batch_lx = $(this).siblings().children().attr("data-name");
                if(batch_lx == "shop_batch_kc"){
                    $("input[name='shop_some']:checked").parent().siblings(".kc_info").children("input").val(batch_v);
                }else{
                    $("input[name='shop_some']:checked").parent().siblings(".price_info").children("input").val(batch_v);
                }
            });

            var num = 2;
            $(document).on("click",".pic_add_div",function () {
                if(num > 3){
                    toast_warring("最多添加三张图片");
                    return;
                }
                var html = '<div style="padding: 5px 0;display: none">'+
                        '<input type="text" id="thumb'+num+'" class="span5" name="thumb" style="width: 50%">'+
                        '<input type="button"  value="上 传" data-id="'+num+'" class="btn btn-success upload_pic" />'+
                        '<img src="" id="img_show'+num+'" width="50px" height="50px" />'+
                        '<button class="btn btn-danger pull-right del_this_pic" type="button">-</button>'+
                        '</div>';
                num ++ ;
                $(html).appendTo(".img_div").fadeIn(300);

            });

            $(document).on("click",".upload_pic",function () {
                var num = $(this).attr("data-id");
                BrowseServer('thumb'+num+'','img_show'+num+'');
            });

            $(document).on("click",".del_this_pic",function () {
                $(this).parent().remove();
                num--;
            });

            $(document).on("click",".upload_pic_ok",function () {
                $("input[name='shop_some']:checked").parent().siblings(".pic_info").children().remove();
                $(".img_div div .span5").each(function(){
                    var pic_img = $(this).val();
                    var html = '<img src="'+pic_img+'" style="width: 50px;height: 50px;">';
                    $("input[name='shop_some']:checked").parent().siblings(".pic_info").append(html);
                });
            });

            //提交
            var info_array = [];
            var info_num = 0;
            $(".add_ok").click(function () {
                $.ajax({
                    url:"<?php echo U('Admin/shop/edit_shop_info');?>",
                    dataType:"json",
                    async:true,
                    data:$(".shop_info").serialize(),
                    type: "post",
                    beforeSend:function () {

                    },
                    success:function (data) {
                        if(data){
                            $(".input_shop_some .shop_type_info").each(function(){
                                info_num ++ ;
                                $(this).children(".name_info").children("span").each(function () {
                                    var id = $(this).attr("data-id");
                                    info_array.push(info_num+'-属性'+'-'+id);
                                });
                                $(this).children(".kc_info").children("input").each(function () {
                                    var kc = $(this).val();
                                    info_array.push(info_num+'-库存'+'-'+kc);
                                });
                                $(this).children(".price_info").children("input").each(function () {
                                    var price = $(this).val();
                                    info_array.push(info_num+'-价格'+'-'+price);
                                });
                                $(this).children(".pic_info").children("img").each(function () {
                                    var pic = $(this).attr("src");
                                    info_array.push(info_num+'-图片'+'-'+pic);
                                });
                                $(this).children(".type_id").each(function () {
                                    var type_id = $(this).val();
                                    info_array.push(info_num+'-ID'+'-'+type_id);
                                });
                                return;
                            });

                            var pid = $(".shops_id").val();
                            console.log(pid);

                            $.ajax({
                                url:"<?php echo U('Admin/shop/edit_shop_all_type');?>",
                                dataType:"json",
                                async:true,
                                data:{info_array:info_array,pid:pid},
                                type: "post",
                                beforeSend:function () {

                                },
                                success:function (data) {
                                    if(data == 1){
                                        toast_success("修改成功");
                                    }
                                }
                            });
                        }
                    }
                });



            });



        })
    </script>


</body>
</html>