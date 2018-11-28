<?php
/**
* Swoole自动补全类(基于最新的4.2.9版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/11/28
*/

/**
*websocket关闭帧
*/
class swoole_websocke_closet_frame extends swoole_websocket_frame
{
    /**
     * @var int $fd 
     * 客户端的socket id
     * @access public
     */
    public $fd    =    0;

    /**
     * @var string $data 
     * 数据内容，可以是文本内容也可以是二进制数据，可以通过opcode的值来判断
     * @access public
     */
    public $data    =    '';

    /**
     * @var bool $finish 
     * 表示数据帧是否完整，一个WebSocket请求可能会分成多个数据帧进行发送（底层已经实现了自动合并数据帧，现在不用担心接收到的数据帧不完整）
     * @access public
     */
    public $finish    =    true;

    /**
     * @var int $opcode 
     * WebSocket的OpCode类型，可以参考WebSocket协议标准文档
     * @access public
     */
    public $opcode    =    8;

    /**
     * @var int $code 
     * 关闭提示码
     * @access public
     */
    public $code    =    1000;

    /**
     * @var string $reason 
     * 关闭原因
     * @access public
     */
    public $reason    =    '';

    /**
     * 
     *将当前对象转化为字符串的魔术方法
     * @example 
     * @return 
     */
    public function __toString()
    {
    
    }

    /**
     * 
     *打包
     * @example 
     * @param string $data 消息内容
     * @param int $opcode WebSocket的opcode指令类型，1表示文本，2表示二进制数据，9表示心跳ping
     * @param boolean $finish 帧是否完成
     * @param boolean $mask 是否设置掩码
     * @return 
     */
    public static  function pack(string $data, int $opcode, bool $finish, bool $mask)
    {
    
    }

    /**
     * 
     *解包
     * @example 
     * @param string $data 解包的数据
     * @return 
     */
    public static  function unpack(string $data)
    {
    
    }

}

