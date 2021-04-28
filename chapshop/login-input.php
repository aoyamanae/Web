<?php session_start(); ?>
<?php require 'header.php'; ?>
<form class="login" action="login-output.php" method="post">
  <div class="logintable">
  <p>ログイン名 <input type="text" name="login" id=""></p>
  <p>パスワード <input type="password" name="password" id=""></p> 
  </div>
  <input type="submit" value="ログイン">
</form>
<?php require 'footer.php'; ?>