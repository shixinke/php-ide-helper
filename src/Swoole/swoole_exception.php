<?php
/**
* Swoole自动补全类(基于最新的2.0.6版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2017/02/17
*/

/**
*swoole异常类
*/
class swoole_exception extends Exception
{
    /**
     * @var string $message 
     * 异常提示信息
     * @access protected
     */
    protected $message    =    '';

    /**
     * @var int $code 
     * 异常错误码
     * @access protected
     */
    protected $code    =    0;

    /**
     * @var string $file 
     * 异常所在文件
     * @access protected
     */
    protected $file;

    /**
     * @var int $line 
     * 异常所在行
     * @access protected
     */
    protected $line;

    /**
     * 
     *克隆方法
     * @example 
     * @return 
     */
    private final  function __clone()
    {
    }

    /**
     * 
     *初始化方法
     * @example 
     * @param string $message 初始化方法
     * @param int $code 初始化方法
     * @param Exception $previous 初始化方法
     * @return 
     */
    public function __construct($message, $code, $previous)
    {
    }

    /**
     * 
     *unserialize()会检查是否存在一个__wakeup方法。如果存在，则会先调用 __wakeup方法，预先准备对象数据
     * @example 
     * @return 
     */
    public function __wakeup()
    {
    }

    /**
     * 
     *获取异常信息
     * @example 
     * @return string
     */
    public final  function getMessage()
    {
    }

    /**
     * 
     *获取异常码
     * @example 
     * @return int
     */
    public final  function getCode()
    {
    }

    /**
     * 
     *获取异常所在文件
     * @example 
     * @return string
     */
    public final  function getFile()
    {
    }

    /**
     * 
     *获取异常所在行
     * @example 
     * @return int
     */
    public final  function getLine()
    {
    }

    /**
     * 
     *获取异常追踪信息
     * @example 
     * @return array
     */
    public final  function getTrace()
    {
    }

    /**
     * 
     *获取异常链上的前一个异常对象
     * @example 
     * @return Exception
     */
    public final  function getPrevious()
    {
    }

    /**
     * 
     *获取字符串类型的异常追踪信息
     * @example 
     * @return string
     */
    public final  function getTraceAsString()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function __toString()
    {
    }

}

