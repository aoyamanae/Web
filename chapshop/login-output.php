<?php session_start(); ?>
<?php require 'header.php'; ?>
<?php
unset($_SESSION['customer']);
$sql=$pdo->prepare('select * from customer where login=?');
$sql->execute([$_REQUEST['login']]);
foreach ($sql as $row) {
  $_SESSION['customer']=[
    'id'=>$row['id'], 
    'name'=>$row['name'],
    'address'=>$row['address'], 
    'login'=>$row['login'],
    'password'=>$row['password'], //これは必要
    'mail'=>$row['mail']
  ];
}
if (empty($_POST['password'] && $_SESSION['customer'])) { //??
  echo 'ログイン名またはパスワードが入っていません。';
} elseif (password_verify($_POST['password'],$_SESSION['customer']['password'])){
    echo 'いらっしゃいませ、', $_SESSION['customer']['name'], 'さん。';
} else {
  echo 'ログイン名またはパスワードが違います。';
}
?>
<?php require 'footer.php'; ?>