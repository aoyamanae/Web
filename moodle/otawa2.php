このコードをPHPでforeach文を使って書き直して下さい｡
わからない場合は降参と書いて次へ進め｡

<?php
$country= [
  'カナダ'=>['オタワ','トロント','モントリオール',],
  'スイス'=>['ジュネーブ','チューリッヒ','ベルン'],
  'ドイツ'=>['ハンブルク','ブレーメン','ベルリン'],
  'スペイン'=>['バルセロナ','マドリード','リスボン'],
  'オーストラリア'=>['シドニー','メルボルン','キャンベラ']
  ] ;
  ?>
<form name="radioB">
  <?php
$q=0;
foreach ($country as $key => $value) {
  $q++;
  echo $key, 'の首都は? <br>' ;
  foreach ($value as $v) {
    ?>
  <input type="radio" name="Q<?=$q?>"><?=$v?><br>
  <?php
  }  
}
?>
  <br>
  <input type="button" value="採点" onclick="saiten()" />
</form>