<?php
namespace Home\Controller;
use Think\Controller;
class FormController extends Controller{
	public function add(){
		$auth01 = new \Think\Auth();
		define('UID',is_login());
		$check= $auth01->check(MODULE_NAME.'/'.CONTROLLER_NAME.'/'.ACTION_NAME, UID);
			//dump($check);
            if(false==$check) {$this->error("你不是用户，请创建用户账户！");
			//$this->display();
			}     
	}
    public function insert(){
        $Form   =   D('think01form2');
        if($Form->create()) {
            $result =   $Form->add();
            if($result) {
                $this->success('数据添加成功！');
            }else{
                $this->error('数据添加错误！');
            }
        }else{
            $this->error($Form->getError());
        }
    }//public function insert(
	
	public function rea1d($id=0){
    $Data = M('think01form');	//M('Data'); // 实例化Data数据模型
        $this->data = $Data->select();
        $this->display();
 }

	//
	public function edit($id=0){
    $Form   =   M('think01form');
    $this->assign('vo',$Form->find($id));
    $this->display();
 } //public function edit($id=0
 
 public function update(){
    $Form   =   D('think01form');
    if($Form->create()) {
        $result =   $Form->save();
        if($result) {
            $this->success('操作成功！');
        }else{
            $this->error('写入错误！');
        }
    }else{
        $this->error($Form->getError());
    }
 }

	//
		//
	public function edit01tech($id=0){
		$auth01 = new \Think\Auth();
		define('UID',is_login());
		$check= $auth01->check(MODULE_NAME.'/'.CONTROLLER_NAME.'/'.ACTION_NAME, UID);
			//dump($check);
            if(false==$check) {$this->error("您不是技工,以技工身份登录,或注册技工才能接单哦!");
			//$this->display();
			}     
    $Form   =   M('think01form');
    $this->assign('vo',$Form->find($id));
    $this->display();
 } //public function edit($id=0
	
	//
	
	
	
 }//class FormController extends Controller
