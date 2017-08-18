<?php

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

$app->get('/', function() use($app) {
    return '<a href="options-resolver">Options Resolver Component</a><br><a href="cache">Cache</a>';
});

$app->get('/options-resolver', function() use($app) {
    $expl = new Malu\OptionsResolver\Explanation();
    return '';
});

$app->get('/cache', function() use($app) {
    $expl = new Malu\Cache\Redis();
    return '';
});

$app->error(function (\Exception $e) {
    dump($e);
    return '';
});

$app->run();
