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
 * yaf.use_namespace=1

*/
/**

*/
define('YAF\VERSION', '3.0.7');
/**

*/
define('YAF\ENVIRON', 'product');
/**

*/
define('YAF\ERR\STARTUP_FAILED', 512);
/**

*/
define('YAF\ERR\ROUTE_FAILED', 513);
/**

*/
define('YAF\ERR\DISPATCH_FAILED', 514);
/**

*/
define('YAF\ERR\AUTOLOAD_FAILED', 520);
/**

*/
define('YAF\ERR\NOTFOUND\MODULE', 515);
/**

*/
define('YAF\ERR\NOTFOUND\CONTROLLER', 516);
/**

*/
define('YAF\ERR\NOTFOUND\ACTION', 517);
/**

*/
define('YAF\ERR\NOTFOUND\VIEW', 518);
/**

*/
define('YAF\ERR\CALL_FAILED', 519);
/**

*/
define('YAF\ERR\TYPE_ERROR', 521);
