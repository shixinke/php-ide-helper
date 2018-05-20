<?php
/**
* Yaf自动补全类(基于最新的3.0.7版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/05/20
*/

/**
*yaf响应抽象类
*/
abstract class Yaf_Response_Abstract
{
    /**     
    *默认响应内容
    */
    const DEFAULT_BODY    =    'content';

    /**
     * @var array $_header 
     * 响应报头
     * @access protected
     */
    protected $_header    =    array();

    /**
     * @var string $_body 
     * 响应正文
     * @access protected
     */
    protected $_body;

    /**
     * @var bool $_sendheader 
     * 是否开启已输出响应报头检测
     * @access protected
     */
    protected $_sendheader    =    false;

    /**
     * 
     *构造方法
     * @example 
     * @return 
     */
    public function __construct()
    {
    
    }

    /**
     * 
     *析构方法
     * @example 
     * @return 
     */
    public function __destruct()
    {
    
    }

    /**
     * 
     *重置__clone魔术方法
     * @example 
     * @return 
     */
    private function __clone()
    {
    
    }

    /**
     * 
     *返回响应正文的字符串
     * @example 
     * @return 
     */
    public function __toString()
    {
    
    }

    /**
     * 
     *设置类型为$name的响应正文内容
     * @example 
     * @param string $body 响应正文内容（可覆盖原来的）
     * @param string $name 响应正文类型，默认为content
     * @return 
     */
    public function setBody(string $body, string $name = 'content')
    {
    
    }

    /**
     * 
     *获取类型为$name的响应正文内容
     * @example 
     * @param string $name 响应正文类型，默认为content
     * @return string
     */
    public function getBody(string $name = 'content'): string
    {
    
    }

    /**
     * 
     *设置类型为$name的响应正文内容, 如已存在，则追加到原来正文的后面
     * @example 
     * @param string $body 响应正文内容（可追加）
     * @param string $name 响应正文类型，默认为content
     * @return 
     */
    public function appendBody(string $body, string $name)
    {
    
    }

    /**
     * 
     *设置类型为$name的响应正文内容, 如已存在，则追加到原来正文的前面
     * @example 
     * @param string $body 响应正文内容（可追加）
     * @param string $name 响应正文类型，默认为content
     * @return 
     */
    public function prependBody(string $body, string $name)
    {
    
    }

    /**
     * 
     *清空响应正文
     * @example 
     * @return 
     */
    public function clearBody()
    {
    
    }

    /**
     * 
     *获取响应报头
     * @example 
     * @return array
     */
    public function getHeader(): array
    {
    
    }

    /**
     * 
     *批量设置响应报头
     * @example 
     * @param array $headers 响应头列表
     * @return 
     */
    public function setAllHeaders(Array $headers)
    {
    
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *设置响应报头
     * @example 
     * @return 
     */
    public function setHeader()
    {
    
    }

    /**
     * 
     *清空响应报头
     * @example 
     * @return 
     */
    public function clearHeaders()
    {
    
    }

    /**
     * 
     *将当前请求重定向到指定的URL（内部实现是通过发送Location报头实现，如：header("Location:http//www.phpboy.net/"））
     * @example 
     * @param string $url 重定向的绝对URL
     * @return 
     */
    public function setRedirect(string $url)
    {
    
    }

    /**
     * 
     *输出所有的响应正文
     * @example 
     * @return 
     */
    public function response()
    {
    
    }

}

