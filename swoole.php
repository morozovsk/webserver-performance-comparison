<?php

//pecl install swoole

//first test
$server = new Swoole\Http\Server('0.0.0.0', 1080);
//second test:
//$serv = new Swoole\Http\Server('0.0.0.0', 1080, SWOOLE_BASE);

$server->set(['worker_num' => 1,]);
$server->on('Request', function($req, $res) {$res->end('hello world');});
$server->start();
