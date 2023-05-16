<?php
session_start();
$con = mysqli_connect('localhost','root','','gym');
if(isset($_POST['name'])){
    $id = $_SESSION['id'];
    $query = mysqli_query($con,"DELETE FROM `members` WHERE id='$id'");
}


?>
