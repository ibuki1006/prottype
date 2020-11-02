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
  const favoFlg = $("#like").hasClass("favo");
  // alert(ticketNo);
  $.ajax({
    type: "POST",
    data: {
      ticketNo: ticketNo,
      favoFlg: favoFlg
    },
    url: "add_like.php",
    success: function (data) {
      alert(data);
      $("#like").toggleClass("favo");
      $("#like").toggleClass("btn-primary");
      $("#like").toggleClass("btn-warning");
    },
    error: function (err) {
      console.log(err);
    }
  });
});
