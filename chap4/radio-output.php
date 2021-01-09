<?php require '../header.php'; ?>
<?php
switch ($_REQUEST['meal']) {
  case '和食':
    # code...
    echo '焼き魚、煮物、味噌汁、御飯、果物';
    break;
  case '洋食':
    # code...
    echo 'ジュース、オムレツ、ハッシュドポテト、パン、コーヒー';
    break;
  case '中華':
    # code...
    echo '春巻、餃子、卵スープ、炒飯、杏仁豆腐';
    break;
  default:
    # code...
    break;
}
echo 'をご提供いたします。';
?>
<?php require '../footer.php'; ?>