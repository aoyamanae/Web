<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <header>
    <div class="siteinfo">
      <div class="container">
        <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
        <p><?php bloginfo('description'); ?></p>
      </div>
    </div>

    <?php if ( !is_front_page() ) { ?>
    <?php if ( get_header_image() ) { ?>
    <img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
    <?php } ?>
    <?php } ?>

    <nav>
      <div class="container">
        <?php wp_nav_menu('theme_location=navigation'); ?>
      </div>
    </nav>
  </header>

  <nav class="breadclumb">
    <?php 
      if(!is_front_page() && !is_home()){
        // $path=$_SERVER['REQUEST_URI'];
        $path=explode('/', $_SERVER['REQUEST_URI']);
        unset($path[0]);
        // var_dump($path);
        $ct=count($path);
        $href='';
        for ($i=1; $i <= $ct ; $i++) { 
          if ($i != $ct) {
            $href.=$path[$i].'/';
            echo "<li><a href='/$href'> {$path[$i]} </a> / </li>";
          } else {
            echo " <li> {$path[$i]} </li>";
          }
        }
      }
    ?>
    </nav>