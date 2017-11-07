<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pivup - Push yourself in the right direction</title>
    <link href="css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Inknut+Antiqua" rel="stylesheet">
  </head>
  <body class="subscribePage">
    <div class="selection left">
      <div class="messagearea">
        <a class="logo" href="#" target="_blank">Pivup </a>
          <h1>Push yourself in the right direction</h1>
          <h5>There is a lot of exciting stuff going on in the stars above us that make astronomy so much fun.</p>
          <img src="assets/img/pusher2.svg">
          <h6>Pivot 2017, All rights reserved</h6>
      </div>
    </div>

    <div class="selection right">
      <div class="formarea">
        <h3>Create an account</h3>
        <p class="alerts success hide">Great! Check your email to verify your account </p>
        <p class="alerts error hide">Something went wrong.</p>
        <p class="alerts existingUser hide">Your email already exist</p>
        <p>We will informe you when we will launch and how to finalize your application.</p>
        <form action="/" method="post">
          <label for="">First Name</label>
          <input class="u-full-width larger" type="text" name="firstName" value="" id="firstName">
          <label for="">Last Name</label>
          <input class="u-full-width larger" type="text" name="lastName" value="" id="lastName">
          <label for="">Email</label>
          <input class="u-full-width larger" type="text" name="email" value="" id="email">
          <button class="button-primary u-full-width big" type="submit" name="button" id="submit">Subscribe</button>
        </form>
      </div>
    </div>
    <script
      src="https://code.jquery.com/jquery-3.2.1.min.js"
      integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
      crossorigin="anonymous"></script>
    <script src="js/build.js"></script>
  </body>
</html>
