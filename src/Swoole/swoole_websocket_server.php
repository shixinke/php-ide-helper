<?php
/**
* Swoole自动补全类(基于最新的2.0.6版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2017/02/17
*/

/**
*swoole websocket服务器
*/
class swoole_websocket_server extends swoole_http_server
{
    /**
     * 
     *为事件绑定某个函数
     * @example 
     * @param string $event_name 为事件绑定某个函数
     * @param callable $callback 为事件绑定某个函数
     * @return 
     */
    public function on($event_name, Callable $callback)
    {
    }

    /**
     * 
     *向websocket客户端连接推送数据，长度最大不得超过2M
     * @example 
     * @param int $fd 向websocket客户端连接推送数据，长度最大不得超过2M
     * @param string $data 向websocket客户端连接推送数据，长度最大不得超过2M
     * @param int $opcode 向websocket客户端连接推送数据，长度最大不得超过2M
     * @param boolean $finish 向websocket客户端连接推送数据，长度最大不得超过2M
     * @return 
     */
    public function push($fd, $data, $opcode, $finish)
    {
    }

    /**
     * 
     *检测fd对应的连接是否存在
     * @example 
     * @param int $fd 检测fd对应的连接是否存在
     * @return bool
     */
    public function exist($fd)
    {
    }

    /**
     * 
     *打包websocket数据帧
     * @example 
     * @param string $data 打包websocket数据帧
     * @param  mixed $opcode 
     * @param  mixed $finish 
     * @param  mixed $mask 
     * @return 
     */
    public static  function pack($data, $opcode, $finish, $mask)
    {
    }

    /**
     * 
     *解包websocket数据帧
     * @example 
     * @param string $data 解包websocket数据帧
     * @return 
     */
    public static  function unpack($data)
    {
    }

    /**
     * 
     *启动websocket server
     * @example 
     * @return bool
     */
    public function start()
    {
    }

    /**
     * 
     *创建一个swoole tcp/udp server对象
     * @example 
     * @param string $host 创建一个swoole tcp/udp server对象
     * @param int $port 创建一个swoole tcp/udp server对象
     * @param int $mode 创建一个swoole tcp/udp server对象
     * @param int $sock_type 创建一个swoole tcp/udp server对象
     * @return 
     */
    public function __construct($host, $port, $mode, $sock_type)
    {
    }

    /**
     * 
     *监听一个新的Server端口，此方法是addlistener的别名
     * @example 
     * @param string $host 监听一个新的Server端口，此方法是addlistener的别名
     * @param int $port 监听一个新的Server端口，此方法是addlistener的别名
     * @param int $sock_type 监听一个新的Server端口，此方法是addlistener的别名
     * @return 
     */
    public function listen($host, $port, $sock_type)
    {
    }

    /**
     * 
     *监听一个新的Server端口，此方法是addlistener的别名
     * @example 
     * @param string $host 监听一个新的Server端口，此方法是addlistener的别名
     * @param int $port 监听一个新的Server端口，此方法是addlistener的别名
     * @param int $sock_type 监听一个新的Server端口，此方法是addlistener的别名
     * @return 
     */
    public function addlistener($host, $port, $sock_type)
    {
    }

    /**
     * 
     *设置选项
     * @example 
     * @param array $settings 设置选项
     * @return 
     */
    public function set(Array $settings)
    {
    }

    /**
     * 
     *向客户端发送数据
     * @example 
     * @param int $fd 向客户端发送数据
     * @param string $send_data 向客户端发送数据
     * @param int $reactor_id 向客户端发送数据
     * @return bool
     */
    public function send($fd, $send_data, $reactor_id)
    {
    }

    /**
     * 
     *向任意的客户端IP:PORT发送UDP数据包
     * @example 
     * @param string $ip 向任意的客户端IP:PORT发送UDP数据包
     * @param int $port 向任意的客户端IP:PORT发送UDP数据包
     * @param string $send_data 向任意的客户端IP:PORT发送UDP数据包
     * @param int $server_socket 向任意的客户端IP:PORT发送UDP数据包
     * @return bool
     */
    public function sendto($ip, $port, $send_data, $server_socket)
    {
    }

    /**
     * 
     *阻塞地向客户端发送数据
     * @example 
     * @param int $conn_fd 阻塞地向客户端发送数据
     * @param string $send_data 阻塞地向客户端发送数据
     * @return bool
     */
    public function sendwait($conn_fd, $send_data)
    {
    }

    /**
     * 
     *用于保护某些连接不被心跳线程切断
     * @example 
     * @param int $fd 用于保护某些连接不被心跳线程切断
     * @param bool $is_protected 用于保护某些连接不被心跳线程切断
     * @return 
     */
    public function protect($fd, $is_protected)
    {
    }

    /**
     * 
     *发送文件到TCP客户端连接
     * @example 
     * @param int $conn_fd 发送文件到TCP客户端连接
     * @param string $filename 发送文件到TCP客户端连接
     * @param int $offset 发送文件到TCP客户端连接
     * @return bool
     */
    public function sendfile($conn_fd, $filename, $offset)
    {
    }

    /**
     * 
     *关闭客户端连接
     * @example 
     * @param int $fd 关闭客户端连接
     * @param bool $reset 关闭客户端连接
     * @return 
     */
    public function close($fd, $reset)
    {
    }

    /**
     * 
     *连接确认
     * @example 
     * @param int $fd 连接确认
     * @return 
     */
    public function confirm($fd)
    {
    }

    /**
     * 
     *停止接收数据
     * @example 
     * @param int $fd 停止接收数据
     * @return 
     */
    public function pause($fd)
    {
    }

    /**
     * 
     *恢复数据接收
     * @example 
     * @param int $fd 恢复数据接收
     * @return 
     */
    public function resume($fd)
    {
    }

    /**
     * 
     *投递一个异步任务到task_worker池中。此函数是非阻塞的，执行完毕会立即返回
     * @example 
     * @param mixed $data 投递一个异步任务到task_worker池中。此函数是非阻塞的，执行完毕会立即返回
     * @param int $worker_id 投递一个异步任务到task_worker池中。此函数是非阻塞的，执行完毕会立即返回
     * @param callable $finish_callback 投递一个异步任务到task_worker池中。此函数是非阻塞的，执行完毕会立即返回
     * @return 
     */
    public function task($data, $worker_id, Callable $finish_callback)
    {
    }

    /**
     * 
     *用于投递一个异步的任务到task进程池去执行。与task不同的是taskwait是阻塞等待的，直到任务完成或者超时返回。
     * @example 
     * @param mixed $data 用于投递一个异步的任务到task进程池去执行。与task不同的是taskwait是阻塞等待的，直到任务完成或者超时返回。
     * @param float $timeout 用于投递一个异步的任务到task进程池去执行。与task不同的是taskwait是阻塞等待的，直到任务完成或者超时返回。
     * @param int $worker_id 用于投递一个异步的任务到task进程池去执行。与task不同的是taskwait是阻塞等待的，直到任务完成或者超时返回。
     * @return 
     */
    public function taskwait($data, $timeout, $worker_id)
    {
    }

    /**
     * 
     *并发执行多个Task
     * @example 
     * @param array $tasks 并发执行多个Task
     * @param double $timeout 并发执行多个Task
     * @return 
     */
    public function taskWaitMulti(Array $tasks, $timeout)
    {
    }

    /**
     * 
     *此函数用于在task进程中通知worker进程，投递的任务已完成。此函数可以传递结果数据给worker进程
     * @example 
     * @param string $data 此函数用于在task进程中通知worker进程，投递的任务已完成。此函数可以传递结果数据给worker进程
     * @return 
     */
    public function finish($data)
    {
    }

    /**
     * 
     *重启所有worker进程
     * @example 
     * @return 
     */
    public function reload()
    {
    }

    /**
     * 
     *关闭服务器
     * @example 
     * @return 
     */
    public function shutdown()
    {
    }

    /**
     * 
     *使当前worker进程停止运行，并立即触发onWorkerStop回调函数
     * @example 
     * @param int $worker_id 使当前worker进程停止运行，并立即触发onWorkerStop回调函数
     * @return 
     */
    public function stop($worker_id)
    {
    }

    /**
     * 
     *获取最近一次操作错误的错误码。业务代码中可以根据错误码类型执行不同的逻辑。
     * @example 
     * @return int
     */
    public function getLastError()
    {
    }

    /**
     * 
     *检测服务器所有连接，并找出已经超过约定时间的连接。如果指定if_close_connection，则自动关闭超时的连接。未指定仅返回连接的fd数组。
     * @example 
     * @param  mixed $reactor_id 
     * @return 
     */
    public function heartbeat($reactor_id)
    {
    }

    /**
     * 
     *获取连接的信息
     * @example 
     * @param int $fd 获取连接的信息
     * @param int $reactor_id 获取连接的信息
     * @return 
     */
    public function connection_info($fd, $reactor_id)
    {
    }

    /**
     * 
     *用来遍历当前Server所有的客户端连接
     * @example 
     * @param int $start_fd 用来遍历当前Server所有的客户端连接
     * @param int $find_count 用来遍历当前Server所有的客户端连接
     * @return 
     */
    public function connection_list($start_fd, $find_count)
    {
    }

    /**
     * 
     *获取连接的信息
     * @example 
     * @param int $fd 获取连接的信息
     * @param int $reactor_id 获取连接的信息
     * @return 
     */
    public function getClientInfo($fd, $reactor_id)
    {
    }

    /**
     * 
     *用来遍历当前Server所有的客户端连接
     * @example 
     * @param int $start_fd 用来遍历当前Server所有的客户端连接
     * @param int $find_count 用来遍历当前Server所有的客户端连接
     * @return 
     */
    public function getClientList($start_fd, $find_count)
    {
    }

    /**
     * 
     *在指定的时间后执行函数
     * @example 
     * @param int $ms 在指定的时间后执行函数
     * @param callable $callback 在指定的时间后执行函数
     * @param array $param 在指定的时间后执行函数
     * @return 
     */
    public function after($ms, Callable $callback, Array $param)
    {
    }

    /**
     * 
     *ick定时器，可以自定义回调函数
     * @example 
     * @param int $ms ick定时器，可以自定义回调函数
     * @param callable $callback ick定时器，可以自定义回调函数
     * @return 
     */
    public function tick($ms, Callable $callback)
    {
    }

    /**
     * 
     *清除tick/after定时器，此函数是swoole_timer_clear的别名
     * @example 
     * @param int $timer_id 清除tick/after定时器，此函数是swoole_timer_clear的别名
     * @return 
     */
    public function clearTimer($timer_id)
    {
    }

    /**
     * 
     *延后执行一个PHP函数。Swoole底层会在EventLoop循环完成后执行此函数。此函数的目的是为了让一些PHP代码延后执行，程序优先处理IO事件
     * @example 
     * @param callable $callback 延后执行一个PHP函数。Swoole底层会在EventLoop循环完成后执行此函数。此函数的目的是为了让一些PHP代码延后执行，程序优先处理IO事件
     * @return 
     */
    public function defer(Callable $callback)
    {
    }

    /**
     * 
     *此函数可以向任意worker进程或者task进程发送消息。在非主进程和管理进程中可调用。收到消息的进程会触发onPipeMessage事件。
     * @example 
     * @param int $dst_worker_id 此函数可以向任意worker进程或者task进程发送消息。在非主进程和管理进程中可调用。收到消息的进程会触发onPipeMessage事件。
     * @param string $data 此函数可以向任意worker进程或者task进程发送消息。在非主进程和管理进程中可调用。收到消息的进程会触发onPipeMessage事件。
     * @return 
     */
    public function sendMessage($dst_worker_id, $data)
    {
    }

    /**
     * 
     *添加一个用户自定义的工作进程
     * @example 
     * @param object $process 添加一个用户自定义的工作进程
     * @return 
     */
    public function addProcess($process)
    {
    }

    /**
     * 
     *得到当前Server的活动TCP连接数，启动时间，accpet/close的总次数等信息
     * @example 
     * @return array
     */
    public function stats()
    {
    }

    /**
     * 
     *将连接绑定一个用户定义的ID，可以设置dispatch_mode=5设置已此ID值进行hash固定分配。可以保证某一个UID的连接全部会分配到同一个Worker进程
     * @example 
     * @param int $fd 将连接绑定一个用户定义的ID，可以设置dispatch_mode=5设置已此ID值进行hash固定分配。可以保证某一个UID的连接全部会分配到同一个Worker进程
     * @param int $uid 将连接绑定一个用户定义的ID，可以设置dispatch_mode=5设置已此ID值进行hash固定分配。可以保证某一个UID的连接全部会分配到同一个Worker进程
     * @return 
     */
    public function bind($fd, $uid)
    {
    }

}

