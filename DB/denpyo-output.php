<?php
/*  hakko.phpからsubmit POSTでDBにINSERTする */

require_once 'connect.php';
// var_dump($_POST);
// var_dump($_POST['shohin_id']);
 
foreach ($_POST as $key => $value) {
  //$_POSTにはformのpost値がまとめて入ってる
  
  if(is_array($value)){
    //詳細情報はname属性がshohin_id[]なので$valueは配列になる→ 配列なら詳細情報   
      foreach ($value as $k => $val) {
        // shosaiテーブルにINSERTするので$shosaiに入れておく
        $shosai[$key][$k] = htmlspecialchars( $val ,ENT_QUOTES);
      }

  }else{
    // 顧客データを入れる こっちは配列ではないので$valueは文字
    $customer[$key] = htmlspecialchars( $value ,ENT_QUOTES);
  }
}
// var_dump( $customer,$shosai);

try{
  $dbh->beginTransaction();
  
  $sql = "INSERT INTO denpyo ( tokui_id , juchu_bi )
  VALUES ( ? ,? )"; // denpyoテーブルに先に入れる

  $sth = $dbh->prepare( $sql );
  $sth->bindParam(1, $customer['tokui_id'], PDO::PARAM_INT);  
  $sth->bindParam(2, $customer['juchu_bi'], PDO::PARAM_STR);  
  $sth->execute();
  
  $denpyo_id = $dbh->lastInsertId(); // ← このメソッドで自動採番の値を取得する
  
  //詳細テーブルに入れる
  $ct = count($shosai['shohin_id']);
  // var_dump($ct); //2次元の方の数､つまり詳細の行数

  for( $i = 0; $i < $ct ; $i++){ 
    // 詳細の行数ぶんだけループする
    $sql = "INSERT INTO shosai ( denpyo_id , shohin_id ,suryo )
    VALUES ( ? ,? , ? )"; //←placeholder
    // var_dump($shosai['shohin_id'][$i] , $shosai['suryo'][$i] );
    $sth = $dbh->prepare( $sql );
    $sth->bindParam(1, $denpyo_id, PDO::PARAM_INT); 
    $sth->bindParam(2, $shosai['shohin_id'][$i], PDO::PARAM_STR);  
    $sth->bindParam(3, $shosai['suryo'][$i], PDO::PARAM_INT);  
    $sth->execute();  // 一回のループで1行はいる
  }

  $success = $dbh->commit();  // すべて成功したらコミットする
  if($success) // 成功すると trueになっている
  echo "<p>$ct 件挿入しました｡2秒後に納品書を作成します。</p>";
  echo "<meta http-equiv='refresh' content='2;URL=nohinsho-t.php?denpyo_id=$denpyo_id'/>";

} catch (Exception $e) {
  $dbh->rollBack();  //INSERTに失敗したらロールバックして､何もなかったことにする
  echo "失敗しました。" . $e->getMessage();
}