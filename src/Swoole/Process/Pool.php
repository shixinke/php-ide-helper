<?php
/**
* Swoole自动补全类(基于最新的4.2.9版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/11/28
*/

/**
*进程池，基于Server的Manager模块实现。可管理多个工作进程。该模块的核心功能为进程管理，相比Process实现多进程，Process\Pool更加简单，封装层次更高，开发者无需编写过多代码即可实现进程管理功能
*/
namespace Swoole\Process;
class Pool
{
    /**
     * 
     *创建进程池
     * @example 
     * @param int $worker_num 工作进程数量
     * @param int $ipc_type 进程间通信的模式，默认为0表示不使用任何进程间通信特性(
设置为0时必须设置onWorkerStart回调，并且必须在onWorkerStart中实现循环逻辑，当onWorkerStart函数退出时工作进程会立即退出;
设置为SWOOLE_IPC_QUEUE表示使用系统消息队列通信，可设置$msgqueue_key指定消息队列的KEY，未设置消息队列KEY，将申请私有队列;设置为SWOOLE_IPC_SOCKET表示使用Socket进行通信，需要使用listen方法指定监听的地址和端口;
使用非0设置时，必须设置onMessage回调，onWorkerStart变更为可选)
     * @param int $msgqueue_key 消息队列的键
     * @return 
     */
    public function __construct(int $worker_num, int $ipc_type = 0, int $msgqueue_key = 0)
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
     *设置进程池回调函数
     * @example 
     * @param string $event_name 事件名称(为workerStart/workerStop/message三个事件)
     * @param callable $callback 回调函数(回调函数onWorkerStart/onWorkerStop，接受2个参数：Pool对象;WorkerId当前工作进程的编号，底层会对子进程进行标号，范围是[0-$worker_num);回调函数onMessage有两个参数：Pool对象,消息数据内容data)
     * @return 
     */
    public function on(string $event_name, Callable $callback)
    {
    
    }

    /**
     * 
     *监听SOCKET，必须在$ipc_mode为SWOOLE_IPC_SOCKET时才能使用
     * @example 
     * @param string $host 监听的地址，支持TCP和UnixSocket两种类型。127.0.0.1表示监听TCP地址，需要指定$port。unix:/tmp/php.sock监听UnixSocket地址
     * @param int $port 监听的端口，在TCP模式下需要指定
     * @param int $backlog 监听的队列长度
     * @return bool
     */
    public function listen(string $host, int $port = 0, int $backlog = 2048): bool
    {
    
    }

    /**
     * 
     *向对端写入数据，必须在$ipc_mode为SWOOLE_IPC_SOCKET时才能使用(此方法为内存操作，没有IO消耗;发送数据操作是同步阻塞IO)
     * @example $pool = new Swoole\Process\Pool(2, SWOOLE_IPC_SOCKET);
     * $pool->on("Message", function ($pool, $message) {echo "Message: {$message}
     * ";
     * $pool->write("hello ");
     * $pool->write("world ");
     * $pool->write("\n");
     * });
     * $pool->listen('127.0.0.1', 8089);
     * $pool->start();
     * 
     * @param string $data 写入的数据内容。可多次调用write，底层会在onMessage函数退出后将数据全部写入socket中，并close连接
     * @return 
     */
    public function write(string $data)
    {
    
    }

    /**
     * 
     *启动工作进程
     * @example 
     * @return bool
     */
    public function start(): bool
    {
    
    }

    /**
     * 
     *获取当前工作进程对象
     * @example $workerNum = 10;
     * $pool = new Swoole\Process\Pool($workerNum);
     * $pool->on("WorkerStart", function ($pool, $workerId) {
     * $process = $pool->getProcess();
     * $process->exec("/bin/sh", ["ls", '-l']);
     * });
     * @return \Swoole\Process
     */
    public function getProcess()
    {
    
    }

}

