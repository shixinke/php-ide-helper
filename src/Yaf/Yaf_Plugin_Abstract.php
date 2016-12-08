<?php
/**
* Yaf自动补全类(基于最新的3.0.4版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2016/12/08
*/

/**
*(Yaf >= 3.0.2)
*Class yaf_Plugin_Abstract
*/
abstract class Yaf_Plugin_Abstract
{
    /**
     * 
     *(Yaf >= 3.0.2)
     *在路由之前触发
     * @example 
     * @param YafX_Request_Abstract $request (Yaf >= 3.0.2)
在路由之前触发
     * @param YafX_Response_Abstract $response (Yaf >= 3.0.2)
在路由之前触发
     * @return 
     */
    public function routerStartup($request, $response)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *路由结束之后触发
     * @example 
     * @param YafX_Request_Abstract $request (Yaf >= 3.0.2)
路由结束之后触发
     * @param YafX_Response_Abstract $response (Yaf >= 3.0.2)
路由结束之后触发
     * @return 
     */
    public function routerShutdown($request, $response)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *分发循环开始之前被触发
     * @example 
     * @param YafX_Request_Abstract $request (Yaf >= 3.0.2)
分发循环开始之前被触发
     * @param YafX_Response_Abstract $response (Yaf >= 3.0.2)
分发循环开始之前被触发
     * @return 
     */
    public function dispatchLoopStartup($request, $response)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *dispatchLoopShutdown
     * @example 
     * @param YafX_Request_Abstract $request (Yaf >= 3.0.2)
dispatchLoopShutdown
     * @param YafX_Response_Abstract $response (Yaf >= 3.0.2)
dispatchLoopShutdown
     * @return 
     */
    public function dispatchLoopShutdown($request, $response)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *分发之前触发
     * @example 
     * @param YafX_Request_Abstract $request (Yaf >= 3.0.2)
分发之前触发
     * @param YafX_Response_Abstract $response (Yaf >= 3.0.2)
分发之前触发
     * @return 
     */
    public function preDispatch($request, $response)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *分发结束之后触发
     * @example 
     * @param YafX_Request_Abstract $request (Yaf >= 3.0.2)
分发结束之后触发
     * @param YafX_Response_Abstract $response (Yaf >= 3.0.2)
分发结束之后触发
     * @return 
     */
    public function postDispatch($request, $response)
    {
    }

    /**
     * 
     *
     * @example 
     * @param Yaf_Request_Abstract $request 
     * @param Yaf_Response_Abstract $response 
     * @return 
     */
    public function preResponse($request, $response)
    {
    }

}

