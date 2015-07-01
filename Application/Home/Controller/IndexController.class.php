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
//
		$Data = M('think01form'); // 实例化Data数据模型
        $this->data = $Data->select();
        $this->display();

//
                 
        $this->display();
    } //public function index(
	
	    public function inde01x(){

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
                 
        $this->display();
    } //public function index(
//
	    public function inde1find0trouble1call(){

        $category = D('Category')->getTree();
        $lists    = D('Document')->lists(null);

 //       $this->assign('category',$category);//栏目
 //       $this->assign('lists',$lists);//列表
 //       $this->assign('page',D('Document')->page);//分页
//
		$Data = M('think01form'); // 实例化Data数据模型
        $this->data = $Data->select();
 //       $this->display();
			$this->assign('page',D('Document')->page);//分页
//
		$auth01 = new \Think\Auth();
		define('UID',is_login());
		$check= $auth01->check(MODULE_NAME.'/'.CONTROLLER_NAME.'/'.ACTION_NAME, UID);
			//dump($check);
            if(false==$check) {echo "您不是技工,以技工身份登录,或注册技工才能接单哦!";}     
        $this->display();
    } //public function index(

//
}