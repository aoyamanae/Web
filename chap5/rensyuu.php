<?php
/*文字列を指定する部分で区切り配列に格納する (explode()関数)
explode()関数 - 文字列を指定部分で分割し、配列に格納する*/

mb_language('ja');//念のため、一応いれておく
mb_internal_encoding('UTF-8');//念のため、一応いれておく

$str = 'ドラえもんとのび太とジャイアンとスネオ';
$cast = explode("と", $str);//"と"で分割し配列に入れた
echo $cast[1];

// 結果　のび太
echo "\n" ;
// 例２

$word = 'りんご,みかん,もも,すいか,パイナップル,';
$newword = explode(',',$word);//カンマ区切りで分割した
echo $newword["0"];  // 結果 りんご
echo $newword["1"];  //みかん


// 文字列を文字列で分解し配列化する関数↑
// 配列を文字で区切って文字列にする↓

$fruis =implode('|',$newword) ;
echo $fruis ;

$price =1287000 ;
echo "&yen;",number_format($price);


?>
