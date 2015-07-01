<?php
// +----------------------------------------------------------------------
// | OneThink [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2015 http://www.MomcHomeS.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: phpluse <369338130@vip.qq.com> <http://www.zjzit.cn>
// +----------------------------------------------------------------------

namespace Admin\Controller;
use User\Api\UserApi as UserApi;

/**
 * 后台首页控制器
 * @author phpluse <369338130@vip.qq.com>
 */
class IndexController extends AdminController {

    /**
     * 后台首页
     * @author phpluse <369338130@vip.qq.com>
     */
    public function index(){
        if(UID){
            $this->meta_title = '管理首页';
            $this->display();
        } else {
            $this->redirect('Public/login');
        }
    }

}
