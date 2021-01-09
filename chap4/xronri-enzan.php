https://ultimai.org/mdlsrc/pazl/waterSrider.html
ここを開いて､フローチャートを完成させつつ
単一のif文で評価式を作って正しく分岐させてください｡
<p>ウォータースライダーに乗れる条件</p>
<?php
	$h = 0 ; //身長
	$a = 0 ;   //age
	$p = true ; //parents
	
	if ($p || $h>=120 || $a>=11) {
		echo "乗れる";
	}
	else {
		echo "乗れない";
	}
?>

<br>
	チャレンジャーなら難易度が高いこっち
	https://ultimai.org/mdlsrc/pazl/waterSrider2.html
	<p>ウォータースライダーに乗れる条件</p>
  <?php
	$h = 120 ; //身長120cm以上
	$a = 110 ;   //age11歳以上
	$p = false ; //parents
	$s = true ; //目や耳の疾患がない
	$w = 150 ; //体重100kg以下
	if ( $s && $w<=100 && $p || $h>=120 || $a>=11) { //これだと体重が超えてても乗れちゃうよ
		echo "乗れる";
	}
	else {
		echo "乗れない";
	}
	?>

<!-- 模範解答 -->
<?php
	$h = 120 ; //身長120cm以上
	$a = 110 ;   //age11歳以上
	$f = false ; //parents同伴ではない
	$s = false ; //目や耳の疾患がない
	$w = 150 ; //体重100kg以下

	if (($f || $h>=120 || $a>=11) && (!$s && $w<=100)) {
		echo "乗れる";
	}
	else {
		echo "乗れない";
	}
	?>

	
