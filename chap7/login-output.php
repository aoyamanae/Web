<!-- この関数でハッシュ化したパスワードと照合し正しければTRUEが返される -->
<!-- if (password_verify($_POST['password'],$_SESSION['customer']['password']))  -->

<?php session_start(); ?>
<?php require 'header3.php'; ?> 

<?php 

if (empty($_REQUEST)) {
  exit ("直接開かないでください");
}

unset($_SESSION['customer']);
$sql=$pdo->prepare('select * from customer where login=? and password=?');
$sql->execute([$_REQUEST['login'], $_REQUEST['password']]);
foreach ($sql as $row) {
  $_SESSION['customer']=[
    'id'=>$row['id'], 
    'name'=>$row['name'],
    'address'=>$row['address'], 
    'login'=>$row['login'],
    'password'=>$row['password']
  ];
}
if (password_verify($_POST['password'],$_SESSION['customer']['password'])){ 
  // if (isset($_SESSION['customer'])) {
    echo 'いらっしゃいませ、', $_SESSION['customer']['name'], 'さん。';
  // }
} else {
  echo 'ログイン名またはパスワードが違います。';
}
?> 
<?php require '../footer.php'; ?>