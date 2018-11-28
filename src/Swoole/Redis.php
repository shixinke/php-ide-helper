<?php
/**
* Swoole自动补全类(基于最新的4.2.9版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/11/28
*/

/**
*异步redis客户端
*/
namespace Swoole;
class Redis
{
    /**     
    *连接状态
    */
    const STATE_CONNECT    =    0;

    /**     
    *连接等待操作
    */
    const STATE_READY    =    1;

    /**     
    *等待返回结果
    */
    const STATE_WAIT_RESULT    =    2;

    /**     
    *订阅状态
    */
    const STATE_SUBSCRIBE    =    3;

    /**     
    *连接关闭状态
    */
    const STATE_CLOSED    =    4;

    /**
     * @var callable $onConnect 
     * 连接成功后的回调函数
     * @access public
     */
    public $onConnect;

    /**
     * @var callable $onClose 
     * 关闭连接时的回调函数
     * @access public
     */
    public $onClose;

    /**
     * @var callable $onMessage 
     * 接收到消息时的回调函数
     * @access public
     */
    public $onMessage;

    /**
     * @var array $setting 
     * 用于初始化的配置选项
     * @access public
     */
    public $setting    =    array();

    /**
     * @var string $host 
     * 配置的主机
     * @access public
     */
    public $host;

    /**
     * @var int $port 
     * 配置的端口号
     * @access public
     */
    public $port;

    /**
     * @var int $sock 
     * 连接句柄
     * @access public
     */
    public $sock;

    /**
     * @var int $errCode 
     * 错误码
     * @access public
     */
    public $errCode;

    /**
     * @var string $errMsg 
     * 错误信息
     * @access public
     */
    public $errMsg;

    /**
     * 
     *初始化函数
     * @example 
     * @param array $setting 配置参数(配置选项为：timeout : 连接超时时间(单位为秒，浮点型); password : 密码; database : 数据库编号 )
     * @return 
     */
    public function __construct(Array $setting)
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
     *注册事件回调函数
     * @example 
     * @param string $event_name 事件类型，目前只支持close和message
     * @param callable $callback 事件回调函数
     * @return 
     */
    public function on(string $event_name, Callable $callback)
    {
    
    }

    /**
     * 
     *连接redis服务器
     * @example 
     * @param string $host 主机
     * @param int $port 端口
     * @param callable $callback 连接回调函数
     * @return 
     */
    public function connect(string $host, int $port, Callable $callback)
    {
    
    }

    /**
     * 
     *关闭redis连接
     * @example 
     * @return 
     */
    public function close()
    {
    
    }

    /**
     * 
     *获取redis服务器状态
     * @example 
     * @return int
     */
    public function getState(): int
    {
    
    }

    /**
     * 
     *执行redis命令
     * @example 
     * @param string $command redis指令
     * @param array $params 参数
     * @return 
     */
    public function __call(string $command, Array $params)
    {
    
    }

}

