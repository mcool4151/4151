<?php
include 'dbcon.php';
$uname = $_POST['username'];
$pass = md5($_POST['password']);
$sql = "select * from users where u_email='$uname' AND u_password='$pass'";
$res = $conn->query($sql);
if($res->num_rows >0){
  $data = $res->fetch_assoc();
  $_SESSION['loggedin'] = 1;
  $_SESSION['email'] = $data['u_email'];
  $_SESSION['pic'] = $data['pic'];
  echo 1;
}
else echo "Invalid Credentials";
echo $sql;
?>
