var logoutBtn = document.getElementById("logout_btn");

logoutBtn.addEventListener("click", (e) => {
  $.ajax({
    url: "includes/handlers/logout.php",
    success: function (e) {
      window.location.replace("login.php");
    },
  });
});
