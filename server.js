const http = require('http');
const express = require('express');
const path = require('path');
const app = express();
//const login = require("./routes/login");
app.use(express.json());
app.use(express.static("express"));
// default URL for website
app.use('/', function (req, res) {
  res.sendFile(path.join(__dirname + '/express/index.html'));
  //__dirname : It will resolve to your project folder.
});

var login = require('./login.js');

//both index.js and things.js should be in same directory
app.use('/login', login);

const server = http.createServer(app);
const port = 3000;
server.listen(port);
console.debug('Server listening on port ' + port);