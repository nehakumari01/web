<?php

require_once "includes/header.php";
session_start();


?>

    <link rel="stylesheet" href="assets/css/login.css">
 
<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-fixed">
  <a class="navbar-brand" href="#">Gold Gym</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
    </div>
  </div>
</nav>

    <div class="main" id="main_div">
        <h2 style="text-align:center">Login</h2>
        <div id="form">
        <div class="form-group">
           <input type="text" class="form-control"  required autocomplete="off" id="txtUserName" placeholder="Username">
           <span id="error_name"></span>
          </div>
        <div class="form-group">
            <input type="password" class="form-control" required autocomplete="off" id="password" placeholder="password">
            <span id="error_email"></span>
          </div>

        <input type="submit" class="btn btn-block btn-danger" id="login_btn" value="Login"></input>
</div>





<!--Loading image-->
<img src="assets/images/loading.png" alt="" width="60" height="60" id="loading">     
  <!-- Modal -->
  <div class="modal fade" id="confirmmessage" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="messageLabel">Try again</h5>
        </div>
        <div class="modal-body">
         Username or Password incorrect.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="redirect()">OK</button>   
        </div>
      </div>
    </div>
  </div>
    </div>
    <script src="assets/js/login.js"></script> 
</body>
</html>