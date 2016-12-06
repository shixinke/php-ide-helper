<?php
/**
* Yaf_Plugin_Abstract自动补全类(基于最新的3.0.4版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2016/12/06
*/

class Yaf_Plugin_Abstract
{
    /**
     * 
     * @param Yaf_Request_Abstract $request: [备选值：()]
     * @param Yaf_Response_Abstract $response: [备选值：()]
     * @example 
     * @return 
     */
    public function routerStartup($request, $response)
    {
    }

    /**
     * 
     * @param Yaf_Request_Abstract $request: [备选值：()]
     * @param Yaf_Response_Abstract $response: [备选值：()]
     * @example 
     * @return 
     */
    public function routerShutdown($request, $response)
    {
    }

    /**
     * 
     * @param Yaf_Request_Abstract $request: [备选值：()]
     * @param Yaf_Response_Abstract $response: [备选值：()]
     * @example 
     * @return 
     */
    public function dispatchLoopStartup($request, $response)
    {
    }

    /**
     * 
     * @param Yaf_Request_Abstract $request: [备选值：()]
     * @param Yaf_Response_Abstract $response: [备选值：()]
     * @example 
     * @return 
     */
    public function dispatchLoopShutdown($request, $response)
    {
    }

    /**
     * 
     * @param Yaf_Request_Abstract $request: [备选值：()]
     * @param Yaf_Response_Abstract $response: [备选值：()]
     * @example 
     * @return 
     */
    public function preDispatch($request, $response)
    {
    }

    /**
     * 
     * @param Yaf_Request_Abstract $request: [备选值：()]
     * @param Yaf_Response_Abstract $response: [备选值：()]
     * @example 
     * @return 
     */
    public function postDispatch($request, $response)
    {
    }

    /**
     * 
     * @param Yaf_Request_Abstract $request: [备选值：()]
     * @param Yaf_Response_Abstract $response: [备选值：()]
     * @example 
     * @return 
     */
    public function preResponse($request, $response)
    {
    }

}
