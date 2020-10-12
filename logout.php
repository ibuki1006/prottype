<?php
  require_once("DB/db_connect.php");

  session_start();
  session_destroy();

  mysqli_close($db_link);

  header("location: index.php?page=top");
 ?>
