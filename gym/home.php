<?php

require_once "includes/header.php";

if(session_start()){
  if(!$_SESSION['loggedin']){
    session_destroy();
    header('Location:login.php');
  }
  unset($_SESSION['id']);
  
}
?>

    <link rel="stylesheet" href="assets/css/index.css">
 
<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-fixed">
  <a class="navbar-brand" href="index.php">Gold Gym</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
    </div>
  </div>
  <button class="btn btn-danger" id="logout_btn">Logout</button>
</nav>
 
<div class="container">
   
  <div class="card" style="width:300px">
     <i class="fa fa-user-plus ic" style="font-size:15rem;color:brown;" alt="Card image" style="width:100%"></i>
    <div class="card-body">
      <a href="addmember.php" class="btn btn-primary btn-lg">Add a member</a>
    </div>
  </div>

    <div class="card" style="width:300px">
     <i class="fa fa-edit ic" style="font-size:15rem;color:brown;" alt="Card image" style="width:100%"></i>
    <div class="card-body">
      <a href="update.php" class="btn btn-primary btn-lg">Edit/Delete</a>
    </div>
  </div>

      <div class="card" style="width:300px">
     <i class="fa fa-user-circle" style="font-size:15rem;color:brown;" alt="Card image" style="width:100%"></i>
    <div class="card-body">
      <a href="members.php" class="btn btn-primary btn-lg">View members</a>
    </div>
  </div>
</div>
 <script src="assets/js/home.js"></script> 
</body>
</html>