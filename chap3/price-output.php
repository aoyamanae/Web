<?php require '../header.php'; ?>

<?php 
echo $_POST['price'] , '円×';
echo $_POST['count'] , '個=';
echo $_POST['price'] * $_POST['count'] , '円';
?>

<?php require '../footer.php'; ?>
