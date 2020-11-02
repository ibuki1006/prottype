function getParam(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}

$("#like").on("click", function () {
  const ticketNo = getParam("ticketNo");
  // alert(ticketNo);
  $.ajax({
    type: "POST",
    data: {
      ticketNo: ticketNo
    },
    url: "add_like.php",
    success: function (data) {
      alert(data);
    },
    error: function (err) {
      console.log(err);
    }
  });
});
