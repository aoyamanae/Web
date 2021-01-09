さっきと同じ問題を作ってください｡

<?php
$pre=[
  '香川県'=>['高松市','丸亀市','坂出市'],
  '愛媛県'=>['松山市','大洲市','伊予市'],
  '島根県'=>['松江市','浜田市','出雲市'],
  '三重県'=>['津市','四日市市','伊勢市'],
  '滋賀県'=>['大津市','彦根市','長浜市'],
]
?>
<form name="radio">
<?php
$q=0;
foreach ($pre as $key => $value) {
  echo $key,'の県庁所在地は?<br>';
  $q++;
  foreach ($value as $v) {
    ?>

<input type="radio" name="Q<?=$q?>"> <?=$v?> <br> 

    <?php
  }
}
?>
<input type="button" value="採点">
</form>