<?php
// +----------------------------------------------------------------------
// | OneThink [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2015 http://www.MomcHomeS.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: phpluse <369338130@vip.qq.com> <http://www.zjzit.cn>
// +----------------------------------------------------------------------

namespace Home\Controller;
use OT\DataDictionary;
/**
 * 前台首页控制器
 * 主要获取首页聚合数据
 */
class IndexController extends HomeController {

	//系统首页
    public function index(){

        $category = D('Category')->getTree();
        $lists    = D('Document')->lists(null);

        $this->assign('category',$category);//栏目
        $this->assign('lists',$lists);//列表
        $this->assign('page',D('Document')->page);//分页
		/*$Auth = new \Think\Auth();
		define('UID',is_login());
		$check= $auth01->check(MODULE_NAME.'/'.CONTROLLER_NAME.'/'.ACTION_NAME, UID);*/
		
		$Data = M('think01form2'); // 实例化Data数据模型
        $this->data = $Data->select();
        $this->display();


//
                 
//        $this->display();
    } //public function index(
	
	    public function inde01x(){

        $category = D('Category')->getTree();
        $lists    = D('Document')->lists(null);

        $this->assign('category',$category);//栏目
        $this->assign('lists',$lists);//列表
        $this->assign('page',D('Document')->page);//分页
//
		$Data = M('think01form2'); // 实例化Data数据模型
        $this->data = $Data->select();
        $this->display();

//
                 
        $this->display();
    } //public function index(
//

		//
	public function inde01edit02tech01bak($id=0){
		//------------
		$category = D('Category')->getTree();
        $lists    = D('Document')->lists(null);

 //       $this->assign('category',$category);//栏目
 //       $this->assign('lists',$lists);//列表
 //       $this->assign('page',D('Document')->page);//分页
//
		$Data = M('think01form2'); // 实例化Data数据模型
        $this->data = $Data->select();
 //       $this->display();
			$this->assign('page',D('Document')->page);//分页
//
		
		
		//=====
		$auth01 = new \Think\Auth();
		define('UID',is_login());
		$check= $auth01->check(MODULE_NAME.'/'.CONTROLLER_NAME.'/'.ACTION_NAME, UID);
			//dump($check);
            if(false==$check) 
			{$this->error("您不是技工,以技工身份登录,或注册技工才能Index(form)Controller.class.php接单Form哦!");
			//$this->display();
			}     
    $Form   =   M('think01form2');
    $this->assign('vo',$Form->find($id));
    $this->display();
 } //public function edit($id=0


	//
	    public function inde01edit02tech($id=0){

        $category = D('Category')->getTree();
        $lists    = D('Document')->lists(null);

 //       $this->assign('category',$category);//栏目
 //       $this->assign('lists',$lists);//列表
 //       $this->assign('page',D('Document')->page);//分页
//
//		$Data = M('think01form'); // 实例化Data数据模型
//        $this->data = $Data->select();
 //       $this->display();
//			$this->assign('page',D('Document')->page);//分页
//
		$auth01 = new \Think\Auth();
		define('UID',is_login());
		$check= $auth01->check(MODULE_NAME.'/'.CONTROLLER_NAME.'/'.ACTION_NAME, UID);
			//dump($check);
            if(false==$check) {echo "您不是技工,以技工身份登录,或注册技工才能接IndexController.class.php单7b4c哦!";}     
			
			$Form   =   M('think01form2');
			$this->assign('vo',$Form->find($id));
        $this->display();
    } //public function inde1find0trouble1call( 
	
	
	
	//
	    public function inde1find0trouble1call(){

        $category = D('Category')->getTree();
        $lists    = D('Document')->lists(null);

 //       $this->assign('category',$category);//栏目
 //       $this->assign('lists',$lists);//列表
 //       $this->assign('page',D('Document')->page);//分页
		$auth01 = new \Think\Auth();
		define('UID',is_login());
		$check= $auth01->check(MODULE_NAME.'/'.CONTROLLER_NAME.'/'.ACTION_NAME, UID);
		
		
 //       $this->display();
		if($check == true){
			$Data = M('think01form2'); // 实例化Data数据模型
        $this->data = $Data->select();
			$this->assign('page',D('Document')->page);//分页
		}
		
			//dump($check);
            if(false==$check) {echo "您不是技工,以技工身份登录,或注册技工才能接IndexController.class.php单74哦!";}     
        $this->display();
    } //public function inde1find0trouble1call(
	
	
//==============================================
	    public function inde1call0trouble1(){

        $category = D('Category')->getTree();
        $lists    = D('Document')->lists(null);

        $this->assign('category',$category);//栏目
        $this->assign('lists',$lists);//列表
        $this->assign('page',D('Document')->page);//分页
//
		$Data = M('think01form'); // 实例化Data数据模型
        $this->data = $Data->select();
        $this->display();

//
                 
//        $this->display();
    } //public function index(
	
	    public function inser01inde1(){
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
//


 public function inde01edit03tech02update(){
    $Form   =   D('think01form2');
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





}