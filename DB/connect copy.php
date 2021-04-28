<!-- connect.phpにしてxfreeへ -->
<?php
$dsn = 'mysql:dbname=aosa_shop;host=mysql1.php.xdomain.ne.jp;charset=utf8';
$user = 'aosa_db';
$password = 'Kod123jkl';

try {
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}