<!DOCTYPE html> 
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>nuts shop</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <script src="https://kit.fontawesome.com/f4e704525f.js" crossorigin="anonymous"></script>
</head>

<body> 
  <header id="top">
		<h1><a href="index.php"><img src="logo.png" alt="nuts shop"></a></h1>
	</header>

  <nav>
    <?php require 'menu.php'; ?>
  </nav>

  <?php //DB
  // $pdo = new PDO ('mysql: host=localhost; dbname=an_shop; charset=utf8','aoyama_nae','Asdf3333-');

  $dsn = 'mysql:host=mysql1.php.xdomain.ne.jp;dbname=aosa_shop;charset=utf8';
  $user = 'aosa_db';
  $pass = 'Kod123jkl';
  try {
      $pdo = new PDO($dsn, $user, $pass);
  } catch (PDOException $e) {
      echo 'Connection failed: ' . $e->getMessage();
  }
  ?>