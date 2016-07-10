<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SignUp</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" charset="utf-8"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js" charset="utf-8"></script>
    <script src="js/signup.js" charset="utf-8"></script>
  </head>
  <body>
    <h1>Sign-UP</h1>
    <form id="signup" method="post" enctype="multipart/form-data">
      <label for="email">Email</label>
      <input type="text" name="email" id="email">
      <br>
      <label for="password">Password</label>
      <input type="password" name="password" id="password">
      <br>
      <label for="cpassword">Confirm Password</label>
      <input type="password" name="cpassword" id="cpassword">
      <br>
      <label for="image">Picture:</label>
      <input type="file" name="image" id="image" accept="image/*">
      <br>
      <input type="submit">
    </form>
    <div class="status" id="status">
    </div>
  </body>
</html>
