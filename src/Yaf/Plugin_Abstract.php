<?php
/**
* Yaf自动补全类(基于最新的3.0.7版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/05/20
*/

/**
*插件抽象类
*/
namespace Yaf;
abstract class Plugin_Abstract
{
    /**
     * 
     *在路由之前触发
     * @example 
     * @param Yaf_Request_Abstract $request 当前请求对象
     * @param Yaf_Response_Abstract $response 当前响应对象
     * @return 
     */
    public function routerStartup(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response)
    {
    
    }

    /**
     * 
     *路由结束之后触发
     * @example 
     * @param Yaf_Request_Abstract $request 当前请求对象
     * @param Yaf_Response_Abstract $response 当前响应对象
     * @return 
     */
    public function routerShutdown(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response)
    {
    
    }

    /**
     * 
     *分发循环开始之前被触发
     * @example 
     * @param YafX_Request_Abstract $request 当前请求对象
     * @param Yaf_Response_Abstract $response 当前响应对象
     * @return 
     */
    public function dispatchLoopStartup(YafX_Request_Abstract $request, Yaf_Response_Abstract $response)
    {
    
    }

    /**
     * 
     *分发之前触发
     * @example 
     * @param Yaf_Request_Abstract $request 当前请求对象
     * @param Yaf_Response_Abstract $response 当前响应对象
     * @return 
     */
    public function preDispatch(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response)
    {
    
    }

    /**
     * 
     *分发结束之后触发
     * @example 
     * @param Yaf_Request_Abstract $request 当前请求对象
     * @param Yaf_Response_Abstract $response 当前响应对象
     * @return 
     */
    public function postDispatch(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response)
    {
    
    }

    /**
     * 
     *分发循环结束
     * @example 
     * @param Yaf_Request_Abstract $request 当前请求对象
     * @param Yaf_Response_Abstract $response 当前响应对象
     * @return 
     */
    public function dispatchLoopShutdown(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response)
    {
    
    }

}

