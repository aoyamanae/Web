<?php session_start();
function random($length = 8){
    return substr(str_shuffle('1234567890abcdefghijklmnopqrstuvwxyz'), 0, $length);
}
$_SESSION['token'] = random(20);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  <!--スマホ-->
  <title>お問い合わせ - FOREST STUDIO</title>
  <link rel="stylesheet" href="style.css">  
  <!--[if lt IE 9]>
  <script src="html5shiv-printshiv.js"></script>
  <![endif]-->
</head>
<body id="contact">
  
  <header>
    <h1><a href="index.html"><img src="src/logo.png" alt="">FOREST STUDIO</a></h1>
    <nav>
      <ul>
        <li><a href="index.html">トップ</a></li>
        <li><a href="news.html">お知らせ</a></li>
        <li><a href="about.html">工房について</a></li>
        <li><a href="contact.php">お問い合わせ</a></li>
      </ul>
    </nav>
  </header>

  <article>
    <h1>お問い合わせ</h1>
    <p>ご意見、ご感想などがありましたら、以下の欄にご記入の上、送信してください。また、森の工房やイベントに関するご質問などもお気軽にお寄せください。</p>

    <form action="contact-output.php" method="post">
      <p>
        <label>
          名前 : <input type="text" name="username" id="">
        </label>
      </p>
      <p>
        <label>
          メールアドレス : <input type="email" name="usermail" id="">
        </label>
      </p>
        <label>
          コメント : <textarea name="usercomment" id="" cols="30" rows="10"></textarea>
        </label>
      </p>

      <input type="hidden" name="token" value="<?=$_SESSION['token']?>">  
      <p><input type="submit" value="送信"></p>
    </form>

  </article>

  <footer>
    <small>Copyright &copy; FOREST STUDIO, all rights reserved.</small>
  </footer>

</body>
</html>