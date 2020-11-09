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
    dataType: "json",
    success: function (data) {
      // console.log(data);
      if(data.res == 0) {
        alert(data.msg);
        $("#like").toggleClass("favo");
      }else if(data.res == 1) {
        alert(data.msg);
      }else if(data.res == 2) {
        window.location.href = data.url;
      }
    },
    error: function (err) {
      console.log(err);
    }
  });
});
