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
    public function test(){
        echo 'in test';
        $es =  EsClient::getInstance();
        $es->addOne();

        echo 'ok test';

    }
}

$demo = new Demo();
$demo->test();