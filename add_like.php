<?php
  require_once("./DB/db_connect.php");
  require_once("./class/ticket_class.php");

  $ticketNo = $_POST["ticketNo"];
  echo $ticketNo."を受信したよ";
 ?>
