<?php

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

$app->get('/', function() use($app) {
    return '<a href="options-resolver">Options Resolver Component</a>';
});

$app->get('/options-resolver', function() use($app) {
    $expl = new Malu\OptionsResolver\Explanation();
    return 'options-resolver ';
});

$app->run();
