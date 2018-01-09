### ab -c 10 -n 10000 http://127.0.0.1:1080/

||time, microseconds|comment|
|---|---|---|
|go, [fasthttp](https://github.com/morozovsk/webserver-performance-comparison/blob/master/fasthttp.go)|0.08||
|php, [swoole](https://github.com/morozovsk/webserver-performance-comparison/blob/master/swoole.php)|0.10|SWOOLE_BASE, epoll|
|php, [workerman + event](https://github.com/morozovsk/webserver-performance-comparison/blob/master/workerman.php)|0.11|pecl event library|
|[node.js](https://github.com/morozovsk/webserver-performance-comparison/blob/master/node.js)|0.15||
|php, [swoole](https://github.com/morozovsk/webserver-performance-comparison/blob/master/swoole.php)|0.17|SWOOLE_TASK, epoll|
|php, [workerman](https://github.com/morozovsk/webserver-performance-comparison/blob/master/workerman.php)|0.43|socket_select|
