<?php
/**
* Yaf自动补全类(基于最新的3.0.7版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/05/20
*/

/**
*map路由
*/
namespace Yaf\Route;
final class Map implements \Yaf\Route_Interface
{
    /**
     * @var unknown $_ctl_router 
     * 表示路由结果是作为动作的路由结果，还是控制器的路由结果，默认的是动作路由结果.
     * @access protected
     */
    protected $_ctl_router    =    '';

    /**
     * @var unknown $_delimiter 
     * 
     * @access protected
     */
    protected $_delimiter;

    /**
     * 
     *构造方法
     * @example 
     * @param bool $controller_prefer 表示路由结果是作为动作的路由结果，还是控制器的路由结果，默认的是动作路由结果
     * @param string $delimiter  表示一个分隔符，如果设置了这个分隔符，那么在REQUEST_URI中，分隔符之前的作为路由信息载体，而之后的作为请求参数.
     * @return 
     */
    public function __construct(bool $controller_prefer = false, string $delimiter  = '')
    {
    
    }

    /**
     * 
     *路由请求
     * @example 
     * @param Yaf_Request_Abstract $request 请求对象
     * @return bool
     */
    public function route(Yaf_Request_Abstract $request): bool
    {
    
    }

    /**
     * 
     *组装请求
     * @example 
     * @param array $info 路径信息
     * @param array $query 查询字符串
     * @return string
     */
    public function assemble(Array $info, Array $query): string
    {
    
    }

}

