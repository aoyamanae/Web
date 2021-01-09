このコードをPHPでforeach文を使って書き直して下さい｡
わからない場合は降参と書いて次へ進め｡

<?php
$city= ['オタワ','トロント','モントリオール','ジュネーブ','チューリッヒ','ベルン','ハンブルク','ブレーメン','ベルリン','バルセロナ','マドリード','リスボン','シドニー','メルボルン','キャンベラ',] ;
$country= ['カナダ','スイス','ドイツ','スペイン','オーストラリア'] ;
?>
<form name="radioB">
<?php
$q=0;
foreach ($city as $key => $value) {
  // echo $key ;
    if ($key%3 == 0) {
      echo $country [$q], 'の首都は? <br>' ;
      $q++ ;
      }
?>
<input type="radio" name="Q<?=$q?>"><?=$value?><br>
<?php
}
?>
<br>
<input type="button" value="採点" onclick="saiten()" />
</form>

