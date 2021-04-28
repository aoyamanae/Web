<?php
 session_start();
// いずれかがカラなら送信しない
if( empty($_SESSION['post']['username']) || empty($_SESSION['post']['usermail']) || empty($_SESSION['post']['usercomment']) ){
	echo '<p>送信出来ませんでした｡戻って入力し直してください｡';	
	exit;
}

$body=$_SESSION['post']['username']."\n";
// 代入(初期化)
$body.=$_SESSION['post']['usermail'].PHP_EOL;
// 文字連結(くっつけて代入)
$body.=$_SESSION['post']['usercomment']."\n";

$header="From: {$_SESSION['post']['usermail']}";
// $header.="\n";
// $header.="Bcc: foo@example.com";
$admin = 'ytanakag1@gmail.com';
// mb_send_mail('宛先','件名','本文',送信元 );
$success = mb_send_mail( $admin ,'お問合せ',$body,$header);

//お客へ返信
$header="From: $admin";
$success = mb_send_mail($_SESSION['post']['usermail'],'お問合せありがとうございます',$body,$header);

	// メールサーバーに届いたら $successには trueが代入されるので
	if( $success ){ 
		echo '<p>お問合せありがとうございました｡<br>確認用のメールを送信しております｡';
	}else{
		echo '<p>送信出来ませんでした｡';	
	}

	$_SESSION['post']=null;



