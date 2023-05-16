<?php

require_once "includes/header.php";
session_start();


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
        <h2 style="text-align:center">Add a member</h2>
        <div id="form">
        <div class="form-group">
           <input type="text" class="form-control"  required autocomplete="off" id="txtName" placeholder="Your Name">
           <span id="error_name"></span>
          </div>
        <div class="form-group">
            <input type="email" class="form-control" required autocomplete="off" id="email" placeholder="Your Email">
            <span id="error_email"></span>
          </div>
        <div class="form-group">
            <input type="phone" class="form-control" required autocomplete="off" id="phone" placeholder="Your Mobile Number" maxlength="10" minlength="10">
            <span id="error_phone"></span>
          </div>
       
        <div class="form-group">     
            <input type="date" class="form-control" required autocomplete="off" id="date" placeholder="Date of visit" min="2021-10-24" max="2022-9-22">
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

        <input type="submit" class="btn btn-block btn-danger" id="add_btn" value="Add member"></input>
</div>


<!--Loading image-->
<img src="assets/images/loading.png" alt="" width="60" height="60" id="loading">     
  <!-- Modal -->
  <div class="modal fade" id="confirmmessage" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="messageLabel">New member</h5>
        </div>
        <div class="modal-body">
        Member added successfuly
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="redirect()">OK</button>   
        </div>
      </div>
    </div>
  </div>
    </div>
    <script src="assets/js/add.js"></script> 
</body>
</html>