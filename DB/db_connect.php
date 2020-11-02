<?php
  $host    = "127.0.0.1";
  $user    = "root";
  $pass    = "root";
  $db_name = "IW27";

  $db_link   = mysqli_connect($host,$user,$pass);

  mysqli_select_db($db_link, $db_name);
  mysqli_set_charset($db_link,"utf8");

?>
