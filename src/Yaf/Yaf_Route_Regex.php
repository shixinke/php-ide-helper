<?php
/**
* Yaf自动补全类(基于最新的3.0.4版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2016/12/08
*/

/**
*(Yaf >= 3.0.2)
*Class yaf_Route_Regex
*/
final class Yaf_Route_Regex
{
    /**
     * @var unknown $_route 
     * (Yaf >= 3.0.2)
     * 匹配模式（正则表达式）
     * @access protected
    protected $_route;

    /**
     * @var unknown $_default 
     * (Yaf >= 3.0.2)
     * 路由信息
     * @access protected
    protected $_default;

    /**
     * @var unknown $_maps 
     * (Yaf >= 3.0.2)
     * 模式分组的映射关系
     * @access protected
    protected $_maps;

    /**
     * @var unknown $_verify 
     * (Yaf >= 3.0.2)
     * 哥也不清楚（实在没有查到作用，源码也没看出所以然，问鸟哥！）
     * @access protected
    protected $_verify;

    /**
     * @var unknown $_reverse 
     * 
     * @access protected
    protected $_reverse;

    /**
     * 
     *(Yaf >= 3.0.2)
     *构造方法
     * @example 
     * @param string $match (Yaf >= 3.0.2)
构造方法
     * @param array $route (Yaf >= 3.0.2)
构造方法
     * @param array $map (Yaf >= 3.0.2)
构造方法
     * @param  mixed $verify 
     * @param  mixed $reverse 
     * @return 
     */
    public function __construct($match, Array $route, Array $map, $verify, $reverse)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *路由请求
     * @example 
     * @param  mixed $request 
     * @return 
     */
    public function route($request)
    {
    }

    /**
     * 
     *(Yaf >= 2.3.2)
     *组合uri，路由解析的逆操作
     * @example 
     * @param  mixed $info 
     * @param  mixed $query 
     * @return 
     */
    public function assemble($info, $query)
    {
    }

}

