<?php session_start(); ?>
<?php require 'header.php'; ?>
<?php
if (isset($_SESSION['customer'])) {
  $sql=$pdo->prepare('insert into favorite values(?,?)');
  $sql->execute([$_SESSION['customer']['id'], $_REQUEST['id']]); //sessionではなくrequest
  echo 'お気に入りに商品を追加しました。';
  echo '<hr><div class="none">';
  require 'favorite.php';
  echo '</div>';
} else {
  echo 'お気に入りに商品を追加するには、ログインしてください。'; 
}
?>
<?php require 'footer.php'; ?>