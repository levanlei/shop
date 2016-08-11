<?php
namespace Home\Model;
use Think\Model\RelationModel;

class ShopsModel extends RelationModel{
    protected $_link = array(
        'ShopsType' => array(
            'mapping_type'  => self::HAS_MANY,
            'class_name'    => 'ShopsType',
            'foreign_key'   => 'pid',
            'mapping_name'  => 'shops_type',
        ),
    );
}