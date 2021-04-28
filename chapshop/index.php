<?php session_start(); ?>
<?php require 'header.php'; ?>
<div id="images"><a href="product.php">
  <?php
  $dir = "images/";
  $list = scandir($dir);
  $files=array();
  foreach ($list as $value) {
    if (is_file($dir.$value)) {
      $files[]=$dir.$value;
    }
  }
  shuffle($files);
  for ($i=0; $i < 2; $i++) {
    echo "<img src='{$files[$i]}'>";
  }
  ?>
</a></div>
<?php require 'footer.php'; ?>