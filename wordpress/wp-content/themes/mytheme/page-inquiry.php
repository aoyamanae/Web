<?php get_header(); ?>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  <style>
    /* .col-4 {text-align:center;}
    span.error {color: #f00;}
    input[name="company"] {width:100%}
    input[name="name"] {width:100%}
    input[name="email"] {width:100%} */

    /* [name="onamae"],[name="email"],[name="yobo"]{width:100%} */
.fa-dot-circle:before { color: #b58859;font-size: 3.8em; }

.fa-dot-circle{ color: #b58859; display: block;font-weight:100;margin-top: 12px;}
.fa-dot-circle:nth-of-type(1):after{content:"内容入力";} 
.fa-dot-circle:nth-of-type(2):after{content:"内容確認"; } 
.fa-dot-circle:nth-of-type(3):after{content:"送信完了"; } 
.border{border: 4px solid #e9ecef !important;position: relative; top:61px; width: 57%;z-index: -1;}
.jcs{ justify-content: space-evenly;}
.off:before,.off:after{color:#e9ecef!important}
  </style>

<div class="container">

<?php if(have_posts()): while(have_posts()): 
the_post(); ?>

<article <?php post_class(); ?>>

<!-- <h1><?php //the_title(); ?></h1> -->
<!-- 
  <div class="row">
    <div class="col-4">内容入力</div>
    <div class="col-4">内容確認</div>
    <div class="col-4">送信完了</div>
  </div> -->


<?php the_content(); ?>
</article>
<?php endwhile; endif; ?>

</div> <!-- container -->

<script>
if( jQuery('.mw_wp_form_input').length == 1  ){
  jQuery('.fa-dot-circle:nth-of-type(1)').removeClass('off');
  jQuery('.fa-dot-circle:nth-of-type(2)').addClass('off');
 
}else if( jQuery('.mw_wp_form_confirm').length == 1 ){
  jQuery('.fa-dot-circle:nth-of-type(1)').addClass('off');
  jQuery('.fa-dot-circle:nth-of-type(2)').removeClass('off');

}
</script>

<?php get_footer(); ?>