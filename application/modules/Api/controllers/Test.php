<?php


class TestController extends Yaf\Controller_Abstract
{
    //当类庞大时，为了区分，为方法指定文件
    public $action = array(
      'add' => 'actions/add.php',
    );
    public function helloAction()
    {

       //导入一个函数库文件common.php，即可使用common.php中的函数
       // Yaf\Loader::import(APP_LIBRARY.'/helpers/common.php');


//        $goodsModel = new GoodsModel();

        //读取配置文件
        $config = \Yaf\Registry::get('config');
        print_r($config);
        die;
//
          //获取id 必须开启pathinfo=1;
//        $id = $this->getRequest()->getParam('id');
//        $response = $this->getResponse();
         //设置头信息
//        $response->setHeader('content-type', 'application/json');
//        $json = json_encode(array('id'=>$id, 'message'=>'success'));
//        $response->setBody($json);

       // echo 4125454554;
        //调用ip类
        //$ip = new Baidu\Map\Ip();
//        $res = $this->getResponse();
//        print_r($res);
//        $res -> setHeader( 'Content-Type', 'text/json; charset=utf-8' );
//
        //追加主体内容
////        $res->appendBody('after content<br>');
////        $res->setBody('main content<br>');
/// 尾部内容
////        $res->prependBody('before content<br>');
///
//        var_dump($res->getHeader());
        //批量设置头信息
//        $headers =array('Content-Type'=>'text/html;charset=utf-8', 'Server'=>'Yaf Server');
//        $res->setAllHeaders($headers);
  //      $location = 1;
//        var_dump($this->getRequest()->getParam('id'));
//        print_r($_GET);







//        $ip = new \Baidu\Map\Ip();
//        $location = $ip->getLocation('8.8.8.8');
        //导入类
        //Yaf\Loader::import(APPLICATION_PATH.'/application/helpers/common.php');
//        $location = p('哈哈');

        $this->getView()->assign('page',$location);
    }
    public function indexAction()
    {
        echo 123;die;
    }
}