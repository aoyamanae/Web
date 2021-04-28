<?php session_start(); ?>
<?php
  function token($length = 20){ 
    return substr(str_shuffle('1234567890QWERTYUIOPLKJHGFDSAZXCVBNMabcdefghijklmnopqrstuvwxyz'), 0, $length);
  }
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <!-- Site Title-->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title; ?></title>
  <!-- Stylesheets-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style2.css">
  <script src="https://kit.fontawesome.com/f4e704525f.js" crossorigin="anonymous"></script>
</head>

<body>
  <!-- Page-->
  <div class="page text-center">


    <!-- Page Header-->
    <header class="page-header">
      <!-- RD Navbar-->
      <div class="rd-navbar-wrap bg-gray-dark">
        <nav class="rd-navbar" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed"
          data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static"
          data-lg-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static"
          data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static"
          data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="1px" data-xl-stick-up-offset="1px"
          data-xxl-stick-up-offset="1px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
          <div class="rd-navbar-inner">
            <!-- RD Navbar Panel-->
            <div class="rd-navbar-panel">
              <!-- RD Navbar Toggle-->
              <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
              <!-- RD Navbar Brand-->
              <div class="rd-navbar-brand"><a class="d-inline-block brand-name" href="index.php"><img
                    class="img-responsive center-block" src="images/logo.png" width="80" height="80" alt=""></a></div>
            </div>
            <div class="rd-navbar-nav-wrap">


              <!-- RD Navbar Nav-->
              <ul class="rd-navbar-nav">
                <li class=<?php echo $h; ?>><a href="./">Home</a></li>
                <li class=<?php echo $a; ?>><a href="about.php">About</a>
                  <!-- RD Navbar Dropdown-->
                  <ul class="rd-navbar-dropdown">
                    <li><a href="about-aki.php">秋田市</a></li>
                    <li><a href="about-oga.php">男鹿市</a></li>
                    <li><a href="about-sen.php">仙北市</a></li>
                    <li><a href="about-yokoyu.php">横手市湯沢市</a></li>
                  </ul>
                </li>
                <li class=<?php echo $b; ?>><a href="blog.php">Blog</a>
                  <!-- RD Navbar Dropdown-->
                  <!-- <ul class="rd-navbar-dropdown">
                    <li><a href="blog.php">春</a></li>
                    <li><a href="blog.php">夏</a></li>
                    <li><a href="blog.php">秋</a></li>
                    <li><a href="blog.php">冬</a></li>
                  </ul> -->
                </li>
                <li class=<?php echo $c; ?>><a href="contacts.php">Contacts</a></li>
              </ul>



              <!--RD Navbar Search-->
              <div class="rd-navbar-search"><a class="rd-navbar-search-toggle" data-rd-navbar-toggle=".rd-navbar-search"
                  href="#"><i class="fas fa-search"></i></a>
                <form class="rd-search" data-search-live="rd-search-results-live" action="search-results.php"
                  method="GET">
                  <div class="form-wrap">
                    <label class="form-label" for="rd-navbar-search-form-input">Search</label>
                    <input class="form-input rd-navbar-search-form-input" id="rd-navbar-search-form-input" type="text"
                      name="s" autocomplete="off">
                  </div>
                  <button class="button fa-search"></button>
                  <div class="rd-search-results-live" id="rd-search-results-live"></div>
                </form>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>

    <?php
  $home='Home';
  if ($title !== $home) {
?>
    <section class="bg-image-06">
      <div class="breadcrumb-wrapper">
        <div class="container context-dark section-30 section-xl-top-120">
          <h1 class="text-ubold"><?php echo $title; ?></h1>
          <ol class="breadcrumb">
            <li><a href="./">Home</a></li>
            <li><?php echo $title; ?></li>
          </ol>
        </div>
      </div>
    </section>
    <?php
  }
?>