<?php

class GoodsModel extends \Core\Db\MySql

//class GoodsModel
{


    public function getIdList()
    {

        return $this->where(array('id'=>'1'))->find();

    }

    public function test()
    {
        echo 456;
    }
}