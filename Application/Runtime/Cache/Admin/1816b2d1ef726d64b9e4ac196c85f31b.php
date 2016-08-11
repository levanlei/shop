<?php if (!defined('THINK_PATH')) exit();?><div class="shop_cate_list" style="display: none">
    <span style="font-size: 18px;font-weight: 600;line-height: 41px">商品型号：<span style="font-size: 14px;color: #9B060F">（鼠标点击属性就能编辑该属性）</span></span>
    <div style="width: 50%">
        <div class="form-group todo-entry" style="width: 80%">
            <input type="text" placeholder="添加新的商品属性" class="form-control" style="width: 100%">
        </div>
        <button class="btn btn-primary pull-right add_new_shop_type" type="button">+</button>
    </div>
    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th style="width: 10%">
                商品型号
            </th>
            <th style="width: 75%">
                商品属性
            </th>
            <th style="width: 25%">
                操作
            </th>
        </tr>
        </thead>
        <tbody>
        <!--一级 查询商品型号 list-->
        <?php if(is_array($list)): foreach($list as $key=>$v): ?><tr>
                <td><?php echo ($v["name"]); ?></td>
                <td style="padding: 0 15px">

                    <!--2级 查询商品拥有什么属性 has-->
                    <?php if(is_array($v["has"])): foreach($v["has"] as $key=>$vv): ?><div class="row row_div">
                            <div class="col-md-9">
                                <div style="float: left"><?php echo ($vv["name"]); ?> ：</div>

                                <!--3级 查询商品每种属性的值 att-->
                                <?php if(is_array($vv["att"])): foreach($vv["att"] as $key=>$vvv): ?><div style="float: left;padding: 5px 10px;border: 1px solid #ddd;margin-right: 5px;position: relative">
                                        <button type="button" class="close del_att" data-id="<?php echo ($vvv["id"]); ?>" aria-label="Close" style="position: absolute;right: 2px;top: 2px"><span aria-hidden="true">&times;</span></button>
                                        <div style="padding: 5px 10px" contenteditable="true" class="edit_att_name" data-id="<?php echo ($vvv["id"]); ?>">
                                            <?php echo ($vvv["name"]); ?>
                                        </div>
                                    </div><?php endforeach; endif; ?>

                                <button class="btn btn-danger pull-right del_this_type" type="button" title="删除该属性" data-id="<?php echo ($vv["id"]); ?>">-</button>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group todo-entry">
                                    <input type="text" placeholder="请输入<?php echo ($vv["name"]); ?>" class="form-control" style="width: 100%">
                                </div>
                                <button class="btn btn-primary pull-right add_att" type="button" data-id="<?php echo ($vv["id"]); ?>">+</button>
                            </div>
                        </div><?php endforeach; endif; ?>
                </td>
                <td>
                    <div >
                        <div class="form-group todo-entry" style="width: 80%">
                            <input type="text" placeholder="请输入类型、如颜色、容量、版本" class="form-control" style="width: 100%">
                        </div>
                        <button class="btn btn-primary pull-right add_new_type" type="button" data-id="<?php echo ($v["id"]); ?>">+</button>
                    </div>
                    <br>
                    <button type="button" class="btn btn-danger btn-sm del_this_all" data-id="<?php echo ($v["id"]); ?>">删除该型号</button>
                </td>
            </tr><?php endforeach; endif; ?>
        </tbody>
    </table>
</div>