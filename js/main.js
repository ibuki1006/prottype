function openNav() {
    document.getElementById("mySidenav").style.width = "70%";
    // document.getElementById("flipkart-navbar").style.width = "50%";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.body.style.backgroundColor = "rgba(0,0,0,0)";
}


function getData() {
    const url = "./qr/qu.png";
    $.ajax({
        type: "get",
        url: url,
        xhr : function () {
            const xhr = new XMLHttpRequest();
            xhr.responseType = "blob";

            // chunkを取得するごとに実行
            xhr.onprogress = function (event) {//引数を使うことで全体の何パーセント実行できているかが取得できる
                // console.log(event);
                const percent = Math.round(event.loaded / event.total * 100);
                $("#loding-percsent").html(percent+"%");
                $("#status-bar > div").css({
                    width: percent+"%",
                    transition: "width 0.3s ease-out"
                });
            };

            return xhr;
        },
        beforeSend: function () {
            $("#loadingtext").html("ダウンロード中...");//通信が始まる直前始まる
        },
        success: function (response) {
            console.log(response);
            $("#loadingtext").html("ダウンロードが完了しました");

            console.log(URL);
            const url = URL.createObjectURL(response);
            $("#downloadlink").attr("href",url);

            $("#comp").html("Complate!");

            //$("<img>") == document.createElement("img")と同じ
            const imgTag = $("<img>");
            imgTag.attr("src",url);
            $("#preview").append(imgTag);
        },
        error: function (err) {
            console.error(err);
        }
    });
};

