<?php

//second test:
//pecl install event

require_once DIR . '/vendor/autoload.php';
use Workerman\Worker;

//second test:
//Worker::$eventLoopClass = '\Workerman\Events\Ev';

$http_worker = new Worker("http://0.0.0.0:1080");
$http_worker->count = 1;
$http_worker->onMessage = function($conn, $data) {$conn->send("hello world");};
Worker::runAll();
