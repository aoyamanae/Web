<?php require '../header.php'; ?>

<?php
if (isset($_POST['user'])) {
  # code...
  echo 'ようこそ、', $_POST['user'], 'さん。';
}
?>

<?php require '../footer.php'; ?>