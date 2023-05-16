var loginBtn = document.getElementById("login_btn");
function togglemodal() {
  $("#confirmmessage").modal("show");
}
$("#confirmmessage").modal("hide");
function redirect() {
  window.location.replace("login.php");
}

loginBtn.addEventListener("click", () => {
  var username = document.getElementById("txtUserName").value;
  var password = document.getElementById("password").value;

  $.ajax({
    url: "includes/handlers/login.php",
    type: "POST",
    data: {
      username: username,
      password: password,
    },
    success: function (data) {
      if (data == "0") {
        togglemodal();
      } else {
        window.location.replace("home.php");
      }
    },
  });
});
