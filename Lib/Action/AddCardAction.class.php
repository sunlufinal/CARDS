<?php
// 本类由系统自动生成，仅供测试用途
class AddCardAction extends Action {
    public function index(){
    	$this->display();
    }
    public function add(){
    	// $Card=M('card');
     //    if($Card->create()){
     //        $data['format']="none";
     //        $data['size']=11;
     //        $data['num_of_words']=112;
     //        $data['title']="steel man";
     //        $data['content']="that's all folks";
     //        $data['upload_user_id']=1;
     //        $data['upload_time']="NOW()";
     //        $result=$Card->add();
     //        if($result){
     //            $this->success("写入成功");
     //        }else{
     //            $this->error("写入失败");
     //        }
     //    }else{
     //        $this->error($Card->getError());
     //    }
        $Card=M('test');
        $data['num']=3;
        $data['ch']="ni ma bi";
        $Card->add($data);
    }
}