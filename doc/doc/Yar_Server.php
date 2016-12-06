<?php
/**
* Yar_Server自动补全类(基于最新的1.0.3版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2016/12/06
*/

class Yar_Server
{
    //执行对象
    protected $_executor;
    /**
     * 构造方法
     * @param Object $obj:API对象 
     * @param CONSTANT $protocol:使用的协议 
     * @example      *class Api
     *{
     *}
     * $service = new Yar_Server(new API());
     * @return 
     */
    public function __construct($obj, $protocol)
    {
    }

    /**
     * 启动HTTP RPC Server
     * @example $service->handle();
     * @return 
     */
    public function handle()
    {
    }

}
