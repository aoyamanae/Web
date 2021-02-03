
<?php
/*売上分析の帳票をつくる*/
require_once 'connect.php';

//selectの選択肢を作る
function make_option($tb){
  global $dbh;
  $sql = "SELECT * FROM $tb";
  $sth = $dbh->prepare( $sql );
  $sth->execute();
  $option = '<option value=""> 選択してください';
  foreach ($sth as $key => $value)
    $option .= "<option value={$value[$tb.'_id']}> {$value[$tb.'_mei']}";
  return $option;
}

?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<form>
  <div class="container">
    <h1>売上分析</h1>
    <p>
      期間 <input type="date" name="start" value="2019-01-01" required>
      ~ <input type="date" name="end" value="2021-02-03" required>
    </p>
    <div class="row">
      <div class="col-6">
        <label>得意先名</label><select name="tokui_id"><?php echo make_option('tokui')?></select>
        <p><label>グループ化<input type="radio" name="group" class="control" value="tokui"></label>
      </div>
      <div class="col-6">
        <label>商品名</label><select name="shohin_id"><?php echo make_option('shohin')?></select>
        <p><label>グループ化<input type="radio" name="group" class="control" value="shohin"></label>
      </div>
    </div>
    <input type="submit" class="btn btn-primary" value="実行">
  </div>
</form>

<?php
// 規定期間を指定
$sql = "SELECT %s, sum(tanka*suryo) as 合計 
FROM denpyo 
LEFT JOIN tokui using(tokui_id)
LEFT JOIN shosai using(denpyo_id)
LEFT JOIN shohin using(shohin_id)
WHERE juchu_bi between ? and ? ";

if (!empty($_GET['tokui_id'])) {
  // 特定の得意先への売上合計 一行
  $sql = sprintf($sql, 'tokui_mei');
  $sql .= " AND tokui_id = ?";
  $sth = $dbh->prepare( $sql );
  $sth->bindParam(1, $_GET['start'], PDO::PARAM_STR);
  $sth->bindParam(2, $_GET['end'], PDO::PARAM_STR);
  $sth->bindParam(3, $_GET['tokui_id'], PDO::PARAM_STR);
  $sth->execute();
  foreach ($sth as $key => $value) {
    print_r($value);
  }

} elseif (!empty($_GET['shohin_id'])) {
  // 特定の商品の売上合計
  $sql = sprintf($sql, 'shohin_mei');
  $sql .= " AND shohin_id = ?";
  $sth = $dbh->prepare( $sql );
  $sth->bindParam(1, $_GET['start'], PDO::PARAM_STR);
  $sth->bindParam(2, $_GET['end'], PDO::PARAM_STR);
  $sth->bindParam(3, $_GET['shohin_id'], PDO::PARAM_STR);
  $sth->execute();
  foreach ($sth as $key => $value) {
    print_r($value);
  }

} elseif (!empty($_GET['group'])) {
  if ($_GET['group'] == 'tokui') {
  // 得意先ごとの売上合計  
  $sql = sprintf($sql, 'tokui_mei');
  $sql .= "GROUP BY tokui_id";
  $sth = $dbh->prepare( $sql );
  $sth->bindParam(1, $_GET['start'], PDO::PARAM_STR);
  $sth->bindParam(2, $_GET['end'], PDO::PARAM_STR);
  $sth->execute();
  foreach ($sth as $key => $value) {
    print_r($value);
  }
  } else {
  // 商品ごとの売上合計  
  $sql = sprintf($sql, 'shohin_mei');
  $sql .= "GROUP BY shohin_id";
  $sth = $dbh->prepare( $sql );
  $sth->bindParam(1, $_GET['start'], PDO::PARAM_STR);
  $sth->bindParam(2, $_GET['end'], PDO::PARAM_STR);
  $sth->execute();
  foreach ($sth as $key => $value) {
    print_r($value);
  }
  }
}
?>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script>
$('select').change(function() {
  var thisVal = $(this).val(); //自分の値
  $('select').val(''); //selectを空に
  $(this).val(thisVal); //とっておいた自分の値
  $('[type="radio"]').prop('checked', false);
  //ラジオを両方ともOFFにする
});

$('[type="radio"]').change(function(){
    $('select').val('');
  });
</script>