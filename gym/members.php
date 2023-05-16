<?php

require_once "includes/header.php";

?>

    <link rel="stylesheet" href="assets/css/index.css">
 
<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-fixed">
  <a class="navbar-brand" href="home.php">Gold Gym</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="home.php">Home <span class="sr-only">(current)</span></a>
    </div>
  </div>
</nav>
 
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">mobile</th>
      <th scope="col">email</th>
      <th scope="col">shift</th>
      <th scope="col">plan</th>
      <th scope="col">date</th>
    </tr>
  </thead>
  <tbody>
      <?php
     $con = mysqli_connect('localhost','root','','gym');
    $query = mysqli_query($con,"select * from members");
    if(mysqli_num_rows($query) > 0){
      while($row = mysqli_fetch_assoc($query)){
          $name = $row['name'];
          $id = $row['id'];
          $phone = $row['mobile'];
          $email = $row['email'];
          $shift = $row['shift'];
          $plan= $row['plan'];
          $date = $row['date'];
          ?>
    <tr>
      <td><?php echo $id; ?></td>
      <td><?php echo $name; ?></td>  
      <td><?php echo $phone; ?></td>  
      <td><?php echo $email; ?></td>  
      <td><?php echo $shift; ?></td> 
      <td><?php echo $plan; ?></td> 
      <td><?php echo $date; ?></td> 

    </tr>
      <?php        
      }
    }
      ?>
      
      
    
   
  </tbody>
</table>
</body>