<?php
// 本类由系统自动生成，仅供测试用途
class TestAction extends Action {
    public function test(){
    	$Data=M("test");
        $data['b']='111001';
        $Data->add($data);
    }
}