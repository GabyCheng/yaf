<?php

//用于做初始化的配置
/* bootstrap class should be defined under ./application/Bootstrap.php */
class Bootstrap extends Yaf\Bootstrap_Abstract
{
    public function _initConfig(Yaf\Dispatcher $dispatcher)
    {
        //加载包
        require APP_LIBRARY . '/vendor/autoload.php';


        //存储对象到注册表
        $config = \Yaf\Application::app()->getConfig();
        \Yaf\Registry::set('config', $config);


        //将配置转为数组
//        \Yaf\Registry::set('config', Yaf\Application::app()->getConfig()->toArray());
//        var_dump(__METHOD__);


    }
//    public function _initPlugin(Yaf_Dispatcher $dispatcher) {
////        var_dump(__METHOD__);
//    }

    public function _initPlugin(Yaf\Dispatcher $dispatcher)
    {
        /* register a plugin */
//        $dispatcher->registerPlugin(new TestPlugin());
    }
    /**
     * 初始化路由
     */
    public function _initRoute(Yaf\Dispatcher $dispatcher)
    {
        \Yaf\Dispatcher::getInstance()->catchException(true);
//        $dispatcher->catchException(true);
//        $router = $dispatcher->getRouter();
//        $router->addConfig(\Yaf\Registry::get("config")['routes']);


//        $dispatcher->catchException(true);
//        $router = $dispatcher->getRouter();
//        $router->addConfig(\Yaf\Registry::get("config")['routes']);
    }


    public function _initView()
    {
      //  \Yaf\Dispatcher::getInstance()->disableView();    //如果只是提供数据接口，则禁止模板输出
    }



}