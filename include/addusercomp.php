<?php

include("./DB/db_connect.php");

$id = $_POST["id"];
$name = $_POST["name"];
$kana = $_POST["kana"];
$mead = $_POST["mead"];
$pass01 = $_POST["pass01"];
$pass02 = $_POST["pass02"];
$phone = $_POST["phone"];
$address = $_POST["address"];

$insert_sql = "INSERT INTO t_user(f_userId,f_userPass,f_userName,f_userKana,f_userPhone,f_userAddress,f_userMail)VALUES('$id','$pass01','$name','$kana','$phone','$address','$mead')";

$insert_sql_result = mysqli_query($db_link,$insert_sql);

if($insert_sql_result === true){
    $msg = "ユーザー登録に成功しました。" ;
} else {
    $msg = "ユーザー登録に失敗しました。";
}
?>

<div class="container">
    <p><?php print $msg;?></p>
</div>