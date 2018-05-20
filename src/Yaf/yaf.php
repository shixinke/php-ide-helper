<?php
/**
* Yaf自动补全类(基于最新的3.0.7版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/05/20
*/

/**
*高性能PHP框架YAF(yet another framework)
*/
/**
 * php.ini配置选项: 

 * 全局类库目录
 * yaf.library=

 * 是否在PATH_INFO模式下启用path_info对应控制器的方法
 * yaf.action_prefer=0

 * 类加载时路径是否小写
 * yaf.lowcase_path=0

 * 是否启用SPL的自动加载
 * yaf.use_spl_autoload=0

 * 跳转数限制
 * yaf.forward_limit=5

 * 类名称前缀
 * yaf.name_suffix=1

 * 类名称分隔符
 * yaf.name_separator=

 * 是否自动适配
 * yaf.st_compatible=0

 * 环境设置
 * yaf.environ=product

 * 是否启用命名空间
 * yaf.use_namespace=0

*/
/**
yaf的版本号
*/
define('YAF_VERSION', '3.0.7');
/**
目前的环境(用于提取配置)
*/
define('YAF_ENVIRON', 'product');
/**
启动失败错误
*/
define('YAF_ERR_STARTUP_FAILED', 512);
/**
路由错误
*/
define('YAF_ERR_ROUTE_FAILED', 513);
/**
路由分发错误
*/
define('YAF_ERR_DISPATCH_FAILED', 514);
/**
类自动加载错误
*/
define('YAF_ERR_AUTOLOAD_FAILED', 520);
/**
模块未找到错误
*/
define('YAF_ERR_NOTFOUND_MODULE', 515);
/**
控制器未找到错误
*/
define('YAF_ERR_NOTFOUND_CONTROLLER', 516);
/**
操作方法未找到错误
*/
define('YAF_ERR_NOTFOUND_ACTION', 517);
/**
视图未找到错误
*/
define('YAF_ERR_NOTFOUND_VIEW', 518);
/**
调用错误
*/
define('YAF_ERR_CALL_FAILED', 519);
/**
类型错误
*/
define('YAF_ERR_TYPE_ERROR', 521);
