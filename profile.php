<?php
session_start();
if ($_SESSION['loggedin'] == 1){
  echo "You are logged in";
}
else {
  echo "You should login first!";
  //redirect('location : index.php');
}
?>
