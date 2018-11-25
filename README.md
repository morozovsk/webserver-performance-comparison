### ab -c 10 -n 10000 -k http://127.0.0.1:1080/

### results for php7 x64:

||time, microseconds (less is better)|time without keep-alive, microseconds (less is better)|
|---|---|---|
|go, [fasthttp](https://github.com/morozovsk/webserver-performance-comparison/blob/master/fasthttp.go)|0.015|0.069|
|php, [swoole](https://github.com/morozovsk/webserver-performance-comparison/blob/master/swoole.php)|0.023|0.073|
|php, [workerman](https://github.com/morozovsk/webserver-performance-comparison/blob/master/workerman.php)|0.069||
|[node.js](https://github.com/morozovsk/webserver-performance-comparison/blob/master/node.js)|0.085|0.088|
|php, [roadrunner](https://github.com/morozovsk/webserver-performance-comparison/blob/master/roadrunner.php)|0.319|0.295|
