<?php require '../header.php'; ?>
<p>購入数を選択してください。</p>
<form action="select-for-output.php" method="post">
<select name="count" id="">
<?php
$i=0;
while ($i <10) {
  // echo '<option value=" ',$i,' "> ',$i,' </option>';
  // 省略可能
  echo "<option> $i" ;
  $i++;
}
?>
</select>
<p><input type="submit" value="確定"></p>
</form>
<?php require '../footer.php'; ?>