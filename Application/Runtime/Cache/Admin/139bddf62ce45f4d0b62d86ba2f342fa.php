<?php if (!defined('THINK_PATH')) exit();?><table class="table table-hover">
    <thead>
    <tr>
        <th style="width: 50%">商品名称</th>
        <th style="width: 50%">操作</th>
    </tr>
    </thead>
    <tbody>
    <?php if(is_array($info)): foreach($info as $key=>$v): ?><tr>
            <td><?php echo ($v["shop_name"]); ?></td>
            <td>
                <a href="<?php echo U('Admin/shop/edit_shop',array('id'=>$v['id']));?>" type="button" class="btn btn-primary btn-sm">编辑</a>
                <a href="<?php echo U('Home/Shop/info/',array('id'=>$this->encryption($v['id'])));?>" target="_blank" type="button" class="btn btn-success btn-sm">预览</a>
                <button type="button" class="btn btn-danger btn-sm del_this_shop" data-id="<?php echo ($v["id"]); ?>">删除</button>
            </td>
        </tr><?php endforeach; endif; ?>

    </tbody>
</table>