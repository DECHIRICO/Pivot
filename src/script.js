var $ = require('jquery');

$('form').submit(function(event) {
  var userFirstName = $('#firstName').val();
  var userLastName = $('#lastName').val();
  var userEmail = $('#email').val();

  event.preventDefault();
    $.ajax({
      url: '/',
      type: 'POST',
      data: {
        firstName: userFirstName
      },
      data: {
        lastName: userLastName
      },
      data: {
        email: userEmail
      },
      success: function(response) {
        console.log(response);
      }
    });
});
