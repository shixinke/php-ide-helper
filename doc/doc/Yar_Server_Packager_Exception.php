<?php
/**
* Yar_Server_Packager_Exception自动补全类(基于最新的1.0.3版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2016/12/06
*/

class Yar_Server_Packager_Exception extends Yar_Server_Exception
{
    //异常错误信息
    protected $message    =    "";
    //异常错误码
    protected $code    =    0;
    //错误所在文件名
    protected $file;
    //错误所在文件的行数
    protected $line;
    /**
     * 获取异常类型
     * @example 
     * @return 
     */
    public function getType()
    {
    }

    /**
     * 尝试克隆异常，这将导致一个致命错误
     * @example 
     * @return 
     */
    private function __clone()
    {
    }

    /**
     * 初始化方法
     * @param string $message:异常提示信息 
     * @param int $code:异常错误码 
     * @param Exception $previous:异常链中的前一个异常 
     * @example 
     * @return 
     */
    public function __construct($message, $code, $previous)
    {
    }

    /**
     * unserialize()会检查是否存在一个__wakeup方法。如果存在，则会先调用 __wakeup方法，预先准备对象数据
     * @example 
     * @return 
     */
    public function __wakeup()
    {
    }

    /**
     * 获取错误异常信息
     * @example 
     * @return 
     */
    public function getMessage()
    {
    }

    /**
     * 获取异常码
     * @example 
     * @return 
     */
    public function getCode()
    {
    }

    /**
     * 获取错误所在文件名
     * @example 
     * @return 
     */
    public function getFile()
    {
    }

    /**
     * 获取错误所在行
     * @example 
     * @return 
     */
    public function getLine()
    {
    }

    /**
     * 获取trace信息
     * @example 
     * @return 
     */
    public function getTrace()
    {
    }

    /**
     * 返回异常链中的前一个异常
     * @example 
     * @return 
     */
    public function getPrevious()
    {
    }

    /**
     * 获取以字符串展示的trace信息
     * @example 
     * @return 
     */
    public function getTraceAsString()
    {
    }

    /**
     * 将信息转化为字符串
     * @example 
     * @return 
     */
    public function __toString()
    {
    }

}
