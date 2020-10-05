<?php
  $host    = "localhost";
  $user    = "root";
  $pass    = "root";
  $db_name = "halzon";

  $db_link   = mysqli_connect($host,$user,$pass);

  mysqli_select_db($db_link, $db_name);
  mysqli_set_charset($db_link,"utf8");

?>
