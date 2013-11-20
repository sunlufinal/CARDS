<?php
// 本类由系统自动生成，仅供测试用途
class UserAction extends Action {

    public function add(){
        //test
        $data['MAC']=0;

    	$User=M('user');
        if($User->create($data)){
            echo "aaa";
            $result=$User->add();
            echo $User->getLastSql();
            if($result){
                $this->success("写入成功");
            }else{
                $this->error("写入失败");
            }
        }else{
            echo "bbb";
            $this->error($User->getError());
        }
    }

}
