<?php

	if( !empty($_POST['btn']) && $_POST['btn']=='確認'){
    // 確認処理を書く
    var_dump($_POST); //ループしてサニタイズ
    $input_name = [
      'plan'=>'プラン'
      ,'nenwari'=>'2年割'
      ,'rental'=>'機器レンタル'
      ,'nick-maisu'=>'LANカード枚数'
    ];
    foreach ($_POST as $key => $value){
      echo "<h3>$input_name[$key]</h3>"; //$keyはname属性部分。上の配列で日本語になる

			if(is_array($value)){
        foreach ($value as $k => $val) 
				$post[$key][$k] = htmlspecialchars($val,ENT_QUOTES);
				echo '<p>', $post[$key][$k];
			}else{
				$post[$key] = htmlspecialchars($value,ENT_QUOTES);
				echo '<p>', $post[$key];
			}
      
    }
    // 同時にバリデーションもチェックする

	}elseif ( !empty($_POST['btn']) && $_POST['btn']=='送信') {
    
    // 送信処理を書く

	}else{
    // 送信画面の始まり
  ?>
  <div id="first" class="container">
    <form method="post">
      <h3>プラン名</h3>
  <?php
      $plan = ['光ネオEXA ファミリー'
      ,'光ネオEXA ハイスピード'
      ,'光ネオEXA ギガライン'
      ,'光ネオEXA ギガスマート'];
      // これを回してラジオボタンを作る
      foreach ($plan as $key => $value) {
        echo "<label><input type='radio' name='plan' value='$value' required>$value</label>";
      }
  ?>
      <h3>2年割</h3>
      <label><input type="checkbox" value="申し込む">申し込む</label>
      <h3>機器レンタル</h3>
  <?php
      $rental = ['1G無線LANルータ (東日本のみ)','無線LANカード','HGW本体'];
      foreach ($rental as $key => $value) {
        echo "<label><input type='checkbox' name='rental[]' value='$value'>$value</label>" ;
      }
  ?>
      <label><input type="number" name="" min="1" max="99" step="1">枚</label>
      <input type="submit" name="btn" value="確認">
    </form>
  </div>
  <?php
	} //送信画面の終わり

?>

<style>
label {
  display: block
}
</style>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script>
$([type = "checkbox"]: nth - of -type(2)).change(function() {
  if ($(this).prop("checked")) {
    $([type = "number"]).attr(min = "1");
    $([type = "number"]).attr(required);
  }
});
</script>