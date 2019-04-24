<?php
/**
* Yar自动补全类(基于最新的2.0.4版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/05/20
*/

/**
*yar客户端
*/
class Yar_Client
{
    /**
     * @var int $_protocol 
     * 使用的协议
     * @access protected
     */
    protected $_protocol    =    1;

    /**
     * @var string $_uri 
     * 请求的uri
     * @access protected
     */
    protected $_uri;

    /**
     * @var array $_options 
     * 配置选项
     * @access protected
     */
    protected $_options    =    array();

    /**
     * @var bool $_running 
     * 是否正在运行
     * @access protected
     */
    protected $_running;

    /**
     * 
     *初始化客户端
     * @example 
     * @param string $url 服务端地址
     * @param array $options 配置选项
     * @return 
     */
    public final  function __construct(string $url, Array $options = [])
    {
    
    }

    /**
     * 
     *发起请求
     * @example 
     * @param string $method 请求方法
     * @param array $parameters 请求参数
     * @return int|bool
     */
    public function call(string $method, Array $parameters): ?int
    {
    
    }

    /**
     * 
     *发起请求
     * @example 
     * @param string $method 请求方法
     * @param array $parameters 请求参数
     * @return int|bool
     */
    public function __call(string $method, Array $parameters): ?int
    {
    
    }

    /**
     * 
     *获取配置选项
     * @example 
     * @param int $type 配置选项(使用常量)
     * @return mixed
     */
    public function getOpt(int $type)
    {
    
    }

    /**
     * 
     *设置选项
     * @example 
     * @param int $type 选项名称(使用常量)
     * @param mixed $value 选项值
     * @return 
     */
    public function setOpt(int $type, $value)
    {
    
    }

}

