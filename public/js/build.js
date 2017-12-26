$(document).ready(function(){
  $('form').submit(function(event) {
    var userEmail = $('#email').val();
    var userFirstName = $('#firstName').val();
    var userLastName = $('#lastName').val();
    $('.button').addClass('spinner');
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
              $('.button').removeClass('spinner');
              break;
            case "Error":
              $('.error').show();
              $('.button').removeClass('spinner');
              break;
            case "Error-Already":
              $('.existingUser').show();
              $('.button').removeClass('spinner');
              break;
            default:
              $('.error').show();
              $('.button').removeClass('spinner');
              break;
          }
        }
      });
  });
});
