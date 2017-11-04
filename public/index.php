<!DOCTYPE html>
<!-- https://www.youtube.com/watch?v=HG90F73SGqE&list=PLpPnRKq7eNW08GdKgS3ar2kg9-CiYWxN2&index=2-->
<!-- https://www.codexworld.com/add-subscriber-to-list-mailchimp-api-php/-->
<!-- http://sproutvideo.com/blog/add-a-mailchimp-signup-form-to-a-video.html-->
<!-- https://www.youtube.com/watch?v=HmG_TYlZVWU&list=PLkEZWD8wbltlSS_d_7tx_H_FBNVro8918&index=9-->
<html>
  <head>
    <meta charset="utf-8">
    <title>Pivot - Push yourself in the right direction</title>
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body class="subscribePage">
    <div class="container">
      <div class="six columns">
        <div class="navbar">
          <div class="container">
            <ul class="navbar-list">
              <li class="navbar-item"> <a class="navbar-link" href="#" target="_blank">Pivot </a></li>
              <li class="navbar-item"> <a class="navbar-link" href="#" target="_blank">Manifesto </a></li>
              <li class="navbar-item"> <a class="navbar-link" href="#" target="_blank">Browse </a></li>
            </ul>
          </div>
          <div class="container">
            <div class="twelve columns">
              <h1>Push yourself in the right direction</h1>
              <p>There is a lot of exciting stuff going on in the stars above us that make astronomy so much fun.</p>
              <img src="img/pusher2.svg">
            </div>
          </div>
        </div>
      </div>
      <div class="six columns">
        <div class="container sub green">
          <h3>Create an account</h3>
          <p class="success hide">Great! Check your email to verify your account </p>
          <p class="error hide">Something went wrong.</p>
          <p class="existingUser hide">Your email already exist</p>
          <p>We will informe you when we will launch and how to finalize your application.</p>
          <form action="/" method="post">
            <label for="">First Name</label>
            <input class="u-full-width" type="text" name="firstName" value="" id="firstName">
            <label for="">Last Name</label>
            <input class="u-full-width" type="text" name="lastName" value="" id="lastName">
            <label for="">Email</label>
            <input class="u-full-width" type="text" name="email" value="" id="email">
            <button class="button-primary u-full-width big" type="submit" name="button" id="submit">Subscribe</button>
          </form>
        </div>
      </div>
    </div>
    <script
      src="https://code.jquery.com/jquery-3.2.1.min.js"
      integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
      crossorigin="anonymous"></script>
    <script src="js/build.js"></script>
  </body>
</html>
