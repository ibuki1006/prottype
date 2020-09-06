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
    <form action="index.php?page=top" method="post">
      <input type="text" id="login" class="fadeIn second" name="login" placeholder="メールアドレス">
      <input type="text" id="password" class="fadeIn third" name="login" placeholder="パスワード">
      <input type="submit" class="fadeIn fourth" value="ログイン">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>
