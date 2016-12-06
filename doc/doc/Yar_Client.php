<?php
/**
* Yar_Client自动补全类(基于最新的1.0.3版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2016/12/06
*/

class Yar_Client
{
    //使用的协议
    protected $_protocol    =    1;
    //请求的URI
    protected $_uri;
    //选项
    protected $_options;
    //是否正在运行
    protected $_running;
    /**
     * 构造方法
     * @param string $url:请求URI 
     * @param boolean $async:是否异步 
     * @example      * $client = new Yar_Client('http://api.com/', true)
     * @return object
     */
    public function __construct($url, $async)
    {
    }

    /**
     * 调用服务端方法
     * @param string $method:方法名 
     * @param mixed $parameters:请求参数 
     * @example      * $client->call('getName', array('id'=>2));
     * @return 
     */
    public function call($method, $parameters)
    {
    }

    /**
     * 调用方法的魔术方法
     * @param string $method:方法名 
     * @param mixed $parameters:参数 
     * @example      * $client->getName(2)
     * @return 
     */
    public function __call($method, $parameters)
    {
    }

    /**
     * 获取选项值
     * @param string $type:选项类型 [备选值：YAR_OPT_PACKAGER(数据打包类型)YAR_OPT_PERSISTENT(是否持久连接)YAR_OPT_TIMEOUT(超时时间)YAR_OPT_CONNECT_TIMEOUT(连接超时时间)]
     * @example      * $client->getOpt(YAR_OPT_CONNECT_TIMEOUT);
     * @return 
     */
    public function getOpt($type)
    {
    }

    /**
     * 设置选项
     * @param CONSTANT $type:选项类型 [备选值：YAR_OPT_PACKAGER(数据打包类型)YAR_OPT_PERSISTENT(是否持久连接)YAR_OPT_TIMEOUT(超时时间)YAR_OPT_CONNECT_TIMEOUT(连接超时时间)]
     * @param mixed $value:选项类型值 [备选值：()]
     * @example      * $client->setOpt(YAR_OPT_CONNECT_TIMEOUT, 1000);
     * @return 
     */
    public function setOpt($type, $value)
    {
    }

}
