<?php

namespace Malu\Cache;

use Symfony\Component\Cache\Simple\RedisCache;
use Predis\Client;

class Redis
{
    public function __construct()
    {
        $client = new Client('redis://redis:6379');
        $redis = new RedisCache($client);
        $redis->set('what', 'da fuck');
        echo $redis->get('what');
    }

}