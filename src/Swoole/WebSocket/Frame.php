<?php
/**
* Swoole自动补全类(基于最新的4.2.9版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/11/28
*/

/**
*swoole websocket 帧
*/
namespace Swoole\WebSocket;
class Frame
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
     * @var int $opcode 
     * WebSocket的OpCode类型，可以参考WebSocket协议标准文档
     * @access public
     */
    public $opcode    =    1;

    /**
     * @var bool $finish 
     * 表示数据帧是否完整，一个WebSocket请求可能会分成多个数据帧进行发送（底层已经实现了自动合并数据帧，现在不用担心接收到的数据帧不完整）
     * @access public
     */
    public $finish    =    true;

}

