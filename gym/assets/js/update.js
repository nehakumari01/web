function togglemodal() {
  $("#confirmmessage").modal("show");
}
$("#confirmmessage").modal("hide");
function redirect() {
  window.location.replace("home.php");
}
var searchBtn = document.getElementById("search_btn");
var editBtn = document.getElementById("edit_btn");
var delBtn = document.getElementById("delete_btn");
searchBtn.addEventListener("click", (e) => {
  const id = document.getElementById("member_id");
  const idValue = id.value;

  $.ajax({
    url: "includes/handlers/populate.php",
    type: "POST",
    data: {
      id: idValue,
    },
    success: function (e) {
      window.location.replace("update.php");
    },
  });
});

editBtn.addEventListener("click", (e) => {
  var name = $("#txtName").val();
  var phone = $("#phone").val();
  var email = $("#email").val();

  $.ajax({
    url: "includes/handlers/edit.php",
    type: "POST",
    data: {
      name: name,
      email: email,
      phone: phone,
    },
    success: function (e) {
      togglemodal();
    },
  });
});

delBtn.addEventListener("click", (e) => {
  var name = $("#txtName").val();

  $.ajax({
    url: "includes/handlers/delete.php",
    type: "POST",
    data: {
      name: name,
    },
    success: function (e) {
      togglemodal();
    },
  });
});
