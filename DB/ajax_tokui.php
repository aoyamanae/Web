<!-- xfreeへ -->
<?php
/*denpyoからAjaxで得意先のデータを返す*/
require_once 'connect.php';

if( !empty($_POST['tokui_id']) ){ 
  // var_dump($_POST['tokui_id']);exit;
  $tokui_id = htmlspecialchars($_POST['tokui_id'],ENT_QUOTES); //伝票番号
  
    $sql = "SELECT *
    FROM tokui
    WHERE tokui_id = ?"; //←placeholder
  
    $sth = $dbh->prepare( $sql );
    $sth->bindParam(1, $tokui_id, PDO::PARAM_INT);   // 1は ?の順番､文字なら PARAM_STR
    $sth->execute();

  // foreach ($sth as $key => $row) 
  // PDO::FETCH_ASSOC フィールド名ならこっち
  $row = $sth->fetchAll(PDO::FETCH_NUM);
    echo json_encode($row[0]);
}
