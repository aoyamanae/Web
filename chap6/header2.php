<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>PHP Sample Programs</title>
  <link rel="stylesheet" href="style.css">
  
</head>  <!-- ここまでがページの仕様 映らない-->
<body> <!--ここから下が映る-->
<div class="<?php echo 'main' ?>"></div>


<?php 
$pdo = new PDO ('mysql: host=localhost; dbname=an_shop; charset=utf8','aoyama_nae','Asdf3333-');
?>

<!--HTMLをphpが制御している-->

