<!-- フロントページに指定した固定ページ -->

<?php get_header(); ?>

<img src="<?php echo get_template_directory_uri(); ?>/header-top.jpg" width="1500" height="460" alt="" class="largeheader">

<div class="topmenu">
  <div class="container">
  
    <div id="news">
    <?php
    // 固定ページに特定のカテゴリーを表示
    $args = array(
      'post_type' => 'post',
      'category_name' => 'news',
      'posts_per_page' => 3
    );
    $the_query = new WP_Query( $args );
    if ( $the_query->have_posts() ) {
      ?>
      <h2>新着情報</h2>
      <ul>
      <?php 
        while ( $the_query->have_posts() ) {
          $the_query->the_post(); 
          ?>
          <li>
            <a href="<?php echo get_permalink(); ?>">
            <time datetime="<?php echo get_the_date('Y-m-d');?>"><?php echo get_the_date(); ?></time>
            <?php the_title(); ?></a>

          </li>
        <?php 
        } 
        ?>
      </ul>
      <?php 
    }
    wp_reset_postdata(); 
    ?>
    </div>  


    <div class="link">
    <a href="<?php echo get_permalink( get_page_by_title('blog')->ID ); ?>">
    <i class="fas fa-pencil-alt"></i>blog</a>
    </div>
    <div class="link">
    <a href="<?php echo get_permalink( get_page_by_title('サイトについて')->ID ); ?>">
    <i class="fas fa-info"></i>サイトについて</a>
    </div>
    <div class="link">
    <a href="<?php echo get_permalink( get_page_by_title('お問い合わせ')->ID ); ?>">
    <i class="fas fa-envelope"></i>お問い合わせ</a>
    </div>

    <?php dynamic_sidebar('my_sidebar_1');?> 
  </div>
</div>

<?php get_footer(); ?>