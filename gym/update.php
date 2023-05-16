<?php

require_once "includes/header.php";
session_start();
$con = mysqli_connect('localhost','root','','gym');
$query = mysqli_query($con,"select * from members");


?>

    <link rel="stylesheet" href="assets/css/login.css">
    
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

    <div class="main" id="main_div">
        <h2 style="text-align:center">Edit/delete</h2>
<div class="input-group mb-3">
  <input type="text" id="member_id" class="form-control" placeholder="member id" aria-label="Recipient's username" aria-describedby="button-addon2">
  <div class="input-group-append">
    <button class="btn btn-primary" type="button" id="search_btn">search</button>
  </div>
</div>
        <div id="form">
        <div class="form-group">
           <input type="text" class="form-control"  required autocomplete="off" id="txtName"
            value=<?php if(isset($_SESSION['name'])){
                echo $_SESSION['name'];
            }else{
                echo "Name";
            }?>>
           <span id="error_name"></span>
          </div>
        <div class="form-group">
            <input type="email" class="form-control" required autocomplete="off" id="email" value=
            <?php if(isset($_SESSION['name'])){
                echo $_SESSION['email'];
            }else{
                echo "Email";
            }?>
            >
            <span id="error_email"></span>
          </div>
        <div class="form-group">
            <input type="phone" class="form-control" required autocomplete="off" id="phone" value=
            <?php if(isset($_SESSION['name'])){
                echo $_SESSION['mobile'];
            }else{
                echo "Mobile";
            }?>
            maxlength="10" minlength="10">
            <span id="error_phone"></span>
          </div>
       
        <div class="form-group">     
            <input type="date" class="form-control" required autocomplete="off" id="date" min="2021-10-24" max="2022-9-22"
            value=<?php if(isset($_SESSION['name'])){
                echo $_SESSION['date'];
            }?>
            >
            <span id="error_date"></span>
          </div>
        <div class="form-group">
            <select name="shift" class="form-control" required id="shift">
                <option value="">select shift</option>
                <option value="morning">morning</option>
                <option value="evening">evening</option>
            </select>
            <span id="error_timing"></span>
        </div>
         <div class="form-group">
            <select name="plan" class="form-control" required id="plan">
                <option value="">select plan</option>
                <option value="beginner">Beginner</option>
                <option value="intermediate">Intermediate</option>
                <option value="pro">Pro</option>
            </select>
            <span id="error_timing"></span>
        </div>

        <button type="button" class="btn btn-block btn-primary" id="edit_btn">update</button>
        <button type="button" class="btn btn-block btn-danger" id="delete_btn">delete</button>
</div>
<?php
unset($_SESSION['name']);
unset($_SESSION['email']);
unset($_SESSION['phone']);
unset($_SESSION['shift']);
unset($_SESSION['plan']);
unset($_SESSION['date']);
?>

  <!-- Modal -->
  <div class="modal fade" id="confirmmessage" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="messageLabel">Edit/Delete</h5>
        </div>
        <div class="modal-body">
        operation successful
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="redirect()">OK</button>   
        </div>
      </div>
    </div>
  </div>
    </div>
 <script src="assets/js/update.js"></script>    
</body>
</html>