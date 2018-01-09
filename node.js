const http = require('http');
const server = http.createServer(function(req, res) {
    res.writeHead(200);
    res.end('hello world');
});
server.listen(1080);
