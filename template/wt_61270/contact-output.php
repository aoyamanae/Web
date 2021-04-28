<?php session_start(); ?>
<?php
if (empty($_REQUEST)) {
  exit ("直接開かないでください");
}

// いずれかがカラなら送信しない
if( empty($_POST['name']) || empty($_POST['email']) || empty($_POST['comment']) || empty($_POST['token']) || $_POST['token']!=$_SESSION['post']['token']){
	echo '<p>送信出来ませんでした｡戻って入力し直してください｡';	

}else{

	$_SESSION['post']['name']=htmlspecialchars($_POST['name'])."\n";
  $_SESSION['post']['email']=htmlspecialchars($_POST['email']).PHP_EOL;
  $_SESSION['post']['comment']=htmlspecialchars($_POST['comment'])."\n";

  $body=$_SESSION['post']['name']."\n";
  // 代入(初期化)
  $body.=$_SESSION['post']['email'].PHP_EOL;
  // 文字連結(くっつけて代入)
  $body.=$_SESSION['post']['comment']."\n";

  $header="From: {$_SESSION['post']['email']}";
  // $header.="\n";
  // $header.="Bcc: foo@example.com";
  $admin = 'sasakinae8@gmail.com';
  // mb_send_mail('宛先','件名','本文',送信元 );
  $success = mb_send_mail( $admin ,'お問合せ',$body,$header);

  //お客へ返信
  $header="From: $admin";
  $success = mb_send_mail($_SESSION['post']['email'],'お問合せありがとうございます',$body,$header);

	// メールサーバーに届いたら $successには trueが代入されるので
	if( $success ){ 
		echo '<p>お問合せありがとうございました｡<br>確認用のメールを送信しております｡';
	}else{
		echo '<p>申し訳ありません。送信出来ませんでした｡';	
	}
	$_SESSION['post']=null;
}
?>
<br>
<a href="index.php">HOMEに戻る</a>