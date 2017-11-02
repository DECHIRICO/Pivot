var $ = require('jquery');

$('form').submit(function(event) {
  var userEmail = $('#email').val();
  var userFirstName = $('#firstName').val();
  var userLastName = $('#lastName').val();

  event.preventDefault();
    $.ajax({
      url: '/',
      type: 'POST',
      data: {
        email: userEmail,
        firstName: userFirstName,
        lastName: userLastName,
      },
      success: function(response) {
        console.log(response);
      }
    });
});
