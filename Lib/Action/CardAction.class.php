<?php
// 本类由系统自动生成，仅供测试用途
class CardAction extends Action {
    public function index(){
    	$this->display();
    }
    public function add(){
    	$Card=M('card');
        $data['title']="title1";
        $data['content']='content1';
        $data['upload_user_id']=1;
        if($Card->create($data)){
            $result=$Card->add();
            echo $Card->getLastSql();
            if($result){
                $this->success("写入成功");
            }else{
                $this->error("写入失败");
            }
        }else{
            $this->error($Card->getError());
        }
        // $Card=M('test');
        // $data['num']=3;
        // $data['ch']="ni ma bi";
        // $Card->add($data);
        // echo gettype(date("Y-m-dH:i:s"));
    }
}