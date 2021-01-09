<?php require '../header.php'; ?>

<?php 
$price= $_POST['price'];
$count= $_POST['count'];
echo $price, '円×';
echo $count, '個=';
echo $price* $count, '円';
?>

<?php require '../footer.php'; ?>
