<?php
  require_once("./session_cookie.php");
  require_once("./DB/db_connect.php");

  $mail = $_POST["mail"];
  $pass = $_POST["pass"];

  $flg = true;

  $t_userSelect = "select * from t_user where f_userMail = '{$mail}'";
  $t_userSelectResult = mysqli_query($db_link, $t_userSelect);
  $t_userSelectCount = mysqli_num_rows($t_userSelectResult);

  if($t_userSelectCount == 0){
    $flg = false;
  }else{
    $userInfo = mysqli_fetch_array($t_userSelectResult);
    if($userInfo["f_userPass"] != $pass){
      $flg = false;
    }
  }

  if($flg === false){
    fnc_setData("session", "err", "メールアドレスまたはパスワードが間違っています。");
    header("location: index.php?page=login");
  }else{
    fnc_setData("session", "userNo", $userInfo["f_userNo"]);
    fnc_setData("session", "userName", $userInfo["f_userName"]);
    fnc_setData("session", "kana", $userInfo["f_kana"]);
    fnc_setData("session", "userPass", $userInfo["f_userPass"]);
    fnc_setData("session", "email", $userInfo["f_userMail"]);
    fnc_setData("session", "phoneNumber", $userInfo["f_userPhone"]);
    header("location: index.php?page=top");
  }
 ?>
