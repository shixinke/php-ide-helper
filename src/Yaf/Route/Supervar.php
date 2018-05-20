<?php
/**
* Yaf自动补全类(基于最新的3.0.7版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/05/20
*/

/**
*变量路由
*/
namespace Yaf\Route;
final class Supervar implements \Yaf\Route_Interface
{
    /**
     * @var string $_var_name 
     * 全局路由变量名
     * @access protected
     */
    protected $_var_name;

    /**
     * 
     *构造方法
     * @example 
     * @param string $var 全局路由变量名
     * @return 
     */
    public function __construct(string $var)
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

