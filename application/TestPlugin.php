<?php

class TestPlugin extends Yaf_Plugin_Abstract
{
    public function routerStartup(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {
        /* before router
           in this hook,  user can do some url rewrite */
        var_dump("routerStartup");
    }



}