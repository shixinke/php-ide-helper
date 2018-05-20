<?php
/**
* Yar自动补全类(基于最新的2.0.4版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/05/20
*/

/**
*轻量级、支持并发的PHP的RPC框架
*/
/**
 * php.ini配置选项: 

 * 使用的打包工具
 * yar.packager=php

 * 数据传输使用的方式
 * yar.transport=curl

 * 是否启用debug模式
 * yar.debug=Off

 * 是否暴露yar的信息
 * yar.expose_info=On

 * 连接超时时间
 * yar.connect_timeout=1000

 * 请求超时时间
 * yar.timeout=5000

 * 
 * yar.content_type=application/octet-stream

 * 是否允许持久化
 * yar.allow_persistent=0

*/
/**
yar的版本
*/
define('YAR_VERSION', '2.0.4');
/**
打包选项
*/
define('YAR_OPT_PACKAGER', 1);
/**
持久化选项
*/
define('YAR_OPT_PERSISTENT', 2);
/**
请求超时选项
*/
define('YAR_OPT_TIMEOUT', 4);
/**
连接超时选项
*/
define('YAR_OPT_CONNECT_TIMEOUT', 8);
/**

*/
define('YAR_OPT_HEADER', 16);
/**
HTTP客户端协议
*/
define('YAR_CLIENT_PROTOCOL_HTTP', 1);
/**
TCP客户端协议
*/
define('YAR_CLIENT_PROTOCOL_TCP', 2);
/**
unix客户端协议
*/
define('YAR_CLIENT_PROTOCOL_UNIX', 4);
/**
PHP打包
*/
define('YAR_PACKAGER_PHP', 'PHP');
/**
JSON打包
*/
define('YAR_PACKAGER_JSON', 'JSON');
/**
成功(没有错误)
*/
define('YAR_ERR_OKEY', 0);
/**
输出错误
*/
define('YAR_ERR_OUTPUT', 8);
/**
传输错误
*/
define('YAR_ERR_TRANSPORT', 16);
/**
请求错误
*/
define('YAR_ERR_REQUEST', 4);
/**
协议错误
*/
define('YAR_ERR_PROTOCOL', 2);
/**
打包错误
*/
define('YAR_ERR_PACKAGER', 1);
/**
异常错误
*/
define('YAR_ERR_EXCEPTION', 64);
