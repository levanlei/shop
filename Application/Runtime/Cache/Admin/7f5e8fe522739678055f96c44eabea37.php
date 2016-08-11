<?php if (!defined('THINK_PATH')) exit();?><button type="button" class="btn btn-info" onclick="$('.checked_tools').addClass('animated fadeInRight').fadeIn(300);
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
            <?php if(is_array($v)): foreach($v as $key=>$vv): $a = explode("-",$vv); ?>
                <span data-id="<?php echo ($a[1]); ?>"> <?php echo ($a[0]); ?> </span><?php endforeach; endif; ?>
        </div>
        <div class="col-md-1 kc_info">
            <input type="text" style="width: 50px">
        </div>
        <div class="col-md-1 price_info">
            <input type="text" style="width: 50px">
        </div>
        <div class="col-md-6 pic_info">
        </div>
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