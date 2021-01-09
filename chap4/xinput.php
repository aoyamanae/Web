<!-- 練習問題 -->
<p>なにも選ばずに送信した場合に値が届くのはどれ?
不足したタグを追加して試してください</p>

<?php
	if(isset($_POST['btn'])){
		var_dump( 
			!empty ($_POST['txt']) , 
			isset ($_POST['chk']) , 
			isset ($_POST['rdo']) , 
			!empty ($_POST['sct']) , 
		);
	}
?>

<form action="" method="post"> 
<input type="text" name="txt" required>

<input type="checkbox" name="chk[]" value="0" >
<input type="checkbox" name="chk[]" value="1" >
<input type="checkbox" name="chk[]" value="2" >

<input type="radio" name="rdo" value="4" required>
<input type="radio" name="rdo" value="5" >
<input type="radio" name="rdo" value="6" >

<select name="sct" required>
	<option value="">選択</optio>
	<option>7</option>
	<option>8</option>
	<option>9</option>
</select>

<input type="submit" name="btn" value="sousin">

</form>