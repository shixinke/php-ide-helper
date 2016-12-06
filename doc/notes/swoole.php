<?php
define('SWOOLEX_BASE', 4);               //使用BASE模式
define('SWOOLEX_THREAD', 2);             //使用线程模式
define('SWOOLEX_PROCESS', 3);            //使用进程模式
define('SWOOLEX_IPC_UNSOCK', 1);
define('SWOOLEX_IPC_MSGQUEUE', 2);
define('SWOOLEX_IPC_CHANNEL', 3);
define('SWOOLEX_SOCK_TCP', 1);           //创建tcp socket
define('SWOOLEX_SOCK_TCP6', 3);          //创建tcp ipv6 socket
define('SWOOLEX_SOCK_UDP', 2);           //创建udp socket
define('SWOOLEX_SOCK_UDP6', 4);          //创建udp ipv6 socket
define('SWOOLEX_SOCK_UNIX_DGRAM', 5);
define('SWOOLEX_SOCK_UNIX_STREAM', 6);
define('SWOOLEX_TCP', 1);
define('SWOOLEX_TCP6', 3);
define('SWOOLEX_UDP', 2);
define('SWOOLEX_UDP6', 4);
define('SWOOLEX_UNIX_DGRAM', 5);
define('SWOOLEX_UNIX_STREAM', 6);
define('SWOOLEX_SOCK_SYNC', 0);
define('SWOOLEX_SOCK_ASYNC', 1);
define('SWOOLEX_SYNC', 2048);
define('SWOOLEX_ASYNC', 1024);
define('SWOOLEX_KEEP', 4096);
define('SWOOLEX_SSL', 512);
define('SWOOLEX_SSLv3_METHOD', 1);
define('SWOOLEX_SSLv3_SERVER_METHOD', 2);
define('SWOOLEX_SSLv3_CLIENT_METHOD', 3);
define('SWOOLEX_SSLv23_METHOD', 0);
define('SWOOLEX_SSLv23_SERVER_METHOD', 4);
define('SWOOLEX_SSLv23_CLIENT_METHOD', 5);
define('SWOOLEX_TLSv1_METHOD', 6);
define('SWOOLEX_TLSv1_SERVER_METHOD', 7);
define('SWOOLEX_TLSv1_CLIENT_METHOD', 8);
define('SWOOLEX_TLSv1_1_METHOD', 9);
define('SWOOLEX_TLSv1_1_SERVER_METHOD', 10);
define('SWOOLEX_TLSv1_1_CLIENT_METHOD', 11);
define('SWOOLEX_TLSv1_2_METHOD', 12);
define('SWOOLEX_TLSv1_2_SERVER_METHOD', 13);
define('SWOOLEX_TLSv1_2_CLIENT_METHOD', 14);
define('SWOOLEX_DTLSv1_METHOD', 15);
define('SWOOLEX_DTLSv1_SERVER_METHOD', 16);
define('SWOOLEX_DTLSv1_CLIENT_METHOD', 17);
define('SWOOLEX_EVENT_READ', 512);
define('SWOOLEX_EVENT_WRITE', 1024);
define('SWOOLEX_VERSION', '1.8.7');
define('SWOOLEX_AIO_BASE', 0);
define('SWOOLEX_AIO_LINUX', 1);
define('SWOOLEX_FILELOCK', 2);                //创建文件锁
define('SWOOLEX_MUTEX', 3);                   //创建互斥锁
define('SWOOLEX_SEM', 4);                     //创建信号量
define('SWOOLEX_RWLOCK', 1);                  //创建读写锁
define('SWOOLEX_SPINLOCK', 5);                //创建自旋锁

class swooleX_server
{
    /**
     * @var $setting array:
     * @description:通过swooleX_server:set()设置的参数会保存到setting属性上
     * @example
     *  $serv = new swooleX_server('127.0.0.1', 9501);
     *  $serv->set(array('worker_num' => 4));
     *  echo $serv->setting['worker_num'];
     */
    public $setting = array();

    /**
     * @var int $master_pid：主进程ID
     *
     * 注：只能在onStart/onWorkerStart之后获取到
     */
    public $master_pid;

    /**
     * @var int $manager_pid:管理进程ID
     *
     * 注：只能在onStart/onWorkerStart之后获取到
     */
    public $manager_pid;

    /**
     * @var int $worker_pid:当前工作进程ID(操作系统进程)
     */
    public $worker_pid;

    /**
     * @var int $worker_id：当前工作进程(包括worker进程和task进程)编号
     *
     * Worker进程ID范围是[0, $serv->setting['worker_num'])
     * task进程ID范围是[$serv->setting['worker_num'], $serv->setting['worker_num'] + $serv->setting['task_worker_num'])
     */
    public $worker_id;

    /**
     * @var boolean $taskworker:当前进程是否是task工作进程
     *
     * true表示当前的进程是Task工作进程
     * false表示当前的进程是Worker进程
     */
    public $taskworker;

    /**
     * @var iterator $connections：TCP连接抚抚今迭代器
     *
     * 注：注意$connections属性是一个迭代器对象，不是PHP数组，所以不能用var_dump或者数组下标来访问，只能通过foreach进行遍历操作
     *
     * @example:
     * foreach($server->connections as $fd)
     * {
     *      $server->send($fd, "hello");
     * }
     *
     * echo "当前服务器共有 ".count($server->connections). " 个连接\n";
     */
    public $connections;

    /**
     * swooleX_server初始化方法
     * @param string $host:监听的服务器IP(如127.0.0.1表示本机，0.0.0.0表示监听所有地址)
     * @param int $port:监听服务器端口(如9501)
     * @param int $mode：运行模式(共有SWOOLEX_BASE基本、SWOOLEX_PROCESS多进程、SWOOLEX_THREAD三种模式)
     * @param int $socket_type:socket类型(支持TCP/UDP、TCP6/UDP6、UnixSock Stream/Dgram 6种)
     */
    public function __construct(string $host, int $port, int $mode = SWOOLEX_PROCESS, int $socket_type = SWOOLEX_SOCK_TCP)
    {

    }

    /**
     * 设置swooleX_server运行时的参数
     * @param array $setting
     *
     * 可选参数：
     * reactor_num
     * worker_num
     * max_request
     * max_conn (max_connection)
     * task_worker_num
     * task_ipc_mode
     * task_max_request
     * task_tmpdir
     * dispatch_mode
     * message_queue_key
     * daemonize
     * backlog
     * log_file
     * log_level
     * heartbeat_check_interval
     * heartbeat_idle_time
     * open_eof_check
     * open_eof_split
     * package_eof
     * open_length_check
     * package_length_type
     * package_max_length
     * open_cpu_affinity
     * cpu_affinity_ignore
     * open_tcp_nodelay
     * tcp_defer_accept
     * ssl_cert_file
     * ssl_method
     * user
     * group
     * chroot
     * pipe_buffer_size
     * buffer_output_size
     * enable_unsafe_event
     * discard_timeout_request
     * enable_reuse_port
     * ssl_ciphers

     * @example:
     * $serv->set(array(
     *   'reactor_num' => 2, //reactor thread num
     *   'worker_num' => 4,    //worker process num
     *   'backlog' => 128,   //listen backlog
     *   'max_request' => 50,
     *   'dispatch_mode' => 1,
     * ));
     */
    public function set(array $setting):bool
    {

    }

    /**
     * 绑定事件(为事件注册函数)
     * @param string $event:绑定的事件名称
     * @param mixed $callback：函数名称
     */
    public function on(string $event, mixed $callback)
    {

    }

    /**
     * 添加监听端口
     * @param string $host:监听的服务器IP
     * @param int $port:监听的服务器商品
     * @param int $socket_type：监听的socket类型
     */
    public function addlistener(string $host, int $port, $socket_type = SWOOLEX_SOCK_TCP)
    {

    }

    /**
     * 添加监听端口(是addlistener的别名)
     * @param string $host:监听的服务器IP
     * @param int $port:监听的服务器商品
     * @param int $socket_type：监听的socket类型
     */
    public function listen(string $host, int $port, $socket_type = SWOOLEX_SOCK_TCP)
    {

    }

    /**
     * 添加一个自定义的工作进程
     * @param swooleX_process $process：工作进程对象
     */
    public function addProcess(swooleX_process $process)
    {

    }

    /**
     * 启动server
     */
    public function start()
    {

    }

    /**
     * 重启所有工作进程
     * @param bool $only_reload_taskworkrer：是否只重启task工作进程
     */
    public function reload(bool $only_reload_taskworkrer = false)
    {

    }

    /**
     * 关闭服务器
     */
    public function shutdown()
    {

    }

    /**
     * 停止当前worker进程
     */
    public function stop()
    {

    }

    /**
     * 添加定时器
     * @param int $interval:时间
     * @param mixed $callback：回调函数
     */
    public function tick(int $interval, mixed $callback)
    {

    }

    /**
     * 向客户端发送数据
     * @param int $fd
     * @param string $data：要发送的数据
     * @param int $from_id
     * @return bool
     */
    public function send(int $fd, string $data, int $from_id = 0):bool
    {

    }

    /**
     * 向任意客户端发送UDP数据包
     * @param string $ip：客户端IP
     * @param int $port：客户端端口
     * @param string $data：要发送的数据
     * @param int $server_socket：服务器可能会同时监听多个UDP端口，此参数可以指定使用哪个端口发送数据包
     */
    public function sendto(string $ip, int $port, string $data, int $server_socket = -1)
    {

    }

    /**
     * 阻塞的向客户端发送数据
     * @param int $fd
     * @param string $data：要发送的数据
     */
    public function sendwait(int $fd, string $data)
    {

    }

    /**
     * 检测fd对应的TCP连接是否存在
     * @param int $fd：连接句柄
     * @return bool
     */
    public function exists(int $fd):bool
    {

    }

    public function protect()
    {

    }

    /**
     * 向客户端发送文件
     * @param int $fd：TCP连接句柄
     * @param string $filename：要发送的文件路径
     */
    public function sendfile(int $fd, string $filename)
    {

    }

    /**
     * 关闭客户端连接
     * @param int $fd：连接句柄
     * @param bool $reset：是否强制关闭
     * @return bool
     */
    public function close(int $fd, bool $reset = false):bool
    {

    }

    /**
     * 投递一个任务到task_worker连接池中
     * @param mixed $data：要投递的任务数据(除资源型外的其他类型)
     * @param int $dst_worker_id：要投递的worker进程ID
     * @param mixed|null $callback：回调函数
     * @return int
     */
    public function task(mixed $data, int $dst_worker_id= -1, mixed $callback = null):int
    {

    }

    /**
     * 以阻塞的形式投递一个任务到task_worker连接池中
     * @param mixed $data：要投递的任务数据(除资源型外的其他类型)
     * @param float $timeout：超时时间
     * @param int $dst_worker_id：要投递的worker进程ID
     * @return int
     */
    public function taskwait(mixed $data, float $timeout = 0.5, int $dst_worker_id = -1)
    {

    }

    /**
     * 用于在task进程中通知worker进程任务已完成
     * @param mixed $data：完成时发送的数据
     */
    public function finish(mixed $data)
    {

    }

    /**
     * 获取最近一次操作错误的错误码
     * 返回的错误码：
     *  1001 连接已经被Server端关闭了，出现这个错误一般是代码中已经执行了$serv->close()关闭了某个连接，但仍然调用$serv->send()向这个连接发送数据
    1002 连接已被Client端关闭了，Socket已关闭无法发送数据到对端
    1003 正在执行close，onClose回调函数中不得使用$serv->send()
    1004 连接已关闭
    1005 连接不存在，传入$fd 可能是错误的
    1008 发送缓存区已满无法执行send操作，出现这个错误表示这个连接的对端无法及时收数据导致发送缓存区已塞满
     */
    public function getLastError()
    {

    }

    /**
     *检测所有服务器连接，并找出已经超时的连接
     * @param bool closed：是否关闭超时的连接
     */
    public function heartbeat(bool $closed):array
    {

    }

    /**
     * 获取客户端连接信息
     * @param int $fd：连接描述符
     * @param int $from_id：来自哪个线程ID
     * @param bool $ignore_close：是否忽略已经关闭的连接
     * @return bool or array
     * 返回数据字段：
     *  from_id 来自哪个reactor线程
    server_fd 来自哪个server socket 这里不是客户端连接的fd
    server_port 来自哪个Server端口
    remote_port 客户端连接的端口
    remote_ip 客户端连接的ip
    connect_time 连接到Server的时间，单位秒
    last_time 最后一次发送数据的时间，单位秒
     */
    public function connection_info(int $fd, int $from_id = -1, bool $ignore_close = false)
    {

    }

    /**
     * 用来遍历所有客户端连接
     * @param int $start_fd：开始的fd
     * @param int $pagesize:每页显示的数量(不得超过100)
     */
    public function connection_list(int $start_fd = 0, int $pagesize = 10)
    {

    }

    public function getClientList()
    {

    }

    public function getClientInfo()
    {

    }

    /**
     * 在指定时间后执行某个回调函数
     * @param int $timeout：指定的时间，单位是毫秒
     * @param mixed $callback：回调函数
     */
    public function after(int $timeout, mixed $callback)
    {

    }

    /**
     * 清除定时器
     * @param int $timerId：定时器的ID
     */
    public function clearTimer(int $timerId)
    {

    }

    /**
     * 延迟执行一个PHP函数
     * @param mixed $callback：要执行的函数变量，可以是数组、字符串或匿名函数
     */
    public function defer(callable $callback)
    {

    }

    /**
     * 向任意worker进程或task进程发送消息
     * @param string $message:要发送的消息
     * @param int $dst_worker_id：目标进程ID
     */
    public function sendMessage(string $message, int $dst_worker_id):bool
    {

    }

    /**
     * 得到当前server的活动TCP连接数
     * array (
    'start_time' => 1409831644,    //服务器启动的时间
    'connection_num' => 1,         //当前连接数
    'accept_count' => 1,           //接收的连接数
    'close_count' => 0,            //关闭的连接数
    'tasking_num'=>0,              //正在排队的任务数
    'task_queue_num' => 10,        //消息队列中的任务数
    'task_queue_bytes' => 65536    //消息队列的内存占用字节数
    );
     */
    public function stats():array
    {

    }

    public function getSocket()
    {

    }

    /**
     * 将连接绑定到某个用户定义的ID
     * @param int $fd：连接的文件描述符
     * @param int $uid：用户定义的ID
     */
    public function bind(int $fd, int $uid)
    {

    }
}

class swooleX_timer
{
    /**
     * 设置一个间隔定时器
     * @param int $ms：间隔时间(单位是毫秒)
     * @param mixed $callback(回调函数)
     * @param mixed|null $param(参数)
     */
    public function tick(int $ms, mixed $callback, mixed $param = null)
    {

    }

    /**
     * 在指定的时间后执行函数
     * @param int $ms：时间(单位是毫秒)
     * @param mixed $callback(回调函数)
     */
    public function after(int $after_time_ms, mixed $callback_function)
    {

    }

    /**
     * 检查某个定时器是否存在
     * @param int $timer_id:定时器ID
     */
    public function exists(int $timer_id)
    {

    }

    /**
     * 删除指定的定时器
     * @param int $timer_id：定时器ID
     */
    public function del(int $timer_id)
    {

    }

    /**
     * 删除指定的定时器
     * @param int $timer_id：定时器ID
     */
    public function clear(int $timer_id)
    {

    }
}

class swooleX_connection_iterator
{
    public function rewind()
    {

    }

    public function next()
    {

    }

    public function current()
    {

    }

    public function key()
    {

    }

    public function valid()
    {

    }

    public function count()
    {

    }
}

class swooleX_server_port
{
    public function __destruct()
    {

    }

    public function set()
    {

    }

    public function on()
    {

    }
}

class swooleX_client
{
    const MSG_WAITALL = 256;
    const MSG_DONTWAIT = 64;
    const MSG_PEEK = 2;
    const MSG_OOB = 1;
    protected $errCode = 0;
    protected $sock = 0;
    protected $reuse = false;

    /**
     * 创建tcp客户端对象
     * @param int $sock_type：socket类型
     * @param int $is_sync：是同步阻塞还是异步阻塞
     * @param string $key：用于连接的key
     */
    public function __construct(int $sock_type, int $is_sync = SWOOLEX_SOCK_SYNC, string $key)
    {

    }

    /**
     * 设置客户端参数
     * @param array $setting:设置的参数
     */
    public function set(array $setting)
    {

    }

    /**
     * 连接远程服务器
     * @param string $host：远程服务器IP
     * @param int $port：端口
     * @param float $timeout：超时时间
     * @param int $flag：是否启用udp连接
     */
    public function connect(string $host, int $port, float $timeout = 0.1, int $flag = 0)
    {

    }

    /**
     * 从服务器端接收数据
     * @param int $size:接受数量的大小
     * @param int $flags：可以接收一些特殊的SOCKET接收设置
     */
    public function recv(int $size = 65535, int $flags = 0)
    {

    }

    /**
     * 发送数据到远程服务器
     * @param string $data:发送的数据
     */
    public function send(string $data)
    {

    }

    /**
     * 向任意主机发送UDP数据包
     * @param string $ip：客户端IP
     * @param int $port：客户端端口
     * @param string $data：要发送的数据
     */
    public function sendto(string $ip, int $port, string $data)
    {

    }

    /**
     * 向服务器发送文件
     * @param string $filename:发送的文件
     */
    public function sendfile(string $filename)
    {

    }

    /**
     * 调用此方法会从事件循环中移除当前socket的可读监听，停止接收数据
     */
    public function sleep()
    {

    }

    /**
     * 调用此方法会重新监听可读事件，将socket连接从睡眠中唤醒
     */
    public function wakeup()
    {

    }

    /**
     * 返回swooleX_client的连接状态
     */
    public function isConnected():bool
    {

    }

    /**
     * 用于获取客户端socket的本地host:port，必须在连接之后才可以使用
     */
    public function getsockname()
    {

    }

    /**
     * 获取对端socket的IP地址和端口
     */
    public function getpeername()
    {

    }

    /**
     * 关闭连接
     */
    public function close():bool
    {

    }

    /**
     * 绑定事件(为事件注册函数)
     * @param string $event:绑定的事件名称
     * @param mixed $callback：函数名称
     * 事件：connect连接，receive：接受数据，close：关闭连接，error:发生错误
     */
    public function on(string $event, mixed $callback)
    {

    }

    /**
     * 调用此方法可以得到底层的socket句柄
     */
    public function getSocket()
    {

    }
}

class swooleX_process
{
    /**
     * 创建子进程
     * @param mixed $function：子进程创建成功后要执行的函数
     * @param bool $redirect_stdin_stdout：重定向子进程的标准输入和输出
     * @param bool $create_pipe：是否创建管道
     */
    public function __construct(mixed $function, $redirect_stdin_stdout = false, $create_pipe = true)
    {

    }

    /**
     * 回收结束运行的子进程。
     * @param bool $blocking:是否阻塞等待
     * @return array
     */
    public function wait(bool $blocking = true):array
    {

    }

    /**
     * 设置异步信号监听
     * @param int $signo：信号量
     * @param mixed $callback：监听函数
     */
    public function signal(int $signo, mixed $callback)
    {

    }

    /**
     * 向子进程发送信号
     * @param int $pid：进程ID
     * @param int $signo：信号量
     */
    public function kill(int $pid, $signo = SIGTERM)
    {

    }

    /**
     * 使当前进程脱变为一个守护进程
     * @param bool $nochdir:为true表示不修改当前目录。默认false表示将当前目录切换到“/”
     * @param bool $noclose:默认false表示将标准输入和输出重定向到/dev/null
     */
    public function daemon(bool $nochdir = false, bool $noclose = false):bool
    {

    }

    /**
     * 设置CPU亲和性，可以将进程绑定到特定的CPU核上
     * @param array $cpu_set:接受一个数组参数表示绑定哪些CPU核，如array(0,2,3)表示绑定CPU0/CPU2/CPU3
     */
    public function setaffinity(array $cpu_set):bool
    {

    }

    /**
     * 启用消息队列作为进程间通信
     * @param int $msgkey:是消息队列的key，默认会使用ftok
     * @param int $mode:通信模式，默认为2，表示争抢模式，所有创建的子进程都会从队列中取数据
     */
    public function useQueue(int $msgkey = 0, int $mode = 2):bool
    {

    }

    /**
     * 查看消息队列状态
     * 返回字段：
     *   queue_num 队列中的任务数量
    queue_bytes 队列数据的总字节数
     */
    public function statQueue():array
    {

    }

    /**
     * 删除队列
     */
    public function freeQueue()
    {

    }

    /**
     * 执行fork系统调用，启动进程
     * @return int
     */
    public function start():int
    {

    }

    /**
     * 向管道内写入数据
     * @param string $data:写入的数据
     */
    public function write(string $data)
    {

    }

    /**
     * 从管道中读取数据
     * @param int $buffer_size:缓冲区大小
     */
    public function read(int $buffer_size=8192)
    {

    }

    /**
     * 向消息队列推送数据
     * @param string $data：推送的数据
     */
    public function push(string $data)
    {

    }

    /**
     * 从消息队列中获取数据
     * @param int $maxsize:表示获取数据的最大尺寸
     */
    public function pop(int $maxsize = 8192)
    {

    }

    /**
     * 执行一个外部程序，此函数是exec系统调用的封装
     * @param string $execfile:指定可执行文件的绝对路径
     * @param array $args:参数列表
     */
    public function exec(string $execfile, array $args):bool
    {

    }

    /**
     * 修改进程名称
     * @param string $new_process_name:进程名称
     */
    public function name(string $new_process_name)
    {

    }

    /**
     * 退出子进程
     * @param int $status:退出进程的状态码
     */
    public function exit(int $status=0)
    {

    }

    /**
     * 用于关闭创建的好的管道
     */
    public function close():bool
    {

    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
    }
}

class swooleX_table implements Iterator
{
    const TYPE_INT = 1;
    const TYPE_FLOAT = 6;
    const TYPE_STRING = 7;
    /**
     * 创建内在表
     * @param int $size：内存表的行数(必须是2的指数)
     */
    public function __construct(int $size)
    {

    }

    /**
     * 内存表增加一列
     * @param string $name：字段名称
     * @param int $type：类型(使用类常量TYPE_INT, TYPE_FLOAT, TYPE_STRING)
     * @param int $size:字符串最大长度
     */
    public function column(string $name, int $type, int $size)
    {

    }

    /**
     * 创建内存表(在使用column创建内存表结构时执行)
     */
    public function create()
    {

    }

    public function destroy()
    {

    }

    /**
     * 设置行的数据
     * @param string $key：数据键
     * @param array $data：数据(要跟column创建的内存表结构来)
     */
    public function set(string $key, array $data)
    {

    }

    /**
     *获取一行数据
     *  @param string $key：数据键
     */
    public function get(string $key)
    {

    }

    public function count()
    {

    }

    /**
     * 删除数据
     * @param string $key：数据键
     */
    public function del(string $key)
    {

    }

    /**
     * 检查table中是否存在某一个key
     * @param string $key:数据键
     */
    public function exist(string $key)
    {

    }

    /**
     * 原子自增操作
     * @param string $key：指定行的key
     * @param string $column：指定列名
     * @param mixed $incrby：增量
     */
    public function incr(string $key, string $column, $incrby = 1)
    {

    }

    /**
     * 原子自减操作
     * @param string $key：指定行的key
     * @param string $column：指定列名
     * @param mixed $incrby：减量
     */
    public function decr(string $key, string $column, $decrby = 1)
    {

    }

    /**
     * 对内存操作进行加锁操作
     */
    public function lock()
    {

    }

    /**
     * 对内存表操作进行释放锁操作
     */
    public function unlock()
    {

    }

    public function current()
    {

    }

    public function key()
    {

    }

    public function next()
    {

    }

    public function rewind()
    {

    }

    public function valid():bool
    {

    }


}

class swooleX_lock
{
    /**
     * 创建锁
     * @param int $type：锁类型
     * @param string|null $lockfile：锁文件所有位置(当锁类型为文件锁时)
     */
    public function __construct(int $type, string $lockfile = null)
    {

    }

    /**
     * 加锁操作
     */
    public function lock()
    {

    }

    /**
     * 非阻塞的加锁操作
     */
    public function trylock()
    {

    }

    /**
     * 锁定读
     */
    public function lock_read()
    {

    }

    /**
     * 非阻塞式锁定读
     */
    public function trylock_read()
    {

    }

    /**
     * 释放锁操作
     */
    public function unlock()
    {

    }

    public function __destruct()
    {

    }


}

class swooleX_atomic
{
    /**
     * 初始化一个计数器对象
     * @param int $init：初始化值
     */
    public function __construct(int $init = 0)
    {

    }

    /**
     * 增加计数
     * @param int $add_value：增加的值
     */
    public function add(int $add_value)
    {

    }

    /**
     * 减少计数
     * @param int $sub_value：减少的值
     */
    public function sub(int $sub_value)
    {

    }

    /**
     * 获取当前计数的值
     */
    public function get()
    {

    }

    /**
     * 将当前值设置为指定的数字
     * @param int $value:设置的值
     */
    public function set(int $value)
    {

    }

    /**
     * 如果当前计数器的值与比较的值的相等，则设置它为新的值
     * @param int $cmp_value：用于比较的值
     * @param int $set_value：设置的新的值
     */
    public function cmpset(int $cmp_value, int $set_value):bool
    {

    }
}

class swooleX_http_server extends swooleX_server
{
    /**
     * 设置此选项后，服务器会自动将请求的GET、POST、COOKIE等数据设置到PHP的$_GET/$_POST/$_COOKIE等超全局变量中。
     * @param int $flags
     * @param int $flags
     * 默认为HTTP_GLOBAL_ALL表示设置所有的超全局变量
     * 注：不建议使用
     */
    public function setGlobal(int $flags)
    {

    }
}

class swooleX_http_request
{
    /**
     * 请求头
     * @var array header
     * 每个key都是小写
     */
    public $header = array();
    /**
     * 请求相当的服务器信息
     * @var array $server：相当于$_SERVER
     *
     */
    public $server = array();
    /**
     * get请求参数
     * @var array get
     */
    public $get = array();
    /**
     * post请求数据
     * @var array post
     */
    public $post = array();
    /**
     * @var array $files:请求中的文件上传信息
     *  name 浏览器上传时传入的文件名称
    type MIME类型
    tmp_name 上传的临时文件，文件名以/tmp/swoolex.upfile开头
    error：上传错误代码
    size 文件尺寸
     */
    public $files = array();
    /**
     * 请求中的cookie数据
     * @var array cookie
     */
    public $cookie = array();

    /**
     * 获取请求的原始数据
     * @return string
     */
    public function rawcontent():string
    {

    }

    public function __destruct()
    {

    }
}

class swooleX_http_response
{
    /**
     * 设置cookie
     * @param string $key:cookie键名
     * @param string $value:cookie键值
     * @param int $expire：cookie有效期
     * @param string $path：cookie存放位置
     * @param string $domain:cookie所在的域名
     * @param bool $secure：是否使用ssl安全的加密
     * @param bool $httponly：是否只读
     */
    public function cookie(string $key, string $value = '', int $expire = 0 , string $path = '/', string $domain  = '', bool $secure = false , bool $httponly = false)
    {

    }

    /**
     * 设置最原始的cookie信息
     * @param string $cookie_data:cookie数据
     */
    public function rawcookie(string $cookie_data)
    {

    }

    /**
     * 设置http状态码
     * @param int $http_status_code：HTTP状态码
     */
    public function status(int $http_status_code)
    {

    }

    /**
     * 启用gzip压缩
     * @param int $level：压缩等级(1-9)
     */
    public function gzip(int $level)
    {

    }

    /**
     * 设置响应头信息
     * @param string $key：响应头的key
     * @param string $value:响应头的值
     */
    public function header(string $key, string $value)
    {

    }

    /**
     * 启用Http Chunk分段向浏览器发送相应内容
     * @param string $data:发送的内容
     */
    public function write(string $data)
    {

    }

    /**
     * 发送响应体，并结束当前请求
     * @param string $data:响应体内容
     */
    public function end(string $data)
    {

    }

    /**
     * 发送文件给浏览器
     * @param string $filename:文件路径
     */
    public function sendfile(string $filename)
    {

    }

    public function __destruct()
    {

    }
}

class swooleX_buffer
{
    /**
     * buffer初始化
     * @param int $size：大小
     */
    public function __construct(int $size = 128)
    {

    }

    /**
     * 从缓冲区取出内容
     * @param int $offset：内容偏移量
     * @param int $length：数据长度
     * @param bool $remove：是否从缓冲区中删除取出的这段数据
     */
    public function substr(int $offset, int $length = -1, bool $remove = false)
    {

    }

    /**
     * 从缓冲区读内容
     * @param int $offset：内容偏移量
     * @param int $length：数据长度
     *
     */
    public function read(int $offset, int $length = -1)
    {

    }

    /**
     * 往缓冲区中写入内容
     * @param int $offset：写入的位置偏移量
     * @param string $data：写入的内容
     */
    public function write(int $offset, string $data)
    {

    }

    /**
     *将数据添加到缓冲区末尾
     * @param string $data：数据
     */
    public function append(string $data)
    {

    }

    /**
     * 给缓冲区扩容
     * @param int $new_size：为新缓冲区大小
     */
    public function expand(int $new_size)
    {

    }

    /**
     * 清理缓冲区数据
     */
    public function clear()
    {

    }

    public function __destruct()
    {

    }
}

class swooleX_websocket_server extends swooleX_server
{
    public function __construct()
    {

    }

    /**
     * @param int $fd:客户端连接的ID
     * @param string $data:要发送的数据内容
     * @param int $opcode:指定发送数据内容的格式，默认为文本
     * @param bool $finish:发送成功返回true，发送失败返回false
     */
    public function push(int $fd, string $data, int $opcode = 1, bool $finish = true)
    {

    }

    /**
     * 绑定事件(为事件注册函数)
     * @param string $event:绑定的事件名称(主要增加open,handshake,message三个事件)
     * @param mixed $callback：函数名称
     */
    public function on(string $event, mixed $callback)
    {

    }

    /**
     * 打包数据
     * @param string $data
     * @param int $opcode
     * @param bool $finish
     * @param int $mask
     */
    public function pack(string $data, int $opcode = 1, bool $finish = true, int $mask)
    {

    }

    /**
     * 参数据进行解包
     * @param string $data
     */
    public function unpack(string $data)
    {

    }


}

class swooleX_websocket_frame
{

}

class swooleX_mysql
{
    public function __construct()
    {

    }

    /**
     * 连接mysql服务器
     * @param array $serverConfig:服务器配置
     * @param callable $callback:连接成功后的回调函数
     * @example
     * 回调函数：function onConnect(swooleX_mysql $db, bool $result);
     */
    public function connect(array $serverConfig, callable $callback)
    {

    }

    /**
     * 执行sql语句
     * @param string $sql:sql语句
     * @param callable $callback：回调函数
     * @example
     * 回调函数：function onSQLReady(swooleX_mysqli $link, mixed $result);
     *
     * 注：执行失败，$result为false，读取$link对象的error属性获得错误信息，errno属性获得错误码
     *    执行成功，SQL为非查询语句，$result为true，读取$link对象的affected_rows属性获得影响的行数，insert_id属性获得Insert操作的自增ID
     *    执行成功，SQL为查询语句，$result为结果数组
     */
    public function query(string $sql, callable $callback)
    {

    }

    /**
     * 设置事件回调函数
     * @param string $event：事件名称(目前仅支持Close事件)
     * @param callable $callback：回调函数
     */
    public function on(string $event, callable $callback)
    {

    }

    /**
     * 关闭mysql连接
     */
    public function close()
    {

    }

    /**
     * 析构函数
     */
    public function __destruct()
    {

    }
}

class swooleX_mysql_exception extends Exception
{

}

class swooleX_redis
{
    public function __construct()
    {

    }

    public function __destruct()
    {

    }

    /**
     * 注册事件回调函数
     * @param string $event_name：事件名称(目前仅支持关闭连接事件close和接收订阅消息事件message两个事件)
     * @param callable $callback：回调函数
     */
    public function on(string $event_name, callable $callback)
    {

    }

    /**
     * 连接redis服务器
     * @param string $host：服务器IP
     * @param int $port：服务器端口
     * @param callable $callback：回调函数(返回redis的连接对象和result)
     */
    public function connect(string $host, int $port, callable $callback)
    {

    }

    /**
     * 关闭redis连接
     */
    public function close()
    {

    }

    /**
     * 执行redis命令
     * @param string $command：命令
     * @param array $params：参数
     */
    public function __call(string $command, array $params)
    {

    }
}

