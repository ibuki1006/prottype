<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="./images/logo.svg" id="icon" alt="User Icon" /><br>
      <h2>新規登録</h2>
    </div>

    <!-- Login Form -->
    <form action="index.php?page=addusercomp" method="post">
      <input type="text" id="login" class="fadeIn second" name="id" placeholder="ID">
      <input type="text" id="login" class="fadeIn second" name="name" placeholder="名前">
      <input type="text" id="login" class="fadeIn second" name="kana" placeholder="名前（カナ）">
      <input type="text" id="login" class="fadeIn second" name="mead" placeholder="メールアドレス">
      <input type="text" id="password" class="fadeIn third" name="pass01" placeholder="パスワード">
      <input type="text" id="password" class="fadeIn third" name="pass02" placeholder="パスワード確認用">
      <input type="text" id="phone" class="fadeIn third" name="phone" placeholder="電話番号">
      <input type="text" id="phone" class="fadeIn third" name="address" placeholder="住所">
      <input type="submit" class="fadeIn fourth" value="登録">
    </form>

  </div>
</div>