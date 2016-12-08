<?php
/**
* Swoole自动补全类(基于最新的2.0.1版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2016/12/08
*/

/**
*
*/
namespace Swoole;
class Process
{
    /**
     * 
     *创建子进程
     * @example 
     * @return 
     */
    public function __construct()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function __destruct()
    {
    }

    /**
     * 
     *回收结束运行的子进程。
     * @example 
     * @return 
     */
    public static  function wait()
    {
    }

    /**
     * 
     *设置异步信号监听
     * @example 
     * @return 
     */
    public static  function signal()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public static  function alarm()
    {
    }

    /**
     * 
     *向子进程发送信号
     * @example 
     * @return 
     */
    public static  function kill()
    {
    }

    /**
     * 
     *使当前进程脱变为一个守护进程
     * @example 
     * @return 
     */
    public static  function daemon()
    {
    }

    /**
     * 
     *设置CPU亲和性，可以将进程绑定到特定的CPU核上
     * @example 
     * @return 
     */
    public static  function setaffinity()
    {
    }

    /**
     * 
     *启用消息队列作为进程间通信
     * @example 
     * @return 
     */
    public function useQueue()
    {
    }

    /**
     * 
     *查看消息队列状态
     *返回字段：
     *queue_num 队列中的任务数量
     * @example 
     * @return 
     */
    public function statQueue()
    {
    }

    /**
     * 
     *删除队列
     * @example 
     * @return 
     */
    public function freeQueue()
    {
    }

    /**
     * 
     *执行fork系统调用，启动进程
     * @example 
     * @return 
     */
    public function start()
    {
    }

    /**
     * 
     *向管道内写入数据
     * @example 
     * @return 
     */
    public function write()
    {
    }

    /**
     * 
     *用于关闭创建的好的管道
     * @example 
     * @return 
     */
    public function close()
    {
    }

    /**
     * 
     *从管道中读取数据
     * @example 
     * @return 
     */
    public function read()
    {
    }

    /**
     * 
     *向消息队列推送数据
     * @example 
     * @return 
     */
    public function push()
    {
    }

    /**
     * 
     *从消息队列中获取数据
     * @example 
     * @return 
     */
    public function pop()
    {
    }

    /**
     * 
     *退出子进程
     * @example 
     * @return 
     */
    public function exit()
    {
    }

    /**
     * 
     *执行一个外部程序，此函数是exec系统调用的封装
     * @example 
     * @return 
     */
    public function exec()
    {
    }

    /**
     * 
     *修改进程名称
     * @example 
     * @return 
     */
    public function name()
    {
    }

}

