<!-- 練習問題 -->
年齢が入力されていることをチェックしてから判定してください
0~2は 乳児園 
3以上は保育園と出す
不足したコードを追加してください｡
<br>

<?php
	$_POST['age'] = 4 ; // ← 入力されたのと同じ
	if(isset($_POST['age'])) {
		if( $_POST['age'] < 3 ) {
			echo "乳児園";
		}
else {
	echo "保育園";
}
	}
?>

<br>


<?php
	$_POST['age'] = 4 ; // ← 入力されたのと同じ
    if(isset($_POST['age']) && $_POST['age'] < 3) {
			echo "乳児園";
		}
else {
	echo "保育園";
	}
?>