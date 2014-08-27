<?php
class IndexAction extends Action {
    public function index(){
        $Model = new Model();
        $a = $Model->table('think_filts Filts,think_jump Jump')->field('Filts.jumpid,Filts.id,Filts.web,Filts.version,Filts.owns,Jump.name,Jump.id,Jump.site')->where('Filts.jumpid=Jump.id')->select();
        #$Filts = M('Filts');
        $this->filts = $a;
        $this->display();
    }
    public function webadd(){
        $Filts   =   D('Filts');
        if($Filts->create()) {
            $result =   $Filts->add();
            if($result) {
                $this->success('操作成功！');
            }else{
                $this->error('写入错误！');
            }
        }else{
            $this->error($Filts->getError());
        }
    }
    public function jumpadd(){
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
    public function web(){
        $Model = new Model();
        $a = $Model->table('think_filts Filts,think_jump Jump')->field('Filts.jumpid,Filts.id,Filts.web,Filts.version,Filts.owns,Jump.name,Jump.id,Jump.site')->where('Filts.jumpid=Jump.id')->select();
        $id = $_GET['id'];
        $this->a = $a;
        $Filts = M('Filts');
        $this->filts = $Filts->select();
        $Jump = M('Jump');
        $this->jump = $Jump->select();

        $b = $this->filtupdate = $b;
        print_r($b);
        $this->id = $id;
        $this->display();
    }
    public function jump($id=0){
        $id = $_GET["id"];
        $Jump = M('Jump');
        $this->jump = $Jump->select();
        $jumpupdate = $Jump->select($id);
        #if($jumpupdate) {
           $this->jumpupdate =  $jumpupdate;
        #}else{
        #    $this->error('数据错误');
        #}
        $this->id = $id;
        $this->display();
    }
    public function jumpupdate(){
        $Jump   =   D('Jump');
        if($Jump->create()) {
            $result =   $Jump->save();
            if($result) {
                $this->success('操作成功！');
            }else{
                $this->error('写入错误！');
            }
        }else{
            $this->error($Jump->getError());
        }
    }
    public  function jumpdelete(){
        $id = $_GET['id'];
        $Jump = M('Jump');
        $result = $Jump->delete($id);
        if($result){
            $this->success('删除成功！');
        }
        else{
            $this->error('删除失败！');
        }
    }
    public function webupdate(){
        $Filts   =   D('Filts');
        if($Filts->create()) {
            $result =   $Filts->save();
            if($result) {
                $this->success('操作成功！');
            }else{
                $this->error('写入错误！');
            }
        }else{
            $this->error($Filts->getError());
        }
    }
    public  function filtsdelete(){
        $id = $_GET['id'];
        $Filts = M('Filts');
        $result = $Filts->delete($id);
        if($result){
            $this->success('删除成功！');
        }
        else{
            $this->error('删除失败！');
        }
    }
    public function ispayadd(){
        $Ispay   =   D('Ispay');
        if($Ispay->create()) {
            $result =   $Ispay->add();
            if($result) {
                $this->success('操作成功！');
            }else{
                $this->error('写入错误！');
            }
        }else{
            $this->error($Ispay->getError());
        }
    }
    public function ispay(){
        $Filts = M('Filts');
        $this->filts = $Filts->select();
        $this->display();
    }
}
