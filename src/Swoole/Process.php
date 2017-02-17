<?php
/**
* Swoole自动补全类(基于最新的2.0.6版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2017/02/17
*/

/**
*swoole进程管理模块
*/
namespace Swoole;
class Process
{
    /**     
    *可将队列设置为非阻塞
    */
    const IPC_NOWAIT    =    256;

    /**
     * 
     *创建子进程
     * @example 
     * @param callable $callback 创建子进程
     * @param boolean $redirect_stdin_and_stdout 创建子进程
     * @param bool $pipe_type 创建子进程
     * @return int
     */
    public function __construct(Callable $callback, $redirect_stdin_and_stdout, $pipe_type)
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
     *回收结束运行的子进程
     * @example 
     * @param boolean $blocking 回收结束运行的子进程
     * @return mixed(array or boolean)
     */
    public static  function wait($blocking)
    {
    }

    /**
     * 
     *设置异步信号监听(此方法基于signalfd和eventloop是异步IO，不能用于同步程序中)
     * @example 
     * @param int $signal_no 设置异步信号监听(此方法基于signalfd和eventloop是异步IO，不能用于同步程序中)
     * @param callable $callback 设置异步信号监听(此方法基于signalfd和eventloop是异步IO，不能用于同步程序中)
     * @return boolean
     */
    public static  function signal($signal_no, Callable $callback)
    {
    }

    /**
     * 
     *高精度定时器，是操作系统setitimer系统调用的封装，可以设置微妙级别的定时器。定时器会触发信号，需要与swoole_process::signal或pcntl_signal配合使用。
     * @example 
     * @param int $usec 高精度定时器，是操作系统setitimer系统调用的封装，可以设置微妙级别的定时器。定时器会触发信号，需要与swoole_process::signal或pcntl_signal配合使用。
     * @return boolean
     */
    public static  function alarm($usec)
    {
    }

    /**
     * 
     *向子进程发送信号
     * @example 
     * @param int $pid 向子进程发送信号
     * @param int $signal_no 向子进程发送信号
     * @return int
     */
    public static  function kill($pid, $signal_no)
    {
    }

    /**
     * 
     *使当前进程脱变为一个守护进程
     * @example 
     * @param boolean $nochdir 使当前进程脱变为一个守护进程
     * @param boolean $noclose 使当前进程脱变为一个守护进程
     * @return boolean
     */
    public static  function daemon($nochdir, $noclose)
    {
    }

    /**
     * 
     *设置CPU亲和性，可以将进程绑定到特定的CPU核上
     * @example 
     * @param array $cpu_settings 设置CPU亲和性，可以将进程绑定到特定的CPU核上
     * @return boolean
     */
    public static  function setaffinity(Array $cpu_settings)
    {
    }

    /**
     * 
     *启用消息队列作为进程间通信
     * @example 
     * @param string $key 启用消息队列作为进程间通信
     * @param int $mode 启用消息队列作为进程间通信
     * @return boolean
     */
    public function useQueue($key, $mode)
    {
    }

    /**
     * 
     *查看消息队列状态(返回一个数组，包括2项信息:queue_num 队列中的任务数量;queue_bytes 队列数据的总字节数)
     * @example 
     * @return array
     */
    public function statQueue()
    {
    }

    /**
     * 
     *删除队列。此方法与useQueue成对使用，useQueue创建队列，使用freeQueue销毁队列。销毁队列后队列中的数据会被清空。
     * @example 
     * @return 
     */
    public function freeQueue()
    {
    }

    /**
     * 
     *执行fork系统调用，启动进程(创建成功返回子进程的PID，创建失败返回false。可使用swoole_errno和swoole_strerror得到错误码和错误信息)
     * @example 
     * @return int
     */
    public function start()
    {
    }

    /**
     * 
     *向管道内写入数据
     * @example 
     * @param string $data 向管道内写入数据
     * @return int
     */
    public function write($data)
    {
    }

    /**
     * 
     *用于关闭创建的好的管道(有一些特殊的情况swoole_process对象无法释放，如果持续创建进程会导致连接泄漏。调用此函数就可以直接关闭管道，释放资源)
     * @example 
     * @return boolean
     */
    public function close()
    {
    }

    /**
     * 
     *从管道中读取数据
     * @example 
     * @param int $size 从管道中读取数据
     * @return int
     */
    public function read($size)
    {
    }

    /**
     * 
     *投递数据到消息队列中
     * @example 
     * @param string $data 投递数据到消息队列中
     * @return boolean
     */
    public function push($data)
    {
    }

    /**
     * 
     *从队列中取数据
     * @example 
     * @param int $size 从队列中取数据
     * @return string
     */
    public function pop($size)
    {
    }

    /**
     * 
     *退出子进程
     * @example 
     * @param int $exit_code 退出子进程
     * @return int
     */
    public function exit($exit_code)
    {
    }

    /**
     * 
     *执行一个外部程序，此函数是exec系统调用的封装(执行成功后，当前进程的代码段将会被新程序替换。子进程脱变成另外一套程序。父进程与当前进程仍然是父子进程关系)
     * @example 
     * @param string $exec_file 执行一个外部程序，此函数是exec系统调用的封装(执行成功后，当前进程的代码段将会被新程序替换。子进程脱变成另外一套程序。父进程与当前进程仍然是父子进程关系)
     * @param array $args 执行一个外部程序，此函数是exec系统调用的封装(执行成功后，当前进程的代码段将会被新程序替换。子进程脱变成另外一套程序。父进程与当前进程仍然是父子进程关系)
     * @return 
     */
    public function exec($exec_file, Array $args)
    {
    }

    /**
     * 
     *修改进程名称。此函数是swoole_set_process_name的别名
     * @example 
     * @param string $process_name 修改进程名称。此函数是swoole_set_process_name的别名
     * @return boolean
     */
    public function name($process_name)
    {
    }

}

