<?php session_start(); ?>
<?php require 'header3.php'; ?> 

<?php 
if (empty($_REQUEST)) {
  exit ("直接開かないでください");
}
unset($_SESSION['customer']);
$sql=$pdo->prepare('select * from customer where login=?');
//passwordを暗号化してるからand password=?を削除
$sql->execute([$_REQUEST['login']]);
//同じく, $_REQUEST['password']も削除
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
// var_dump($_POST['password'],$_SESSION['customer']['password']);
if (password_verify($_POST['password'],$_SESSION['customer']['password'])){
  // この関数でハッシュ化したパスワードと照合し正しければTRUEが返される
  // if (isset($_SESSION['customer'])) {  パスワード化したので変更
    echo 'いらっしゃいませ、', $_SESSION['customer']['name'], 'さん。';
  // }
} else {
  echo 'ログイン名またはパスワードが違います。';
}
?> 
<?php require '../footer.php'; ?>