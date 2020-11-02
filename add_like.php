<?php
  require_once("./session_cookie.php");
  require_once("./DB/db_connect.php");

  $userNo = fnc_getData("session", "userNo");
  $ticketNo = $_POST["ticketNo"];
  $favoFlg = $_POST["favoFlg"];

  // echo "{$userNo}が{$ticketNo}を選んだよ";

  if($favoFlg === "false") {
    $sql = "insert into t_like values({$userNo}, {$ticketNo})";
    $msg = "お気に入りに追加しました。";
  }else {
    $sql = "delete from t_like where f_userNo = {$userNo} and f_ticketNo = {$ticketNo}";
    $msg = "お気に入り解除しました。";
  }

  $result = mysqli_query($db_link, $sql);

  if(!$result){
    $msg = "エラーが起きました。";
  }

  echo $msg;
 ?>
