$(document).ready(function () {
  // for submit the new and retype password

  $("#change").submit(function () {
    // message for empty

    if ($("#new").val() == "") {
      event.preventDefault();
      alert("مهربانی وکړه کوډ ولیکه! خالی کود نشی کیدای چی پسورډ شی");
    }

    // message for not value some

    if ($("#new").val() != $("#retype").val()) {
      event.preventDefault();
      alert("New Password and Retype dose not Much");
    }
  });
  // end
  window.setTimeout(function () {
    $(".wardak_alert").slideUp(1000);
  }, 4000);

  $("a.delete").click(function () {
    var result = window.confirm("Are you sure you want to delete?");
    if (!result) {
      event.preventDefault();
    }
  });
});
