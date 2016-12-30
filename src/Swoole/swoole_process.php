<?php
/**
* Swoole自动补全类(基于最新的2.0.4版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2016/12/30
*/

/**
*
*/
class swoole_process
{
    /**     
    *
    */
    const IPC_NOWAIT    =    256;

    /**
     * 
     *创建子进程
     * @example 
     * @param  mixed $callback 
     * @param  mixed $redirect_stdin_and_stdout 
     * @param  mixed $pipe_type 
     * @return 
     */
    public function __construct($callback, $redirect_stdin_and_stdout, $pipe_type)
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
     * @param  mixed $blocking 
     * @return 
     */
    public static  function wait($blocking)
    {
    }

    /**
     * 
     *设置异步信号监听
     * @example 
     * @param  mixed $signal_no 
     * @param  mixed $callback 
     * @return 
     */
    public static  function signal($signal_no, $callback)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $usec 
     * @return 
     */
    public static  function alarm($usec)
    {
    }

    /**
     * 
     *向子进程发送信号
     * @example 
     * @param  mixed $pid 
     * @param  mixed $signal_no 
     * @return 
     */
    public static  function kill($pid, $signal_no)
    {
    }

    /**
     * 
     *使当前进程脱变为一个守护进程
     * @example 
     * @param  mixed $nochdir 
     * @param  mixed $noclose 
     * @return 
     */
    public static  function daemon($nochdir, $noclose)
    {
    }

    /**
     * 
     *设置CPU亲和性，可以将进程绑定到特定的CPU核上
     * @example 
     * @param array $cpu_settings 
     * @return 
     */
    public static  function setaffinity(Array $cpu_settings)
    {
    }

    /**
     * 
     *启用消息队列作为进程间通信
     * @example 
     * @param  mixed $key 
     * @param  mixed $mode 
     * @return 
     */
    public function useQueue($key, $mode)
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
     * @param  mixed $data 
     * @return 
     */
    public function write($data)
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
     * @param  mixed $size 
     * @return 
     */
    public function read($size)
    {
    }

    /**
     * 
     *向消息队列推送数据
     * @example 
     * @param  mixed $data 
     * @return 
     */
    public function push($data)
    {
    }

    /**
     * 
     *从消息队列中获取数据
     * @example 
     * @param  mixed $size 
     * @return 
     */
    public function pop($size)
    {
    }

    /**
     * 
     *退出子进程
     * @example 
     * @param  mixed $exit_code 
     * @return 
     */
    public function exit($exit_code)
    {
    }

    /**
     * 
     *执行一个外部程序，此函数是exec系统调用的封装
     * @example 
     * @param  mixed $exec_file 
     * @param  mixed $args 
     * @return 
     */
    public function exec($exec_file, $args)
    {
    }

    /**
     * 
     *修改进程名称
     * @example 
     * @param  mixed $process_name 
     * @return 
     */
    public function name($process_name)
    {
    }

}

