<?php
class FormAction extends Action{
    public function insert(){
        $Jump   =   D('Jump');
        if($Jump->create()) {
            $result =   $Jump->add();
            if($result) {
                $this->success('操作成功！');
            }else{
                $this->error('写入错误！');
            }
        }else{
            $this->error($Jump->getError());
        }
    }
}