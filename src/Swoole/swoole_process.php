<?php
/**
* Swoole自动补全类(基于最新的4.2.9版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/11/28
*/

/**
*进程管理模块，用来替代PHP的pcntl扩展
*/
class swoole_process
{
    /**     
    *队列设置为非阻塞
    */
    const IPC_NOWAIT    =    256;

    /**     
    *master管道
    */
    const PIPE_MASTER    =    1;

    /**     
    *worker管道
    */
    const PIPE_WORKER    =    2;

    /**     
    *读管道
    */
    const PIPE_READ    =    3;

    /**     
    *写管道
    */
    const PIPE_WRITE    =    4;

    /**
     * @var int $pipe 
     * 进程管道
     * @access public
     */
    public $pipe;

    /**
     * @var callable $callback 
     * 回调函数
     * @access public
     */
    public $callback;

    /**
     * @var int $msgQueueId 
     * 消息队列ID
     * @access public
     */
    public $msgQueueId;

    /**
     * @var string $msgQueueKey 
     * 消息队列键
     * @access public
     */
    public $msgQueueKey;

    /**
     * @var int $pid 
     * 父进程ID
     * @access public
     */
    public $pid;

    /**
     * @var int $id 
     * 进程ID
     * @access public
     */
    public $id;

    /**
     * 
     *创建子进程
     * @example 
     * @param callable $callback 子进程创建成功后要执行的函数
     * @param boolean $redirect_stdin_and_stdout 重定向子进程的标准输入和输出。启用此选项后，在子进程内输出内容将不是打印屏幕，而是写入到主进程管道。读取键盘输入将变为从管道中读取数据。默认为阻塞读取
     * @param boolean $pipe_type 是否创建管道，启用$redirect_stdin_stdout后，此选项将忽略用户参数，强制为true。如果子进程内没有进程间通信，可以设置为 false
     * @return 
     */
    public function __construct(Callable $callback, bool $redirect_stdin_and_stdout, bool $pipe_type)
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
     *回收结束运行的子进程。
     * @example 
     * @param boolean $blocking 指定是否阻塞等待，默认为阻塞
     * @return 
     */
    public static  function wait(bool $blocking)
    {
    
    }

    /**
     * 
     *设置异步信号监听
     * @example 
     * @param int $signal_no 信号量
     * @param callable $callback 回调函数
     * @return 
     */
    public static  function signal(int $signal_no, Callable $callback)
    {
    
    }

    /**
     * 
     *高精度定时器，是操作系统setitimer系统调用的封装，可以设置微秒级别的定时器
     * @example 
     * @param int $usec 定时器间隔时间，单位为微秒。如果为负数表示清除定时器
     * @return 
     */
    public static  function alarm(int $usec)
    {
    
    }

    /**
     * 
     *向子进程发送信号
     * @example 
     * @param int $pid 进程ID
     * @param int $signal_no 信号量(默认的信号为SIGTERM，表示终止进程)
     * @return 
     */
    public static  function kill(int $pid, int $signal_no)
    {
    
    }

    /**
     * 
     *使当前进程脱变为一个守护进程
     * @example 
     * @param boolean $nochdir 为true表示不要切换当前目录到根目录
     * @param boolean $noclose 为true表示不要关闭标准输入输出文件描述符
     * @return 
     */
    public static  function daemon(bool $nochdir, bool $noclose)
    {
    
    }

    /**
     * 
     *设置CPU亲和性，可以将进程绑定到特定的CPU核上
     * @example 
     * @param array $cpu_settings 表示绑定哪些CPU核，如array(0,2,3)表示绑定CPU0/CPU2/CPU3
     * @return 
     */
    public static  function setaffinity(Array $cpu_settings)
    {
    
    }

    /**
     * 
     *设置管道读写操作的超时时间
     * @example 
     * @param double $seconds 单位为秒，支持浮点型，如1.5表示1s+500ms
     * @return 
     */
    public function setTimeout(double $seconds)
    {
    
    }

    /**
     * 
     *启用消息队列作为进程间通信
     * @example 
     * @param int $key 消息队列的key，默认会使用ftok(__FILE__, 1)作为KEY
     * @param int $mode 通信模式，默认为2，表示争抢模式，所有创建的子进程都会从队列中取数据
     * @return boolean
     */
    public function useQueue(int $key = 0, int $mode = 2): boolean
    {
    
    }

    /**
     * 
     *查看消息队列状态
     *返回字段：
     *queue_num 队列中的任务数量;queue_bytes 队列数据的总字节数
     * @example 
     * @return array
     */
    public function statQueue(): array
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
     * @return int
     */
    public function start(): int
    {
    
    }

    /**
     * 
     *向管道内写入数据
     * @example 
     * @param string $data 写入的数据
     * @return int
     */
    public function write(string $data): int
    {
    
    }

    /**
     * 
     *用于关闭创建的好的管道
     * @example 
     * @return boolean
     */
    public function close(): boolean
    {
    
    }

    /**
     * 
     *从管道中读取数据
     * @example 
     * @param int $size 是缓冲区的大小，默认为8192，最大不超过64K
     * @return string | bool
     */
    public function read(int $size): ?string
    {
    
    }

    /**
     * 
     *向消息队列推送数据
     * @example 
     * @param string $data 要投递的数据，长度受限与操作系统内核参数的限制。默认为8192，最大不超过65536
     * @return boolean
     */
    public function push(string $data): boolean
    {
    
    }

    /**
     * 
     *从消息队列中获取数据
     * @example 
     * @param int $size 表示获取数据的最大尺寸，默认为8192
     * @return string
     */
    public function pop(int $size): string
    {
    
    }

    /**
     * 
     *退出子进程
     * @example 
     * @param int $exit_code 退出进程的状态码，如果为0表示正常结束，会继续执行PHP的shutdown_function，其他扩展的清理工作;如果$status不为0，表示异常退出，会立即终止进程。不再执行PHP的shutdown_function，其他扩展的清理工作
     * @return int
     */
    public function exit(int $exit_code): int
    {
    
    }

    /**
     * 
     *执行一个外部程序，此函数是exec系统调用的封装
     * @example 
     * @param string $exec_file 指定可执行文件的绝对路径，如 /usr/bin/python
     * @param array $args 参数列表，如 array('test.py', 123)，相当与python test.py 123
     * @return boolean
     */
    public function exec(string $exec_file, Array $args): boolean
    {
    
    }

    /**
     * 
     *修改进程名称
     * @example 
     * @param string $process_name 进程名称
     * @return boolean
     */
    public function name(string $process_name): boolean
    {
    
    }

}

