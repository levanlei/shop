<?php
namespace Admin\Model;
use Think\Model\RelationModel;

class ShopThreeModel extends RelationModel{
    protected $_link = array(
        'ShopBrand' => array(
            'mapping_type'  => self::HAS_MANY,
            'class_name'    => 'ShopBrand',
            'foreign_key'   => 'pid',
            'mapping_name'  => 'shop_brand_info',
            'condition' => 'sta = 1',
        ),
    );
}