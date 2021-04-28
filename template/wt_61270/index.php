<!-- https://ld-wt73.template-help.com/wt_61270/ -->

<?php 
$title='Home';
$h='active'; $a='none'; $b='none'; $c='none';
require 'header.php'; 
?>

<!-- Swiper-->
<section class="swiper-slide-wrapper">
  <div class="swiper-container swiper-slider" data-simulate-touch="false" data-autoplay="3500" data-slide-effect="fade">
    <div class="swiper-wrapper">
      <div class="swiper-slide" data-slide-bg="images/aki1.jpg"></div>
      <div class="swiper-slide" data-slide-bg="images/oga1.jpg"></div>
      <div class="swiper-slide" data-slide-bg="images/sen1.jpg"></div>
      <div class="swiper-slide" data-slide-bg="images/yu1.jpg"></div>
    </div>
  </div>
</section>


<!-- Destinations -->
<section class="section-80 section-lg-120">
  <div class="container container-wide">
    <h2 class="text-ubold">Destinations</h2>
    <hr class="divider divider-primary divider-80">
  </div>

  <div class="row row-60 isotope-wrap">
    <!-- Isotope Filters-->
    <div class="col-12">
      <div class="isotope-filters isotope-filters-horizontal">
        <ul class="nav-custom">
          <li><a class="active" data-isotope-filter="*" data-isotope-group="gallery" href="#">All</a></li>
          <?php
          $place = [ "1" => "秋田市", "2" => "男鹿市", "3" => "仙北市", "4" => "横手市湯沢市"];
          foreach ($place as $key => $value) {
            echo  "<li><a data-isotope-filter='Type $key' data-isotope-group='gallery' href='#'> $value </a></li>";
          }
          ?>
        </ul>
      </div>
    </div>
    <!-- Isotope Content-->
    <div class="col-12">
      <div class="row no-gutters isotope isotope-no-padding" data-isotope-layout="masonry" data-isotope-group="gallery">
        <!-- 秋田市 Type 1 -->
        <?php $a="aki"; for ($i=1; $i < 5; $i++) { ?>
        <div class="col-12 col-md-6 col-lg-4 col-xl-1-5 isotope-item" data-filter="Type 1">
          <a class="thumbnail-variant-4" href="about-<?=$a?>.php">
            <img class="img-responsive center-block thumbnail-image" src="images/<?=$a?><?=$i?>.jpg" alt="">
            <div class="caption">
              <h3 class="text-ubold"><?=$a?>ta</h3>
              <p>The cultural, commercial, and financial center of akita.</p>
              <div class="thumbnail-link"><i class="fas fa-link"></i></div>
            </div>
          </a>
        </div>
        <?php } ?>
        <!-- 男鹿市 Type 2 -->
        <?php $a="oga"; for ($i=1; $i < 5; $i++) { ?>
        <div class="col-12 col-md-6 col-lg-4 col-xl-1-5 isotope-item" data-filter="Type 2">
          <a class="thumbnail-variant-4" href="about-<?=$a?>.php">
            <img class="img-responsive center-block thumbnail-image" src="images/<?=$a?><?=$i?>.jpg" alt="">
            <div class="caption">
              <h3 class="text-ubold"><?=$a?></h3>
              <p>The cultural, commercial, and financial center of akita.</p>
              <div class="thumbnail-link"><i class="fas fa-link"></i></div>
            </div>
          </a>
        </div>
        <?php } ?>
        <!-- 仙北市 Type 3 -->
        <?php $a="sen"; for ($i=1; $i < 4; $i++) { ?>
        <div class="col-12 col-md-6 col-lg-4 col-xl-1-5 isotope-item" data-filter="Type 3">
          <a class="thumbnail-variant-4" href="about-<?=$a?>.php">
            <img class="img-responsive center-block thumbnail-image" src="images/<?=$a?><?=$i?>.jpg" alt="">
            <div class="caption">
              <h3 class="text-ubold"><?=$a?>boku</h3>
              <p>The cultural, commercial, and financial center of akita.</p>
              <div class="thumbnail-link"><i class="fas fa-link"></i></div>
            </div>
          </a>
        </div>
        <?php } ?>
        <!-- 横手市湯沢市 Type 4 -->
        <?php for ($i=1; $i < 3; $i++) { ?>
        <div class="col-12 col-md-6 col-lg-4 col-xl-1-5 isotope-item" data-filter="Type 4">
          <a class="thumbnail-variant-4" href="about-yokoyu.php">
            <img class="img-responsive center-block thumbnail-image" src="images/yoko<?=$i?>.jpg" alt="">
            <div class="caption">
              <h3 class="text-ubold">yokote</h3>
              <p>The cultural, commercial, and financial center of akita.</p>
              <div class="thumbnail-link"><i class="fas fa-link"></i></div>
            </div>
          </a>
        </div>
        <div class="col-12 col-md-6 col-lg-4 col-xl-1-5 isotope-item" data-filter="Type 4">
          <a class="thumbnail-variant-4" href="about-yokoyu.php">
            <img class="img-responsive center-block thumbnail-image" src="images/yu<?=$i?>.jpg" alt="">
            <div class="caption">
              <h3 class="text-ubold">yuzawa</h3>
              <p>The cultural, commercial, and financial center of akita.</p>
              <div class="thumbnail-link"><i class="fas fa-link"></i></div>
            </div>
          </a>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>

  <div class="button-wrap">
    <a class="button button-primary button-naira button-naira-up" href="about.php">
      <div class="icon fa-search"></div><span>find Destinations</span>
    </a>
  </div>
</section>


<!-- blog -->
<section class="section-80 section-lg-120 bg-gray-lighter">
  <div class="container container-wide">
    <h2 class="text-ubold wow fadeInUp" data-wow-delay="0.2s">Recent Blog Posts</h2>
    <hr class="divider divider-primary divider-80 wow fadeInUp" data-wow-delay="0.3s">

    <div class="row row-50">
      <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
        <!-- Owl Carousel-->
        <div class="owl-carousel-fullheight owl-nav-light owl-nav-position-variant-1 owl-nav-variant-1 owl-carousel"
          data-nav="true" data-items="1" data-mouse-drag="false">
          <div class="context-dark post-blog post-blog-type-3"
            style="background: url(&quot;images/aki1.jpg&quot;) right; background-size: cover;">
            <div class="post-blog-caption">
              <div class="row row-10 justify-content-end-xs-middle">
                <!-- <div class="col-md-4 text-md-left"> -->
                  <!-- <a class="label label-primary" href="blog-classic.php">Photos</a> -->
                <!-- </div> -->
                <div class="col-md-8 text-md-right">
                  <p class="text-italic">September 7, 2019</p>
                </div>
              </div>
              <h4 class="post-blog-title text-bold"><a href="blog-aki.php">Visiting Paris on a Budget</a></h4>
              <p>Paris is one of top-rated European cities – people usually try to spend there as much time as possible,
                and you also may be lucky enough to spend an autumn house-sitting there. But even if you have somewhere
                to...</p>
                <a class="post-blog-link" href="blog-single-post.php">Read more</a>
            </div>
          </div>
          <div class="context-dark post-blog post-blog-type-3"
            style="background: url(&quot;images/sen1.jpg&quot;); background-size: cover;">
            <div class="post-blog-caption">
              <div class="row row-10 justify-content-end-xs-middle">
                <!-- <div class="col-md-4 text-md-left"> -->
                  <!-- <a class="label label-primary" href="blog-2104.php">Article</a> -->
                <!-- </div> -->
                <div class="col-md-8 text-md-right">
                  <p class="text-italic">September 12, 2019</p>
                </div>
              </div>
              <h4 class="post-blog-title text-bold"><a href="blog-2104.php">How to Make Travel Videos</a></h4>
              <p>Introducing our new Travel Video Course, taught by experts Sharon Carpenter and Beverly Bennett! They
                have over 31,000,000 YouTube views, have worked with big brands, tourism boards, and production...</p><a
                class="post-blog-link" href="blog-single-2104.php">Read more</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-6">
        <div class="row row-50 text-left">
          <div class="col-md-6 wow fadeInRight" data-wow-delay="0.4s">
            <!-- Post type 2-->
            <div class="post-blog post-blog-type-2"><img class="img-responsive" src="images/yoko1.jpg" width="420"
                height="300" alt="">
                <!-- <a class="label label-primary" href="blog-modern.php">Article</a> -->
              <div class="post-blog-caption">
                <p class="text-italic text-gray">September 9, 2019</p>
                <h4 class="post-blog-title text-bold"><a href="blog-single-post.php">9 Ways to Become a Successful
                    Travel Blogger</a></h4>
                <p class="text-base">Travel blogging is a crowded field — and it gets more crowded day by day. And a lot
                  of the advice that people give are actually counterintuitive to...</p><a class="post-blog-link"
                  href="blog-single-post.php">Read more</a>
              </div>
            </div>
          </div>
          <div class="col-md-6 wow fadeInRight" data-wow-delay="0.5s">
            <!-- Post type 2-->
            <div class="post-blog post-blog-type-2"><img class="img-responsive" src="images/yu1.jpg" width="420"
                height="300" alt="">
                <!-- <a class="label label-primary" href="blog-modern.php">Article</a> -->
              <div class="post-blog-caption">
                <p class="text-italic text-gray">September 11, 2019</p>
                <h4 class="post-blog-title text-bold"><a href="blog-single-post.php">The Ultimate Packing List For
                    Female Travelers</a></h4>
                <p class="text-base">It can be daunting trying to figure out what to pack for a week, a month, or a year
                  abroad without much — or any — prior experience in the place you want...</p><a class="post-blog-link"
                  href="blog-single-post.php">Read more</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="view-animate fadeInUpSmall delay-08">
      <a class="button button-primary button-naira button-naira-up" href="blog.php">
        <span>View all blog posts</span><div class="fas fa-angle-down"></div>
      </a>
    </div>
  </div>
</section>

<?php require 'footer.php'; ?>