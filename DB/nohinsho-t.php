<?php /*先生の模範解答*/
require_once 'connect.php';

if( !empty($_GET['denpyo_id']) ){
$denpyo_id = htmlspecialchars($_GET['denpyo_id'],ENT_QUOTES); 
// 直書きではなく、url parameter 取得

$sql = "SELECT *
        FROM denpyo
        LEFT JOIN tokui USING(tokui_id)
        WHERE denpyo_id =  ?"; // ←placeholder

$sth = $dbh->prepare( $sql );
$sth->bindParam(1, $denpyo_id, PDO::PARAM_INT);
// 1は?の順番、文字ならPARAM_STR
$sth->execute();
}else{
	$denpyo_id = 0 ;
	$sth = [['denpyo_id'=>'', 'tokui_id'=>'','tokui_mei'=>'', 
	         'jusho'=>'', 'juchu_bi'=>'']];
}

foreach($sth as $key=> $row){
?>
  <table>
  	<tr><td> 受注伝票 </td><td>
  			<p><b>伝票番号</b>
		   <span>
<!-- textテーブルを作成する -->
	<form>
	<input type="number" name="denpyo_id" 
	value="<?=$row['denpyo_id']?>"> <!-- valueに入れると残る -->
	<input type="submit" name="出す" id="">
	</form>
				<!-- <?=$row['denpyo_id']?> -->
				</span></p> 
  			<p><b>受注年月日</b><span><?=$row['juchu_bi']?></span></p>
  	 </td></tr>  	
  	<tr><td> 
			<p><b>得意先コード</b><span><?=$row['tokui_id']?></span></p>
  	</td> <td> 
			<p><b>得意先名</b><span><?=$row['tokui_mei']?></span></p>
			<p><b>得意先住所</b><span><?=$row['jusho']?></span></p>
  	</td>
  </tr>
  </table>
  	
<?php } 
 
$sql = "SELECT shohin_mei,tanka, suryo 
, tanka * suryo as shokei
FROM shosai 
LEFT JOIN shohin USING(shohin_id)
WHERE denpyo_id = ? ";
// var_dump($sql);

$sth = $dbh->prepare( $sql );
$sth->bindParam(1, $denpyo_id, PDO::PARAM_INT);
$sth->execute();

$table = '<table border="1">
<tr><th>商品名</th><th>単価</th><th>数量</th><th>小計</th></tr>';
$goke = 0;
foreach($sth as $key=> $row){
	$table .= "<tr>";
  $table .= "<td> {$row['shohin_mei']} </td>";
  $table .= "<td> {$row['tanka']} </td>";
  $table .= "<td> {$row['suryo']} </td>";
  $table .= "<td> {$row['shokei']} </td>";
	$table .= "</tr>";
	$goke += $row['shokei'];
}
$table .= "<td colspan='2'></td><td>合計</td><td> $goke </td></table>";
echo $table;
?>

<style>
@media print { 
	input[type="number"]{border: none;}
	input[type="submit"]{display: none;}
}
</style>