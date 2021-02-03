<?php
/*denpyoからAjaxで得意先のデータを返す*/
require_once 'connect.php';

if( !empty($_POST['shohin_id']) ){ 
  $shohin_id = htmlspecialchars($_POST['shohin_id'],ENT_QUOTES);
    $sql = "SELECT *
    FROM shohin
    WHERE shohin_id = ?"; //←placeholder
  
    $sth = $dbh->prepare( $sql );
    $sth->bindParam(1, $shohin_id, PDO::PARAM_STR); //文字  
    $sth->execute();

  // foreach ($sth as $key => $row) 
  // PDO::FETCH_ASSOCK フィールド名ならこっち
  // $row = $sth->fetchAll(PDO::FETCH_NUM);
  $row = $sth->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($row[0]);
}
