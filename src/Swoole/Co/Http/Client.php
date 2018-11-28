<?php
/**
* Swoole自动补全类(基于最新的4.2.9版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/11/28
*/

/**
*http协程客户端
*/
namespace Co\Http;
class Client
{
    /**
     * @var int $errCode 
     * 错误码
     * @access public
     */
    public $errCode    =    0;

    /**
     * @var int $type 
     * socket类型
     * @access public
     */
    public $type    =    0;

    /**
     * @var array $setting 
     * 配置选项
     * @access public
     */
    public $setting    =    array();

    /**
     * @var bool $connected 
     * 是否已连接
     * @access public
     */
    public $connected    =    false;

    /**
     * @var string $host 
     * 请求的服务器地址
     * @access public
     */
    public $host    =    '';

    /**
     * @var int $port 
     * 请求的服务器端口
     * @access public
     */
    public $port    =    0;

    /**
     * @var string $requestMethod 
     * 请求方式
     * @access public
     */
    public $requestMethod;

    /**
     * @var array $requestHeaders 
     * 请求头
     * @access public
     */
    public $requestHeaders    =    array();

    /**
     * @var string $requestBody 
     * 请求体
     * @access public
     */
    public $requestBody;

    /**
     * @var array $uploadFiles 
     * 上传的文件
     * @access public
     */
    public $uploadFiles    =    array();

    /**
     * @var string $downloadFile 
     * 指定下载内容写入的文件路径
     * @access public
     */
    public $downloadFile;

    /**
     * @var int $downloadOffset 
     * 
     * @access public
     */
    public $downloadOffset    =    0;

    /**
     * @var int $statusCode 
     * 状态码
     * @access public
     */
    public $statusCode    =    0;

    /**
     * @var array $headers 
     * 请求响应头
     * @access public
     */
    public $headers    =    array();

    /**
     * @var array $set_cookie_headers 
     * 服务器端返回的原始COOKIE信息，包括了domain和path项
     * @access public
     */
    public $set_cookie_headers    =    array();

    /**
     * @var array $cookies 
     * 请求响应cookie
     * @access public
     */
    public $cookies    =    array();

    /**
     * @var string $body 
     * 请求响应后服务器端返回的内容
     * @access public
     */
    public $body    =    '';

    /**
     * 
     *客户端初始化函数
     * @example 
     * @return 
     */
    public function __construct()
    {
    
    }

    /**
     * 
     *析构函数
     * @example 
     * @return 
     */
    public function __destruct()
    {
    
    }

    /**
     * 
     *设置选项
     * @example 
     * @return 
     */
    public function set()
    {
    
    }

    /**
     * 
     *设置请求方式
     * @example 
     * @return 
     */
    public function setMethod()
    {
    
    }

    /**
     * 
     *设置请求头
     * @example 
     * @return 
     */
    public function setHeaders()
    {
    
    }

    /**
     * 
     *设置cookie
     * @example 
     * @return 
     */
    public function setCookies()
    {
    
    }

    /**
     * 
     *设置Http请求的包体
     * @example 
     * @return 
     */
    public function setData()
    {
    
    }

    /**
     * 
     *更底层的Http请求方法，需要代码中调用setMethod和setData等接口设置请求的方法和数据
     * @example 
     * @return 
     */
    public function execute()
    {
    
    }

    /**
     * 
     *发起GET请求
     * @example 
     * @return 
     */
    public function get()
    {
    
    }

    /**
     * 
     *发送POST请求
     * @example 
     * @return 
     */
    public function post()
    {
    
    }

    /**
     * 
     *添加POST文件
     * @example 
     * @return 
     */
    public function addFile()
    {
    
    }

    /**
     * 
     *连接是否成功
     * @example 
     * @return boolean
     */
    public function isConnected(): boolean
    {
    
    }

    /**
     * 
     *关闭连接
     * @example 
     * @return 
     */
    public function close()
    {
    
    }

    /**
     * 
     *设置是否延迟
     * @example 
     * @return boolean
     */
    public function setDefer(): boolean
    {
    
    }

    /**
     * 
     *返回当前设置的defer
     * @example 
     * @return boolean
     */
    public function getDefer(): boolean
    {
    
    }

    /**
     * 
     *用于从服务器端接收数据。底层会自动yield，等待数据接收完成后自动切换到当前协程
     * @example 
     * @return string
     */
    public function recv(): string
    {
    
    }

    /**
     * 
     *序列化函数调用的魔术方法(在PHP进行序列化时，serialize() 检查类中是否有 __sleep() ,如果有，则该函数将在任何序列化之前运行。该函数必须返回一个需要进行序列化保存的成员属性数组，并且只序列化该函数返回的这些成员属性. 该函数有两个作用: 第一. 在序列化之前,关闭对象可能具有的任何数据库连接等. 第二. 指定对象中需要被序列化的成员属性,如果某个属性比较大而不需要储存下来,可以不把它写进__sleep要返回的数组中,这样该属性就不会被序列化)
     * @example 
     * @return 
     */
    public function __sleep()
    {
    
    }

    /**
     * 
     *反序列化函数调用的魔术方法(unserialize() 从字节流中创建了一个对象之后,马上检查是否具有__wakeup 的函数的存在。如果存在，__wakeup 立刻被调用。使用 __wakeup 的目的是重建在序列化中可能丢失的任何数据库连接以及处理其它重新初始化的任务)
     * @example 
     * @return 
     */
    public function __wakeup()
    {
    
    }

}

