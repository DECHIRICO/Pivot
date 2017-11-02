$(document).ready(function(){
  $('form').submit(function(event) {
    var userEmail = $('#email').val();
    var userFirstName = $('#firstName').val();
    var userLastName = $('#lastName').val();

    event.preventDefault();
      $.ajax({
        url: 'mail-endpoint.php',
        type: 'POST',
        data: {
          email: userEmail,
          firstName: userFirstName,
          lastName: userLastName,
        },
        success: function(response) {
          $('.hide').hide()
          switch(response){
            case "Success":
              $('.success').show();
              break;
            case "Error":
              $('.error').show();
              break;
            case "Error-Already":
              $('.existingUser').show();
              break;
            default:
              $('.error').show();
              break;
          }
        }
      });
  });
});
