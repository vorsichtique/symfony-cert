<?php

namespace AppBundle\Certification\Cache;

use Symfony\Component\Cache\Simple\RedisCache;
use Predis\Client;

class Redis
{
    public function __construct()
    {
        echo 'Establishing connection to redis... </br>';
        $client = new Client('redis://redis:6379');
        $redis = new RedisCache($client);

        echo 'Storing value in redis... </br>';
        $redis->set('what', 'da fuck');

        echo 'Gettting value from redis... </br>';
        echo $redis->get('what');
    }

}