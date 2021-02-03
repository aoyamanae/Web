<?php
/*sales.phpから*/
require_once 'connect.php';
// 規定期間を指定
$sql = "SELECT * FROM denpyo 
        LEFT JOIN tokui using(tokui_id)
        LEFT JOIN shosai using(denpyo_id)
        LEFT JOIN shohin using(shohin_id)
        WHERE juchu_bi between ? and ?";


$sql .= " AND tokui_id = ?";
$sth = $dbh->prepare( $sql );
$sth->bindParam(1, $_GET['start'], PDO::PARAM_STR);
$sth->bindParam(2, $_GET['end'], PDO::PARAM_STR);
$sth->execute();

// 特定の得意先への売上合計 一行

// 得意先ごとの売上合計 表


// 特定の商品の売上合計
$shohin_id=$_POST['shohin_mei'];
$sql = "SELECT shohin_mei, sum(suryo)*tanka as 合計
        FROM shosai 
        LEFT JOIN shohin USING(shohin_id)
        WHERE shohin_id = ? ";
$sth = $dbh->prepare( $sql );
$sth->bindParam(1, $shohin_id, PDO::PARAM_STR);   
$sth->execute();

// 商品ごとの売上合計
$sql = "SELECT shohin_mei, sum(suryo*tanka) as 合計
        FROM shosai 
        LEFT JOIN  shohin USING(shohin_id)
        GROUP BY shohin_mei";