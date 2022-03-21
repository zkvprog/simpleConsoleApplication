<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

$app = new \Symfony\Component\Console\Application('demo application');

$app->add(new \App\Console\Hello());
$app->add(new \App\Console\RepeatString());
$app->add(new \App\Console\Quest());

$app->run();