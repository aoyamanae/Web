<?php  session_start();

if( !empty($_POST['username']) && !empty($_POST['usermail']) 
&& !empty($_POST['usercomment']) && !empty($_POST['token']) 
&& $_POST['token'] == $_SESSION['token']){

	$body = '';
	foreach ($_POST as $key => $value) 
		$body.=htmlspecialchars($value,ENT_QUOTES).PHP_EOL;

	$header = "From: \n";
	$header .= "Cc: \n";
	$header .= "Bcc: ";

	$success = mb_send_mail($_POST['usermail'] ,'お問合せ',$body,$header);
	// メールサーバーに届いたら $successには trueが代入されるので
	
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

<body id="output">

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
    <!-- <form action="index.html" method="post"> -->
      <?php
if( $success ){ 
  echo '<p>お問合せありがとうございました｡';
}else{
  echo '<p>送信出来ませんでした｡';
}

}else{
echo '<p>必須項目がありません';
}
// var_dump($_POST);
      ?>
      <table>
        <caption>送信内容</caption> <!--内容確認-->
        <tr>
          <th style="width:150px">項目</th>
          <th style="width:400px">内容</th>
        </tr>
        <tr>
          <td style="width:150px">名前</td>
          <td><?=$_POST["username"]?></td>
        </tr>
        <tr>
          <td style="width:150px">メールアドレス</td>
          <td><?=$_POST["usermail"]?></td>
        </tr>
        <tr>
          <td style="width:150px">コメント</td>
          <td><?=$_POST["usercomment"]?></td>
        </tr>
      </table>

      <!-- <input type="submit" value="送信"> -->
    </form>
  </article>

  <footer>
    <small>Copyright &copy; FOREST STUDIO, all rights reserved.</small>
  </footer>

</body>

</html>