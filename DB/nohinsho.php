<?php  /*納品書の商品明細*/
require_once 'connect.php';
// $denpyo_id = 20;
// $sql = "SELECT * FROM denpyo
// LEFT JOIN tokui USING(tokui_id)
// WHERE denpyo_id = ? ";
// $sth = $dbh->prepare( $sql );
// $sth->bindParam(1, $denpyo_id, PDO::PARAM_INT);
// $sth->execute();

if( !empty($_GET['denpyo_id']) ){
  $denpyo_id = htmlspecialchars($_GET['denpyo_id'],ENT_QUOTES); 
  // 直書きではなく、url parameter 取得
  $sql = "SELECT * FROM denpyo
          LEFT JOIN tokui USING(tokui_id)
          WHERE denpyo_id =  ?"; 
  $sth = $dbh->prepare( $sql );
  $sth->bindParam(1, $denpyo_id, PDO::PARAM_INT);
  $sth->execute();
  }else{
    $denpyo_id = 0 ;
    $sth = [['denpyo_id'=>'', 'tokui_id'=>'','tokui_mei'=>'', 
             'jusho'=>'', 'juchu_bi'=>'']];
  }

foreach($sth as $key=> $row){
?>

<table class="none yoko">
  	<tr><td class=none> <b>受注伝票</b> </td>
     <td class=none>
  			<b>伝票番号</b> 
        <span>
<!-- textテーブルを作成する -->
	<form>
	<input type="number" name="denpyo_id" 
	value="<?=$row['denpyo_id']?>"> <!-- valueに入れると残る -->
	<input type="submit" name="出す" id="">
	</form>
				<!-- <?=$row['denpyo_id']?> -->
				</span></p> 
        
  			<br><b>受注年月日</b> <span><?=$row['juchu_bi']?></span>
  	 </td></tr>  	
  	<tr><td class=none> 
			<b>得意先コード</b><span><?=$row['tokui_id']?></span>
  	</td> <td class=none> 
			<b>得意先名</b><span><?=$row['tokui_mei']?></span>
			<br><b>得意先住所</b><span><?=$row['jusho']?></span>
  	</td>
  </tr>
  </table>
  
<?php
}
$sql = "SELECT * FROM shosai 
        LEFT JOIN shohin USING(shohin_id)
        WHERE denpyo_id = ? ";
// var_dump($sql);
$sth = $dbh->prepare( $sql );
$sth->bindParam(1, $denpyo_id, PDO::PARAM_INT);
$sth->execute();

$table = '<table>
          <tr><th>商品コード</th>
          <th>商品名</th><th>単価</th>
          <th>数量</th><th>小計</th></tr>' ; //見出しはthで囲む
$sum = 0;
foreach ($sth as $key => $row) {
  // var_dump($row);
  $syokei = $row['suryo']*$row['tanka'];
  $table .='<tr><td>'. $row['shohin_id'].'</td>
          <td>'.$row['shohin_mei'].'</td>
          <td>'.$row['tanka'].'</td>
          <td>'.$row['suryo'].'</td>
          <td>'.$syokei.'</td>
          </tr>';
  $sum += $syokei;
}
$table .= '<tr>
          <td colspan="4">合計金額</td>
          <td>'.$sum.'</td>
          </tr></table>';

echo $table;
?>

<style>
table,td,th {
  border: 1px solid #595959;
  border-collapse: collapse;
  text-align: center;
}

td,th {
  padding: 3px;
  width: 90px;
  height: 25px;
}

th {
  background: #f0e6cc;
}

.even {
  background: #fbf8f0;
}

.odd {
  background: #fefcf9;
}

.none {
  border: none;
  text-align: left;

}

.yoko {
  padding: 3px;
  width: 490px;
}

span {
  text-size: 490px;
  text-decoration:underline;
  text-align: right ;
}

</style>