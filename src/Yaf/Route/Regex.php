<?php
/**
* Yaf自动补全类(基于最新的3.0.7版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/05/20
*/

/**
*yaf正则路由
*/
namespace Yaf\Route;
final class Regex implements \Yaf\Route_Interface
{
    /**
     * @var array $_route 
     * 匹配模式（正则表达式）
     * @access protected
     */
    protected $_route    =    array();

    /**
     * @var array $_default 
     * 路由信息
     * @access protected
     */
    protected $_default    =    array();

    /**
     * @var array $_maps 
     * 模式分组的映射关系
     * @access protected
     */
    protected $_maps    =    array();

    /**
     * @var array $_verify 
     * 
     * @access protected
     */
    protected $_verify    =    array();

    /**
     * @var string $_reverse 
     * 
     * @access protected
     */
    protected $_reverse;

    /**
     * 
     *构造方法
     * @example 
     * @param string $match 匹配模式（正则表达式）
     * @param array $route 路由信息
     * @param array $map 模式分组的映射关系
     * @param array $verify 
     * @param string $reverse  
     * @return 
     */
    public function __construct(string $match, Array $route, Array $map, Array $verify, string $reverse )
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

