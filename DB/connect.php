<!-- xfreeへ -->
<?php
$dsn = 'mysql:dbname=an_renshu_db;host=127.0.0.1;charset=utf8';
$user = 'aoyama_nae';
$password = 'Asdf3333-';

try {
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

// 正常につながったか確認 objectと出ればOK
// var_dump($dbh);


// $pdo = new PDO ('mysql: host=localhost; dbname=an_shop; charset=utf8','aoyama_nae','Asdf3333-');

// 文字化け修正の;charset=utf8追加ではないやり方
// try {
//     $dbh = new PDO($dsn, $user, $password 
//         , array( PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8' )
//     );
//     $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// } catch (PDOException $e) {
//     echo 'Connection failed: ' . $e->getMessage();
// }