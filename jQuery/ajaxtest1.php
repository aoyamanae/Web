<html>
<body>

<?php
// $a = "1234\n";
// echo $a;
// echo __FILE__; //組み込み定数
?>

<?php
$pdo=new PDO ('mysql: host=localhost; dbname=an_shop; charset=utf8','aoyama_nae','Asdf3333-');
// foreach ( $pdo->query('select * from product where id ='. $_POST['shohin_id']) as $row) {
// 	echo '<p>';
// 	echo $row['id'], ':';
// 	echo $row['name'], ':';
// 	echo $row['price'];
//  echo '</p>';
// }

$sql = 'select * from product where id ='. $_POST['shohin_id'];
$stmt = $pdo->query($sql);
$p = '';
foreach ( $stmt as $row) {
  $p .= $row['id']. ':';
  $p .= $row['name']. ':';
  $p .= $row['price'];
  echo json_encode($p);
}
?>
</body>
</html>