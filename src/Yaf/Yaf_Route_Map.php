<?php
/**
* Yaf自动补全类(基于最新的3.0.4版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2016/12/08
*/

/**
*(Yaf >= 3.0.2)
*Class yaf_Route_Map
*/
final class Yaf_Route_Map
{
    /**
     * @var unknown $_ctl_router 
     * (Yaf >= 3.0.2)
     * 表示路由结果是作为动作的路由结果，还是控制器的路由结果，默认的是动作路由结果.
     * @access protected
    protected $_ctl_router    =    '';

    /**
     * @var unknown $_delimiter 
     * 
     * @access protected
    protected $_delimiter;

    /**
     * 
     *(Yaf >= 3.0.2)
     *构造方法
     * @example 
     * @param  mixed $controller_prefer 
     * @param  mixed $delimiter 
     * @return 
     */
    public function __construct($controller_prefer, $delimiter)
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

