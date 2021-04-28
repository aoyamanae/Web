<style>
#slick{ 
  height: 200px;
}
</style>
<?php 
  $url =  get_stylesheet_directory_uri();
?>
<link rel="stylesheet" type="text/css" href="<?=$url?>/slick/slick.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?=$url?>/slick/slick-theme.css" media="screen" />
<script src="https://code.jquery.com/jquery-3.5.1.js" ></script>
<script src="<?=$url?>/slick/slick.min.js"></script>

<div id="slick">
<?php

$images = get_images(); //画像をディレクトリパスで格納
$wudir = wp_upload_dir(); 
$urlslider = $wudir['baseurl']."/slider/" ; //画像のディレクトリをurlで取得

foreach ($images as $key => $value) {
  # code...
  $filenames = explode('/', $value ); // スラッシュで分解して配列にする
  // var_dump($filenames);
  $filename = end($filenames);
  // echo $filename;

  echo '<img src="'. $urlslider. $filename . '">';
}

?>
</div><!--slick-->

<script>
               
  $('#slick').slick({
      dots: true,
      autoplay: true,
      autoplaySpeed: 5000,
      infinite: true,
      // speed: 300,
      slidesToShow: 6, //写真枚数
      slidesToScroll: 1,
      swipe:true,
      touchMove:true,
      responsive: [
        {
          breakpoint: 1800,
          settings: {
            slidesToShow: 5, //1800px以下だと5枚うつる
          }
        },
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 4,
          }
        },
        {
          breakpoint: 900,
          settings: {
            slidesToShow: 3,
          }
        },
        {
          breakpoint: 660,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
          }
        }
      ]
  });
</script>