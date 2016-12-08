<?php
/**
* Yar自动补全类(基于最新的2.0.1版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2016/12/08
*/

/**
*
*/
/**
YAR的版本
*/
define('YAR_VERSION', '2.0.1');
/**
YAR打包方式
*/
define('YAR_OPT_PACKAGER', 1);
/**
是否持久化连接
*/
define('YAR_OPT_PERSISTENT', 2);
/**
超时时间
*/
define('YAR_OPT_TIMEOUT', 4);
/**
连接超时时间
*/
define('YAR_OPT_CONNECT_TIMEOUT', 8);
/**
HTTP协议
*/
define('YAR_CLIENT_PROTOCOL_HTTP', 1);
/**
TCP协议
*/
define('YAR_CLIENT_PROTOCOL_TCP', 2);
/**
UNIX协议
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
YAR未出错
*/
define('YAR_ERR_OKEY', 0);
/**
YAR输出错误
*/
define('YAR_ERR_OUTPUT', 8);
/**
YAR传输错误
*/
define('YAR_ERR_TRANSPORT', 16);
/**
YAR请求错误
*/
define('YAR_ERR_REQUEST', 4);
/**
YAR协议错误
*/
define('YAR_ERR_PROTOCOL', 2);
/**
YAR打包错误
*/
define('YAR_ERR_PACKAGER', 1);
/**
YAR异常错误
*/
define('YAR_ERR_EXCEPTION', 64);
