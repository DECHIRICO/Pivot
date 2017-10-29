const express = require('express');
const app = express();
const bodyParser = require('body-parser');

//Middleware
app.use(express.static (__dirname + '/public'));

// parse application/x-www-form-urlencoded
app.use(bodyParser.urlencoded({ extended: false }))

// parse application/json
app.use(bodyParser.json())

app.listen(process.env.PORT || 3000, function(){
  console.log("Express server listening on port %d in %s mode", this.address().port, app.settings.env);
});

app.post ('/', function(req, res) {
  addMemberToMailchimp(req.body.firstName)
  addMemberToMailchimp(req.body.lastName)
  addMemberToMailchimp(req.body.email)
  res.end('Success!!!');
});

function addMemberToMailchimp(email, firstName, lastName) {

var request = require("request");
var options = { method: 'POST',
  url: 'https://us10.api.mailchimp.com/3.0//lists/0a49147dce/members',
  headers:
   { 'postman-token': 'faa33501-eb7e-cf8b-9d52-657568015eac',
     'cache-control': 'no-cache',
     authorization: 'Basic YW55c3RyaW5nOmU2NTE2MjI5Zjk1MTVlYmU2N2I4YWRlYjViYTNiY2FlLXVzMTA=',
     'content-type': 'application/json' },
  body:
 { email_address: email,
   status: 'subscribed',
   merge_fields: { FNAME: firstName, LNAME: lastName }
 },
json: true };


request(options, function (error, response, body) {
  if (error) throw new Error(error);

  console.log(body);

});

}
