<?php

session_start();

$con = mysqli_connect('localhost','root','','gym');
if(isset($_POST['id'])){
    $id = $_POST['id'];
    $query = mysqli_query($con,"select * from members where id = '$id'");
if(mysqli_num_rows($query) > 0){
$row = mysqli_fetch_assoc($query);
     $_SESSION['name'] = $row['name'];
      $_SESSION['id'] = $row['id'];
      $_SESSION['name'] = $row['name'];
      $_SESSION['mobile'] = $row['mobile'];
      $_SESSION['email'] = $row['email'];
      $_SESSION['date'] = $row['date'];
      $_SESSION['shift'] = $row['shift'];
      $_SESSION['plan'] = $row['plan'];
}
    
}

      


?>