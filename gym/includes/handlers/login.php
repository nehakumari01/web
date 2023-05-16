<?php
session_start();
$con = mysqli_connect('localhost','root','','gym');
if(isset($_POST['username'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = mysqli_query($con,"select * from admin where username = '$username' && password='$password'");
  if(mysqli_num_rows($query) > 0){
      $_SESSION['loggedin'] = true;
      echo '1';
  }else{
      echo '0';
  }


}


?>
