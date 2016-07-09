<?php

include_once 'dbcon.php';

$email = $_POST['email'];
$pass = $_POST['password'];

$sql = "Select * from users where u_email='$email'";
$res = $conn->query($sql);

if($res->num_rows == 0){
  $sql = "INSERT INTO `users`(`u_email`, `u_password`, `pic` ) VALUES ('$email','$pass','YES')";
  //echo $sql;
  $conn->query($sql);
  $name=mysqli_insert_id($conn);
  move_uploaded_file($_FILES['image']['tmp_name'],"../img/$name".".jpg");
  return 1;
}
else {
  echo "Email ID already Exists";
}

?>
