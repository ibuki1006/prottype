<?php
  require_once("./session_cookie.php");
  require_once("./DB/db_connect.php");
  require_once("./class/ticket_class.php");

  $userNo = fnc_getData("session", "userNo");
  $userName = fnc_getData("session", "userName");
  $kana = fnc_getData("session", "kana");
  $userPass = fnc_getData("session", "userPass");
  $email = fnc_getData("session", "email");
  $phoneNumber = fnc_getData("session", "phoneNumber");
 ?>

<?php
  $page = "top";
  if(isset($_GET["page"])){
    $page = $_GET["page"];
  }
 ?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <!-- 文字コード設定 -->
    <meta charset="utf-8">

    <!-- viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- bootstrap4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Luxbar -->
    <link rel="stylesheet" href="https://cdn.rawgit.com/balzss/luxbar/ae5835e2/build/luxbar.min.css">

    <!-- css -->
    <link rel="stylesheet" href="./css/header.min.css">
    <link rel="stylesheet" href="./css/footer.min.css">
    <link rel="stylesheet" href="./css/<?php print $page; ?>.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <!-- fontawesome -->
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">

    <title>チケトレ プロトタイプ</title>

    <!-- favicon設定 -->
    <link rel="shortcut icon" href="images/logo.ico">

  </head>
  <body>

  <?php
    // print_r($_SESSION);

    if(fnc_chkData("session", "userNo")){
      include_once(__DIR__."/include/header_l.php");
    }else{
      include_once(__DIR__."/include/header.php");
    }
  ?>

  <?php include_once(__DIR__."/include/$page.php"); ?>

  <?php include_once(__DIR__."/include/footer.php");?>

    <!-- bootstrap4 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/resev.js"></script>
    <script src="js/main.js"></script>
    <script src="./js/ajax.js"></script>

  </body>
</html>
