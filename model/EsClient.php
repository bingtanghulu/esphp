<?php
/**
 * Created by PhpStorm.
 * User: zhangkaixuan
 * Date: 2019/11/22
 * Time: 下午4:29
 */
require '../vendor/autoload.php';

use Elasticsearch\ClientBuilder;

class EsClient
{
    /**
     * 节点信息
     * @var array
     */
    private static $host = ['http://127.0.0.1:9200'];

    private static $instance;

    private $client;

    private function __construct()
    {
        $this->client = $client = ClientBuilder::create()->setHosts(self::$host)->build();

        return $this->client;
    }

    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    public static function getInstance()
    {
        if (!(self::$instance instanceof self)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * 索引一个文档
     * 说明：索引没有被创建时会自动创建索引
     */
    public function addOne()
    {
        $params = [];
        $params['index'] = 'index_test';//索引名称
        $params['type'] = 'man';        //type
        $params['id'] = '20191121';     //不指定就是es自动分配
        $params['body'] = array('title' => '我是个title');

        return $this->client->index($params);
    }
}

