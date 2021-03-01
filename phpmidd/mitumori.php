<h3>プラン名</h3>
<?php
$plan = ['光ネオEXA ファミリー'
,'光ネオEXA ハイスピード'
,'光ネオEXA ギガライン'
,'光ネオEXA ギガスマート'];
// これを回してラジオボタンを作る
foreach ($plan as $key => $value) {
  echo "<label><input type='radio' value='$value'>$value</label><br>";
}
?>
<h3>2年割</h3>
<label><input type="checkbox" value="申し込む">申し込む</label>

<h3>機器レンタル</h3>
<?php
$rental = ['1G無線LANルータ (東日本のみ)','無線LANカード','HGW本体'];
foreach ($rental as $key => $value) {
  echo "<label><input type='checkbox' value='$value'>$value</label><br>" ;
}
?>

<input type="number" name="" min="1" max="99" step="1">

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script>
$([type = "checkbox"]:nth-of-type(2)).change(function() {
  if ($(this).prop("checked")) {
    $([type = "number"]).attr(min = "1");
    $([type = "number"]).attr(required);
  }
});
</script>