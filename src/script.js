var $ = require('jquery');

$('form').submit(function(event) {
  var firstName = $('#firstName').val();
  var lastName = $('#lastName').val();
  var userEmail = $('#email').val();

  event.preventDefault();
    $.ajax({
      url: '/',
      type: 'POST',
      data: {
        firstName: firstName
      },
      data: {
        lastName: lastName
      },
      data: {
        email: userEmail
      },
      success: function(response) {
        console.log(response);
      }
    });
});
