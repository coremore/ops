<?php
class FormModel extends Model {
    // 定义自动验证
    protected $_validate    =   array(
        array('name','require','标题必须'),
    );
    // 定义自动完成
    protected $_auto    =   array(
        array('createtime','time',1,'function'),
    );
}