<?php
/**
* Yaf自动补全类(基于最新的3.0.4版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2016/12/08
*/

/**
*(Yaf >= 3.0.2)
*Class yaf_Response_Cli
*/
class Yaf_Response_Cli extends Yaf_Response_Abstract
{
    /**     
    *
    */
    const DEFAULT_BODY    =    'content';

    /**
     * @var unknown $_header 
     * (Yaf >= 3.0.2)
     * 响应报头
     * @access protected
    protected $_header;

    /**
     * @var unknown $_body 
     * (Yaf >= 3.0.2)
     * 响应正文
     * @access protected
    protected $_body;

    /**
     * @var unknown $_sendheader 
     * (Yaf >= 3.0.2)
     * 是否开启已输出响应报头检测
     * @access protected
    protected $_sendheader    =    '';

    /**
     * 
     *(Yaf >= 3.0.2)
     *构造方法
     * @example 
     * @return 
     */
    public function __construct()
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *析构方法
     * @example 
     * @return 
     */
    public function __destruct()
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *重置__clone魔术方法
     * @example 
     * @return 
     */
    private function __clone()
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *返回响应正文的字符串
     * @example 
     * @return 
     */
    public function __toString()
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *设置类型为$name的响应正文内容
     * @example 
     * @param string $body (Yaf >= 3.0.2)
设置类型为$name的响应正文内容
     * @param string $name (Yaf >= 3.0.2)
设置类型为$name的响应正文内容
     * @return 
     */
    public function setBody($body, $name)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *设置类型为$name的响应正文内容, 如已存在，则追加到原来正文的后面
     * @example 
     * @param string $body (Yaf >= 3.0.2)
设置类型为$name的响应正文内容, 如已存在，则追加到原来正文的后面
     * @param string $name (Yaf >= 3.0.2)
设置类型为$name的响应正文内容, 如已存在，则追加到原来正文的后面
     * @return 
     */
    public function appendBody($body, $name)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *设置类型为$name的响应正文内容, 如已存在，则追加到原来正文的前面
     * @example 
     * @param string $body (Yaf >= 3.0.2)
设置类型为$name的响应正文内容, 如已存在，则追加到原来正文的前面
     * @param string $name (Yaf >= 3.0.2)
设置类型为$name的响应正文内容, 如已存在，则追加到原来正文的前面
     * @return 
     */
    public function prependBody($body, $name)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *清空响应正文
     * @example 
     * @param  mixed $name 
     * @return 
     */
    public function clearBody($name)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *获取类型为$name的响应正文内容
     * @example 
     * @param string $name (Yaf >= 3.0.2)
获取类型为$name的响应正文内容
     * @return 
     */
    public function getBody($name)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *输出所有的响应正文
     * @example 
     * @return 
     */
    public function response()
    {
    }

}

