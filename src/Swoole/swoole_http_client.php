<?php
/**
* Swoole自动补全类(基于最新的4.2.9版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/11/28
*/

/**
*HTTP异步客户端
*/
class swoole_http_client
{
    /**
     * @var int $type 
     * socket类型
     * @access public
     */
    public $type    =    0;

    /**
     * @var int $errCode 
     * 错误码
     * @access public
     */
    public $errCode    =    0;

    /**
     * @var int $statusCode 
     * 状态码
     * @access public
     */
    public $statusCode    =    0;

    /**
     * @var string $host 
     * 请求的服务器地址
     * @access public
     */
    public $host;

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
     * @var array $set_cookie_headers 
     * 设置请求头中的cookie
     * @access public
     */
    public $set_cookie_headers    =    array();

    /**
     * @var string $downloadFile 
     * 下载文件
     * @access public
     */
    public $downloadFile;

    /**
     * @var array $headers 
     * 请求响应头
     * @access public
     */
    public $headers    =    array();

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
    public $body;

    /**
     * @var callable $onConnect 
     * 连接成功的回调函数
     * @access public
     */
    public $onConnect;

    /**
     * @var callable $onError 
     * 连接错误时的回调函数
     * @access public
     */
    public $onError;

    /**
     * @var callable $onMessage 
     * 当接收到消息时的回调函数(websocket)
     * @access public
     */
    public $onMessage;

    /**
     * @var callable $onClose 
     * 连接关闭时的回调函数
     * @access public
     */
    public $onClose;

    /**
     * 
     *客户端连接初始化
     * @example 
     * @param string $host 连接的主机IP
     * @param int $port 连接的主机端口
     * @param boolean $ssl 是否开启TLS/SSL隧道加密，https网站必须设置为true
     * @return 
     */
    public function __construct(string $host, int $port, bool $ssl)
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
     * @param array $settings 配置选项
     * @return 
     */
    public function set(Array $settings)
    {
    
    }

    /**
     * 
     *设置请求方式
     * @example 
     * @param string $method 请求方式
     * @return 
     */
    public function setMethod(string $method)
    {
    
    }

    /**
     * 
     *设置请求头
     * @example 
     * @param array $headers 请求头
     * @return 
     */
    public function setHeaders(Array $headers)
    {
    
    }

    /**
     * 
     *设置cookie
     * @example 
     * @param array $cookies cookie数组
     * @return 
     */
    public function setCookies(Array $cookies)
    {
    
    }

    /**
     * 
     *设置Http请求的包体
     * @example 
     * @param string $data 请求体内容
     * @return 
     */
    public function setData(string $data)
    {
    
    }

    /**
     * 
     *添加POST文件
     * @example 
     * @param string $path 文件的路径，必选参数，不能为空文件或者不存在的文件
     * @param string $name 表单的名称，必选参数，FILES参数中的key
     * @param string $type 文件的MIME格式，可选参数，底层会根据文件的扩展名自动推断
     * @param string $filename 文件名称
     * @param int $offset 上传文件的偏移量，可以指定从文件的中间部分开始传输数据。此特性可用于支持断点续传。
     * @param int $length 发送数据的尺寸，默认为整个文件的尺寸
     * @return 
     */
    public function addFile(string $path, string $name, string $type, string $filename, int $offset, int $length)
    {
    
    }

    /**
     * 
     *更底层的Http请求方法，需要代码中调用setMethod和setData等接口设置请求的方法和数据
     * @example 
     * @param string $path 请求地址
     * @param callable $callback 回调函数
     * @return 
     */
    public function execute(string $path, Callable $callback)
    {
    
    }

    /**
     * 
     *向WebSocket服务器发送数据
     * @example 
     * @param string $data 要发送的数据内容，默认为UTF-8文本格式，如果为其他格式编码或二进制数据，请使用WEBSOCKET_OPCODE_BINARY
     * @param int $opcode 操作类型，默认为WEBSOCKET_OPCODE_TEXT_FRAME表示发送文本
     * @param boolean $finish 发送成功后是否结束
     * @return 
     */
    public function push(string $data, int $opcode, bool $finish)
    {
    
    }

    /**
     * 
     *发起GET请求
     * @example 
     * @param string $path 请求路径
     * @param callable $callback 请求成功后的回调函数
     * @return 
     */
    public function get(string $path, Callable $callback)
    {
    
    }

    /**
     * 
     *发送POST请求
     * @example 
     * @param string $path 请求地址
     * @param mixed $data 求的包体数据，如果$data为数组底层自动会打包为x-www-form-urlencoded格式的POST内容，并设置Content-Type为application/x-www-form-urlencoded
     * @param callable $callback 请求成功后的回调
     * @return 
     */
    public function post(string $path, $data, Callable $callback)
    {
    
    }

    /**
     * 
     *发起WebSocket握手请求，并将连接升级为WebSocket
     * @example 
     * @param string $path 请求地址
     * @param callable $callback 成功或失败后回调函数
     * @return 
     */
    public function upgrade(string $path, Callable $callback)
    {
    
    }

    /**
     * 
     *通过Http下载文件
     * @example 
     * @param string $path 请求地址
     * @param string $file 指定下载内容写入的文件路径，会自动写入到downloadFile属性
     * @param callable $callback 下载成功后的回调函数
     * @param int $offset 为0时若文件已存在，底层会自动清空此文件
     * @return 
     */
    public function download(string $path, string $file, Callable $callback, int $offset)
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
     *绑定事件
     * @example 
     * @param string $event_name 事件名称
     * @param callable $callback 事件对应的回调函数
     * @return 
     */
    public function on(string $event_name, Callable $callback)
    {
    
    }

}

