<?php
// +----------------------------------------------------------------------
// | OneThink [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2015 http://www.MomcHomeS.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: phpluse <369338130@vip.qq.com> <http://www.zjzit.cn>
// +----------------------------------------------------------------------

/**
 * UCenter客户端配置文件
 * 注意：该配置文件请使用常量方式定义
 */

define('UC_APP_ID', 1); //应用ID
define('UC_API_TYPE', 'Model'); //可选值 Model / Service
define('UC_AUTH_KEY', 'aJZx3l"2UdX+.Dp#`,(THbY8LGy<Swv-E5=zut)c'); //加密KEY
define('UC_DB_DSN', 'mysqli://root:aw3@127.0.0.1:3306/one1plus0613'); // 数据库连接，使用Model方式调用API必须配置此项

//define('UC_DB_DSN', 'mysqli://root:aw3@127.0.0.1:3306/one1plus0612'); // 数据库连接，使用Model方式调用API必须配置此项
//define('UC_DB_DSN', 'mysqli://root:aw3@127.0.0.1:3306/oneplus0610'); // 数据库连接，使用Model方式调用API必须配置此项
define('UC_TABLE_PREFIX', 'one1plus1_'); // 数据表前缀，使用Model方式调用API必须配置此项
