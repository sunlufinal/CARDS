<?php
class CardModel extends Model {
    // 定义自动完成
    protected $_auto    =   array(
        array('upload_time','time',1,'function'),
        );
}
?>
