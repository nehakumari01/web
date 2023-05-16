<?php
session_start();
require_once "../config.php";
if(isset($_POST['name'])){

    $email = strip_tags($_POST['email']);  //stripping any unwanted html tags
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $shift = $_POST['shift'];
     $plan = $_POST['plan'];
    $name = strip_tags($_POST['name']);  //stripping any unwanted html tags
    $query = mysqli_query($con,"insert into members values('','$name','$phone','$email','$date','$shift','$plan')");
}

?>