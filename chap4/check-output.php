<?php require '../header.php'; ?>

<?php
if (isset($_POST['mail'])) {
  echo 'お買い得情報のメールをお送りさせて頂きます。';
} else {
  echo 'お買い得情報のメールをお送りさせて頂きません。';
}
?>

<?php require '../footer.php'; ?>

