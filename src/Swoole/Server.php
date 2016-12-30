<?php
/**
* Swoole自动补全类(基于最新的2.0.4版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2016/12/30
*/

/**
*
*/
namespace Swoole;
class Server
{
    /**
     * 
     * @var $setting array:
     * @description:通过swoole_server:set()设置的参数会保存到setting属性上
     * @access public
     * @example 
     * 
     * $serv = new swoole_server('127.0.0.1', 9501);
     * $serv->set(array('worker_num' => 4));
     * echo $serv->setting['worker_num'];
     */
    public $setting    =     array() ;

    /**
     * 
     * @var int $master_pid：主进程ID
     * @access public
     * @example 
     * 
     */
    public $master_pid;

    /**
     * 
     * @var int $manager_pid:管理进程ID
     * @access public
     * @example 
     * 
     */
    public $manager_pid;

    /**
     * 
     * @var int $worker_pid:当前工作进程ID(操作系统进程)
     * @access public
     * @example 
     * 
     */
    public $worker_pid;

    /**
     * 
     * @var int $worker_id：当前工作进程(包括worker进程和task进程)编号
     * @access public
     * @example 
     * 
     */
    public $worker_id;

    /**
     * 
     * @var boolean $taskworker:当前进程是否是task工作进程
     * @access public
     * @example 
     * 
     */
    public $taskworker;

    /**
     * 
     * @var iterator $connections：TCP连接抚抚今迭代器
     * @access public
     * @example 
     * 
     */
    public $connections;

    /**
     * 
     *swoole_server初始化方法
     * @example 
     * @param  mixed $host 
     * @param  mixed $port 
     * @param  mixed $mode 
     * @param  mixed $sock_type 
     * @return 
     */
    public function __construct($host, $port, $mode, $sock_type)
    {
    }

    /**
     * 
     *添加监听端口(是addlistener的别名)
     * @example 
     * @param  mixed $host 
     * @param  mixed $port 
     * @param  mixed $sock_type 
     * @return 
     */
    public function listen($host, $port, $sock_type)
    {
    }

    /**
     * 
     *添加监听端口
     * @example 
     * @param  mixed $host 
     * @param  mixed $port 
     * @param  mixed $sock_type 
     * @return 
     */
    public function addlistener($host, $port, $sock_type)
    {
    }

    /**
     * 
     *绑定事件(为事件注册函数)
     * @example 
     * @param  mixed $event_name 
     * @param  mixed $callback 
     * @return 
     */
    public function on($event_name, $callback)
    {
    }

    /**
     * 
     *设置swoole_server运行时的参数
     * @example 
     * @param array $settings 
     * @return 
     */
    public function set(Array $settings)
    {
    }

    /**
     * 
     *启动server
     * @example 
     * @return 
     */
    public function start()
    {
    }

    /**
     * 
     *向客户端发送数据
     * @example 
     * @param  mixed $fd 
     * @param  mixed $send_data 
     * @param  mixed $reactor_id 
     * @return 
     */
    public function send($fd, $send_data, $reactor_id)
    {
    }

    /**
     * 
     *向任意客户端发送UDP数据包
     * @example 
     * @param  mixed $ip 
     * @param  mixed $port 
     * @param  mixed $send_data 
     * @param  mixed $server_socket 
     * @return 
     */
    public function sendto($ip, $port, $send_data, $server_socket)
    {
    }

    /**
     * 
     *阻塞的向客户端发送数据
     * @example 
     * @param  mixed $conn_fd 
     * @param  mixed $send_data 
     * @return 
     */
    public function sendwait($conn_fd, $send_data)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $fd 
     * @return 
     */
    public function exist($fd)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $fd 
     * @param  mixed $is_protected 
     * @return 
     */
    public function protect($fd, $is_protected)
    {
    }

    /**
     * 
     *向客户端发送文件
     * @example 
     * @param  mixed $conn_fd 
     * @param  mixed $filename 
     * @param  mixed $offset 
     * @return 
     */
    public function sendfile($conn_fd, $filename, $offset)
    {
    }

    /**
     * 
     *关闭客户端连接
     * @example 
     * @param  mixed $fd 
     * @param  mixed $reset 
     * @return 
     */
    public function close($fd, $reset)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $fd 
     * @return 
     */
    public function confirm($fd)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $fd 
     * @return 
     */
    public function pause($fd)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $fd 
     * @return 
     */
    public function resume($fd)
    {
    }

    /**
     * 
     *投递一个任务到task_worker连接池中
     * @example 
     * @param  mixed $data 
     * @param  mixed $worker_id 
     * @param  mixed $finish_callback 
     * @return 
     */
    public function task($data, $worker_id, $finish_callback)
    {
    }

    /**
     * 
     *以阻塞的形式投递一个任务到task_worker连接池中
     * @example 
     * @param  mixed $data 
     * @param  mixed $timeout 
     * @param  mixed $worker_id 
     * @return 
     */
    public function taskwait($data, $timeout, $worker_id)
    {
    }

    /**
     * 
     *
     * @example 
     * @param array $tasks 
     * @param  mixed $timeout 
     * @return 
     */
    public function taskWaitMulti(Array $tasks, $timeout)
    {
    }

    /**
     * 
     *用于在task进程中通知worker进程任务已完成
     * @example 
     * @param  mixed $data 
     * @return 
     */
    public function finish($data)
    {
    }

    /**
     * 
     *重启所有工作进程
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
     *停止当前worker进程
     * @example 
     * @param  mixed $worker_id 
     * @return 
     */
    public function stop($worker_id)
    {
    }

    /**
     * 
     *获取最近一次操作错误的错误码
     *返回的错误码：
     *1001 连接已经被Server端关闭了，出现这个错误一般是代码中已经执行了$serv->close()关闭了某个连接，但仍然调用$serv->send()向这个连接发送数据
     * @example 
     * @return 
     */
    public function getLastError()
    {
    }

    /**
     * 
     *检测所有服务器连接，并找出已经超时的连接
     * @example 
     * @param  mixed $reactor_id 
     * @return 
     */
    public function heartbeat($reactor_id)
    {
    }

    /**
     * 
     *获取客户端连接信息
     * @example 
     * @param  mixed $fd 
     * @param  mixed $reactor_id 
     * @return from_id
     */
    public function connection_info($fd, $reactor_id)
    {
    }

    /**
     * 
     *用来遍历所有客户端连接
     * @example 
     * @param  mixed $start_fd 
     * @param  mixed $find_count 
     * @return 
     */
    public function connection_list($start_fd, $find_count)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $fd 
     * @param  mixed $reactor_id 
     * @return 
     */
    public function getClientInfo($fd, $reactor_id)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $start_fd 
     * @param  mixed $find_count 
     * @return 
     */
    public function getClientList($start_fd, $find_count)
    {
    }

    /**
     * 
     *在指定时间后执行某个回调函数
     * @example 
     * @param  mixed $ms 
     * @param  mixed $callback 
     * @param  mixed $param 
     * @return 
     */
    public function after($ms, $callback, $param)
    {
    }

    /**
     * 
     *添加定时器
     * @example 
     * @param  mixed $ms 
     * @param  mixed $callback 
     * @return 
     */
    public function tick($ms, $callback)
    {
    }

    /**
     * 
     *清除定时器
     * @example 
     * @param  mixed $timer_id 
     * @return 
     */
    public function clearTimer($timer_id)
    {
    }

    /**
     * 
     *延迟执行一个PHP函数
     * @example 
     * @param  mixed $callback 
     * @return 
     */
    public function defer($callback)
    {
    }

    /**
     * 
     *向任意worker进程或task进程发送消息
     * @example 
     * @param  mixed $dst_worker_id 
     * @param  mixed $data 
     * @return 
     */
    public function sendMessage($dst_worker_id, $data)
    {
    }

    /**
     * 
     *添加一个自定义的工作进程
     * @example 
     * @param  mixed $process 
     * @return 
     */
    public function addProcess($process)
    {
    }

    /**
     * 
     *得到当前server的活动TCP连接数
     *array (
     * @example 
     * @return 
     */
    public function stats()
    {
    }

    /**
     * 
     *将连接绑定到某个用户定义的ID
     * @example 
     * @param  mixed $fd 
     * @param  mixed $uid 
     * @return 
     */
    public function bind($fd, $uid)
    {
    }

}

