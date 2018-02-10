<?php
class IndexController extends Yaf_Controller_Abstract {
   public function indexAction() {//默认Action



       $request =  $this->getRequest()->getParams();
       print_r($request);




die;





//       echo Yaf_Controller_Abstract :: getModuleName();

       $this->_view->word = 'hello world!';

      // $this->getView()->assign("content", "Hello World");
   }
}
