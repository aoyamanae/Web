<?php
/*売上分析の帳票をつくる*/
require_once 'connect.php';

$sql = "SELECT * FROM tokui";
$sth = $dbh->prepare( $sql );
$sth->execute();
$tokui_select = '';
$tokui_select .= '<option value="">選択してください</option>';
foreach ($sth as $key => $row) {
  $tokui_select .= "<option value='{$row['tokui_id']}'> {$row['tokui_mei']} </option>";
}
$sql = "SELECT * FROM shohin";
$sth = $dbh->prepare( $sql );
$sth->execute();
$shohin_select = '';
$shohin_select .= '<option value="">選択してください</option>';
foreach ($sth as $key => $row) {
  $shohin_select .= "<option value='{$row['shohin_id']}'> {$row['shohin_mei']} </option>";
}
?>
<!-- action="sales-output.php" -->
<form  method="post">
<b>売上分析</b>
<p>
  期間 <input type="date" name="start" id="">
   ~ <input type="date" name="end" id="">
</p>
<p>
  得意先名 <select name="tokui_id" id=""><?=$tokui_select?></select>
  グループ化 <input type="radio" name="tokui" id="">
</p>
<p>
  商品名 <select name="shohin_id" id=""><?=$shohin_select?></select>
  グループ化 <input type="radio" name="shohin" id="">
</p>
<input type="submit" value="送信">
</form>

<?php
var_dump($_POST);
?>