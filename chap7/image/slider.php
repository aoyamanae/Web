
<link rel="stylesheet" type="text/css" href="slick/slick.css" media="screen" />
<link rel="stylesheet" type="text/css" href="slick/slick-theme.css" media="screen" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="slick/slick.min.js"></script>

<body>
  <style>
     /* 左右の矢印の色を変える */
     .slick-prev:before,
     .slick-next:before {color: #000;}
     /*左右の矢印の位置を変える*/
     .slick-next {right: 20px; z-index: 99;}
     .slick-prev {left: 15px; z-index: 100;}
     /*スライド数のドットの色を変える*/
     .slick-dots li.slick-active button:before,
     .slick-dots li button:before {color: #000; }
     /*スライド画像の横幅可変*/
     img {max-width: 100%;height: auto;}
  </style>

<div class="multiple-item">
     <?php for ($i=1; $i <12 ; $i++) {  ?>
          <div><img src="<?=$i?>.jpg"></div>  
     <?php  }?>
</div>

<script>

// $(function() {
    $('.multiple-item').slick({
     infinite: true,
     dots:true,
     slidesToShow: 3,
     slidesToScroll: 2,
     centerMode: true, //要素を中央寄せ
     centerPadding:'100px', //両サイドの見えている部分のサイズ
     autoplay:true, //自動再生
     responsive: [{
     breakpoint: 480,
     settings: {
     centerMode: false,
     }
     }]
     });
// });

</script>
</body>