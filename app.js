const express = require('express');
const app = express();

//Middleware
app.use(express.static (__dirname + '/'));

app.listen(3000, function() {
  console.log("Listening on post 3000")
});

app.post ('/', function(req, res) {
  res.end('Success!!!');
});
