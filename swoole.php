<?php

//pecl install swoole

//first test
$server = new Swoole\Http\Server('0.0.0.0', 1080);

$server->set(['worker_num' => 1,]);
$server->on('Request', function($req, $res) {$res->end('hello world');});
$server->start();

//command: php swoole.php
