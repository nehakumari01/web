function togglemodal() {
  $("#confirmmessage").modal("show");
}

function redirect() {
  window.location.replace("home.php");
}

$("#confirmmessage").modal("hide");
$("#email").keyup(function () {
  var e = $("#email").val();
  /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(e)
    ? $("#error_email").text("")
    : ($("#error_email").text(e + " is not a valid email"), e.focus);
}),
  $("#phone").keypress(function (e) {
    var t = e.which;
    (0 == e.shiftKey &&
      (46 == t || 8 == t || 37 == t || 39 == t || (t >= 48 && t <= 57))) ||
      e.preventDefault();
  }),
  $("#phone").keyup(function () {
    var e = $("#phone").val();
    10 != e.length
      ? ($("#error_phone").text("Phone number must be 10 chars long"), e.focus)
      : $("#error_phone").text("");
  });

var addbtn = document.getElementById("add_btn");

addbtn.addEventListener("click", function (e) {
  if ($("#txtName").val().length == 0)
    return $("#error_name").text("This field is empty!");

  var date = $("#date").val();
  var shift = $("#shift").val();
  var email = $("#email").val();
  var name = $("#txtName").val();
  var phone = $("#phone").val();
  var plan = $("#plan").val();

  $.ajax({
    url: "includes/handlers/insert.php",
    type: "POST",
    data: {
      email: email,
      name: name,
      phone: phone,
      date: date,
      shift: shift,
      plan: plan,
    },
    success: function (e) {
      togglemodal();
    },
  });
});
