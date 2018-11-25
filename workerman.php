<?php

//pecl install event

require_once __DIR__ . '/vendor/autoload.php';
use Workerman\Worker;

$http_worker = new Worker("http://0.0.0.0:1080");
$http_worker->count = 1;
$http_worker->onMessage = function($conn, $data) {$conn->send("hello world");};
Worker::runAll();

//command: php workerman.php start
