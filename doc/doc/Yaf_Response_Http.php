<?php
/**
* Yaf_Response_Http自动补全类(基于最新的3.0.4版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2016/12/06
*/

class Yaf_Response_Http extends Yaf_Response_Abstract
{
    DEFAULT_BODY = content;

     /**

     */
    protected $_header;

     /**

     */
    protected $_body;

     /**

     */
    protected $_sendheader    =    "1";

     /**

     */
    protected $_response_code    =    0;
    /**
     * 
     * @param unknown $name: [备选值：()]
     * @param unknown $value: [备选值：()]
     * @param unknown $rep: [备选值：()]
     * @param unknown $response_code: [备选值：()]
     * @example 
     * @return 
     */
    public function setHeader($name, $value, $rep, $response_code)
    {
    }

    /**
     * 
     * @param unknown $headers: [备选值：()]
     * @example 
     * @return 
     */
    public function setAllHeaders($headers)
    {
    }

    /**
     * 
     * @param unknown $name: [备选值：()]
     * @example 
     * @return 
     */
    public function getHeader($name)
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function clearHeaders()
    {
    }

    /**
     * 
     * @param unknown $url: [备选值：()]
     * @example 
     * @return 
     */
    public function setRedirect($url)
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function response()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function __construct()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function __destruct()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    private function __clone()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function __toString()
    {
    }

    /**
     * 
     * @param unknown $body: [备选值：()]
     * @param unknown $name: [备选值：()]
     * @example 
     * @return 
     */
    public function setBody($body, $name)
    {
    }

    /**
     * 
     * @param unknown $body: [备选值：()]
     * @param unknown $name: [备选值：()]
     * @example 
     * @return 
     */
    public function appendBody($body, $name)
    {
    }

    /**
     * 
     * @param unknown $body: [备选值：()]
     * @param unknown $name: [备选值：()]
     * @example 
     * @return 
     */
    public function prependBody($body, $name)
    {
    }

    /**
     * 
     * @param unknown $name: [备选值：()]
     * @example 
     * @return 
     */
    public function clearBody($name)
    {
    }

    /**
     * 
     * @param unknown $name: [备选值：()]
     * @example 
     * @return 
     */
    public function getBody($name)
    {
    }

}
