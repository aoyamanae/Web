<p>P75を参考にしてTシャツのサイズごとの在庫を代入して,表示してください
  インデクスSには3,Mは1,Lは0
</p>

<?php
$Tshuts['s']=3;
$Tshuts['m']=1;
$Tshuts['l']=0;

var_dump($Tshuts);

echo $Tshuts['s'] ;
echo $Tshuts['m'] ;
echo $Tshuts['l'] ;

echo '<br>';
echo $Tshuts['s'] ,'<br>' ;
echo $Tshuts['m'] ,'<br>' ;
echo $Tshuts['l'] ,'<br>' ;

?>