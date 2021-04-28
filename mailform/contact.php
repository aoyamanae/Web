<?php
 session_start();
	// トークン作成のための関数
  function token($length = 20){  	
    return substr(str_shuffle('1234567890QWERTYUIOPLKJHGFDSAZXCVBNMabcdefghijklmnopqrstuvwxyz'), 0, $length);
  }
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>お問い合わせ - FOREST STUDIO</title>
  <link rel="stylesheet" href="style.css">

</head> 

<body id="contact">

  <article>
    <h1>お問い合わせ</h1>

    <p>ご意見、ご感想などがありましたら、以下の欄にご記入の上、送信してください。また、森の工房やイベントに関するご質問などもお気軽にお寄せください。</p>

    <form action="confirm.php" method="post">
<?php
  $_SESSION['post']['token']=token();
?>      
      <input type="hidden" name="token" value="<?=$_SESSION['post']['token']?>">
      <p>
        <label>名前：</label> <input type="text" name="username">
      </p>

      <p>
        <label>メールアドレス：</label> <input type="email" name="usermail">
      </p>

      <p>
        <label>コメント：</label> <textarea name="usercomment"></textarea>
      </p>

      <p><input type="submit" value="送信"></p>
    </form>
  </article>

  <footer>
    <small>Copyright &copy; FOREST STUDIO, all rights reserved.</small>
  </footer>

</body>

</html>
