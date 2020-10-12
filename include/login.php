<?php
  $err = "";
  if(fnc_chkData("session", "err")) {
    $err = fnc_getData("session", "err");
  }
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="./images/logo.svg" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form action="check.php" method="post">
      <input type="text" id="login" class="fadeIn second" name="mail" placeholder="メールアドレス">
      <input type="text" id="password" class="fadeIn third" name="pass" placeholder="パスワード">
      <p class="err-msg"><?php echo $err; ?></p>
      <input type="submit" class="fadeIn fourth" value="ログイン">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>

<?php
  fnc_delData("session", "err");
 ?>
