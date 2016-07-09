<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" charset="utf-8"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js" charset="utf-8"></script>
    <script src="js/login.js" charset="utf-8"></script>
  </head>
  <body>
    <h1>Login</h1>
    <form class="login" id="login" enctype="multipart/form-data">
      <label for="username">Username</label>
      <input type="text" name="username" id="username">
      <br>
      <label for="password">Password</label>
      <input type="password" name="password" id="password">
      <br>
      <input type="submit">
    </form>
    <div id="status" class="status">
    </div>
  </body>
</html>
