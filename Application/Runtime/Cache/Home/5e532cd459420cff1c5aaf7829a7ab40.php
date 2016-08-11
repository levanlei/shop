<?php if (!defined('THINK_PATH')) exit();?>
<?php if(($address) ): ?><ul class="dowebok dowebok_address">
        <?php if(is_array($address)): foreach($address as $key=>$v): ?><li style="margin-right: 5px">
                <input type="radio" style="opacity: 0"  name="buy_address" class="buy_address" value="<?php echo $this->encryption($v['id']); ?>"  data-labelauty="<?php echo ($v["address"]); ?> <?php echo ($v["consignee_name"]); ?> <?php echo ($v["consignee_tel"]); ?>" <?php if(($v["sta"]) == "1"): ?>checked<?php endif; ?>></li><?php endforeach; endif; ?>
    </ul>
    <button type="button" class="btn btn-warning" style="border-radius: 0" data-toggle="modal" data-target="#myModal_address">添加收货地址</button>
    <?php else: ?>
    <button type="button" class="btn btn-warning" style="border-radius: 0"  data-toggle="modal" data-target="#myModal_address">暂无收货地址，点击添加</button><?php endif; ?>


<!-- Modal -->
<div class="modal fade" id="myModal_address" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #003f98;color: #fff">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">添加收货地址（全部必填）</h4>
            </div>
            <div class="modal-body">
                <form class="form_address">
                    <div class="panel-body">
                        <div class="controls" style="width: 100%;">
                            <p style="margin-top: 5px">
                                <select name="province" style="width: 31%;font-size: 14px"></select>
                                <select name="city" style="width: 31%;font-size: 14px"></select>
                                <select name="area" style="width: 31%;font-size: 14px"></select>
                            </p>
                        </div>
                        <div class="controls" style="width: 100%">
                            <input type="text" class="floatLabel xx_adress" value="" name="xx_adress" >
                            <label ><span style="font-size: 14px">在这里输入详细地址</span></label>
                        </div>
                        <div class="controls" style="width: 45%;float: left">
                            <input type="text" class="floatLabel sh_tel" value="" name="sh_tel" >
                            <label><span style="font-size: 14px">联系电话</span></label>
                        </div>
                        <div class="controls" style="width: 45%;float: right">
                            <input type="text" class="floatLabel sh_people" value="" name="sh_people" >
                            <label><span style="font-size: 14px">联系人</span></label>
                        </div>
                        <div style="clear: both"></div>
                        <li style="width: 100%"><input type="checkbox" class="ck_sta"  name="address_sta"  value="1" data-labelauty="设为默认地址"></li>
                    </div>
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default model_close" data-dismiss="modal">取消</button>
                <button type="button" class="btn btn-primary tj_address" style="background-color: #003f98;border: 1px solid #003f98;">保存</button>
            </div>
        </div>
    </div>
</div>

    <script src="/Public/my/js/dq.js"></script>

    <script>
        $(function(){
            $('#myModal_address input,.dowebok_address input').labelauty();
            function floatLabel(inputType) {
                $(inputType).each(function () {
                    var $this = $(this);
                    if ($this.val() != null) {
                        $this.next().addClass('active');
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


            new PCAS("province", "city", "area", "", "", "");
            $("select").change(function () {
                var p = $(".p select").val();
                var c = $(".c select").val();
                var a = $(".a select").val();
                $(".w_dq").val(p + "/" + c + "/" + a);
            });

            $(document).on("click",".my_address li input",function(){
                var id = $(this).attr("add-id");
                $.post("",{id:id},function(data){
                    console.log(data);
                },"json")
            })
        })
    </script>