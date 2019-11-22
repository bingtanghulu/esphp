<?php
/**
 * Created by PhpStorm.
 * User: zhangkaixuan
 * Date: 2019/11/22
 * Time: 下午5:18
 */

require 'EsClient.php';
class Demo
{
    public function testAdd(){
        $es =  EsClient::getInstance();
        $es->addOne();
    }
}

$demo = new Demo();

$demo->testAdd();