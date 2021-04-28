<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title; ?></title>
  <!-- <meta http-equiv="Content-Type" content="text/html; charset=Shift_JIS">
  <meta http-equiv="Content-Style-Type" content="text/css">
  <meta name="GENERATOR" content="JustSystems Homepage Builder Version 16.0.10.0 for Windows">
  <script language="JavaScript"></script>
  <script language="JavaScript"></script> -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

  <link rel="stylesheet" href="normalize.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="responsive.css">
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
</head>

<body id=<?php echo $id; ?>>
  <header id="top">
    <h1>
      <a href="index.php">
        <img src="image/topimg.jpg" alt="長栄堂">
      </a>
    </h1>
    <div id="subnav">
      <a href="#"><i class="fas fa-ellipsis-v"></i></a>
      <script>
      $(function(){
      $('#subnav a').click(function(){
          $('#nav').toggle();
        });
      });
      </script>
    </div>
  </header>

  <nav id="nav">
    <ul>
      <li><a href="index.php">トップページ</a></li>
      <li><a href="syohin.php">商品の紹介</a></li>
      <li><a href="kaisya.php">お店の紹介</a></li>
      <li><a href="http://www.chuokai-akita.or.jp/okasi/">菓子工業組合<span>(外部サイト)</span></a></li>
    </ul>
    <div id="clearboth"></div>
  </nav>