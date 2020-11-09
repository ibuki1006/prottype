<?php
  require_once("./session_cookie.php");
  require_once("./DB/db_connect.php");

  if(fnc_chkData("session", "userNo")){
    $userNo = fnc_getData("session", "userNo");
    $ticketNo = $_POST["ticketNo"];
    $favoFlg = $_POST["favoFlg"];

    $res = 0;

    if($favoFlg === "false") {
      $sql = "insert into t_like(f_userNo, f_ticketNo, f_date) values({$userNo}, {$ticketNo}, cast(now() as datetime))";
      $msg = "お気に入りに追加しました。";
    }else {
      $sql = "delete from t_like where f_userNo = {$userNo} and f_ticketNo = {$ticketNo}";
      $msg = "お気に入り解除しました。";
    }

    $result = mysqli_query($db_link, $sql);

    if(!$result){
      $msg = "エラーが起きました。";
      $res = 1;
    }

    $returnArray = [
      "res" => $res,
      "msg" => $msg
    ];

    echo json_encode($returnArray);
  }else {
    $returnArray = [
      "res" => 2,
      "url" => "index.php?page=login"
    ];

    echo json_encode($returnArray);
  }

  exit;
 ?>
