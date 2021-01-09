<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <img src="img/kai.png" alt="開">
  <img src="img/fuda6.png" alt="鳥居">
  <img src="img/un.png" alt="運">
  <br>
  <?php
  $omi ='img/dai.png,
  img/daikyo.png,
  img/kyo.png,
  img/chu.png,
  img/kichi.png,
  img/shou.png,
  img/sue.png' ;
  $result = explode(',',$omi);
  $num = rand(1,100);
  if($num <= 10){
    $n = $result[0];
  } elseif ($num > 10 && $num <= 20) {
    $n = $result[1];
  } elseif ($num > 20 && $num <= 35) {
    $n = $result[2];
  } elseif ($num > 35 && $num <= 51) {
    $n = $result[3];
  } elseif ($num > 51 && $num <= 67) {
    $n = $result[4];
  } elseif ($num > 67 && $num <= 83) {
    $n = $result[5];
  } elseif ($num > 83 && $num <= 100) {
    $n = $result[6];
  }
?>
  <img src="<?=$n?>" class="omi">
</body>

</html>