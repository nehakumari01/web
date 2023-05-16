<?php
session_start();
$con = mysqli_connect('localhost','root','','gym');
if(isset($_POST['name'])){
    $id = $_SESSION['id'];
    $email = strip_tags($_POST['email']);  //stripping any unwanted html tags
    $phone = $_POST['phone'];
    $name = strip_tags($_POST['name']);  //stripping any unwanted html tags
    $query = mysqli_query($con,"UPDATE `members` SET name='$name',mobile='$phone',email='$email' WHERE id='$id' ");
}

// UPDATE `members` SET `id`=[value-1],`name`=[value-2],`mobile`=[value-3],`email`=[value-4],`date`=[value-5],`shift`=[value-6],`plan`=[value-7] WHERE 1

?>
