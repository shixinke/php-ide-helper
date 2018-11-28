<?php
/**
* Swoole自动补全类(基于最新的4.2.9版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/11/28
*/

/**
*http响应对象
*/
class swoole_http_response
{
    /**
     * @var int $fd 
     * 连接句柄
     * @access public
     */
    public $fd    =    0;

    /**
     * @var array $header 
     * 请求头（每个key都是小写）
     * @access public
     */
    public $header    =    array();

    /**
     * @var array $cookie 
     * 请求中的cookie数据
     * @access public
     */
    public $cookie    =    array();

    /**
     * @var array $trailer 
     * 以块（chunked）传输编码消息里的尾部（trailer）里用到的头域
     * @access public
     */
    public $trailer    =    array();

    /**
     * 
     *初始化头部
     * @example 
     * @return 
     */
    public function initHeader()
    {
    
    }

    /**
     * 
     *设置cookie
     * @example 
     * @param string $name cookie键名
     * @param string $value cookie键值
     * @param int $expires 有效期
     * @param string $path 存放位置
     * @param string $domain 域名
     * @param boolean $secure 是否为HTTPS
     * @param boolean $httponly 是否只是http
     * @return 
     */
    public function cookie(string $name, string $value, int $expires, string $path, string $domain, bool $secure, bool $httponly)
    {
    
    }

    /**
     * 
     *设置最原始的cookie信息
     * @example 
     * @param string $name cookie键名
     * @param string $value cookie键值
     * @param int $expires 有效期
     * @param string $path 存放位置
     * @param string $domain 域名
     * @param boolean $secure 是否为HTTPS
     * @param boolean $httponly 是否只是http
     * @return 
     */
    public function rawcookie(string $name, string $value, int $expires, string $path, string $domain, bool $secure, bool $httponly)
    {
    
    }

    /**
     * 
     *设置http状态码
     * @example 
     * @param int $http_code 状态码
     * @return 
     */
    public function status(int $http_code)
    {
    
    }

    /**
     * 
     *启用gzip压缩
     * @example 
     * @param int $compress_level 压缩等级
     * @return 
     */
    public function gzip(int $compress_level)
    {
    
    }

    /**
     * 
     *设置响应头信息
     * @example 
     * @param string $key 响应头key
     * @param string $value 响应头值
     * @param boolean $ucwords 首字母是否大写
     * @return 
     */
    public function header(string $key, string $value, bool $ucwords)
    {
    
    }

    /**
     * 
     *设置头域值
     * @example 
     * @param string $key 头域键
     * @param mixed $value 头域值
     * @param bool $ucwords 键名是否大写
     * @return 
     */
    public function trailer(string $key, $value, bool $ucwords)
    {
    
    }

    /**
     * 
     *启用Http Chunk分段向浏览器发送相应内容
     * @example 
     * @param string $content 输出的内容
     * @return 
     */
    public function write(string $content)
    {
    
    }

    /**
     * 
     *发送响应体，并结束当前请求
     * @example 
     * @param string $content 输出的内容
     * @return 
     */
    public function end(string $content)
    {
    
    }

    /**
     * 
     *发送文件给浏览器
     * @example 
     * @param string $filename 文件名
     * @param int $offset 偏移量
     * @param int $length 长度
     * @return 
     */
    public function sendfile(string $filename, int $offset, int $length)
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

    /**
     * 
     *析构函数
     * @example 
     * @return 
     */
    public function __destruct()
    {
    
    }

}

