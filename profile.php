<?php
if (isset($_SESSION['email'])){
  echo "You are logged in";
}
else {
  echo "You should login first!";
  //redirect('location : index.php');
}
?>
