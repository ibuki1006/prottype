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

    <!-- css -->
    <link rel="stylesheet" href="./css/header.min.css">
    <link rel="stylesheet" href="./css/footer.min.css">
    <link rel="stylesheet" href="./css/<?php print $page; ?>.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <!-- fontawesome -->
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">

    <title>チケトレ プロトタイプ</title>
  </head>
  <body>

  <?php include_once(__DIR__."/include/header.php")?>

  <?php include_once(__DIR__."/include/$page.php"); ?>

  <?php include_once(__DIR__."/include/footer.php")?>

    <!-- bootstrap4 -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
  </body>
</html>
