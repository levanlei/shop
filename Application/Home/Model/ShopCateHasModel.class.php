<?php
namespace Home\Model;
use Think\Model\RelationModel;

class ShopCateHasModel extends RelationModel{
    protected $_link = array(
        'ShopAtt' => array(
            'mapping_type'  => self::HAS_MANY,
            'class_name'    => 'ShopAtt',
            'foreign_key'   => 'pid',
            'mapping_name'  => 'shop_att',
            'condition' => 'sta = 1',
        ),
    );
}