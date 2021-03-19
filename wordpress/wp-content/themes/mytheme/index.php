<?php get_header(); ?>

<div class="container">
  <div class="contents">


    <?php if (is_category()) {?>
    <h1 class="archive-title">
      <i class="fas fa-folder-open"></i>
      「<?php single_cat_title(); ?>」に関する記事
    </h1>
    <?php } ?>

    <?php if (is_month()) {?>
    <h1 class="archive-title">
      <i class="far fa-clock"></i>
      <?php echo get_the_date('Y年n月');?>に投稿した記事
    </h1>
    <?php } ?>


    <?php 
    if (have_posts()) {
      while (have_posts()) {
        the_post();
      ?>


    <article <?php post_class(); ?>>


      <!-- ifis_single削除 -->
      <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>



      <div class="postinfo">
        <time datetime="<?php echo get_the_date('Y-m-d');?>">
          <i class="far fa-clock"></i>
          <?php echo get_the_date(); ?>
        </time>
        <span class="postcat">
          <i class="fas fa-folder-open"></i>
          <?php the_category( ', ' ); ?>
        </span>
        <span class="postcom">
          <i class="fas fa-comment"></i>
          <a href="<?php comments_link(); ?>">
            <?php comments_number( 'コメント', 'コメント(1件)', 'コメント(%件)' ); ?>
          </a>
        </span>
      </div>

      <!-- 概要(content移動) -->
      <div class="excerpt">
        <?php if (has_post_thumbnail()) { ?>
          <p><?php the_post_thumbnail(); ?></p>
        <?php } ?>

        <?php the_excerpt(); ?> 
        <p class="more"><a href="<?php the_permalink(); ?>">続きを読む
        <i class="fa fa-chevron-right"></i>
        </a></p>
      </div>

      <!-- ifis_singlepagenav削除 -->


      <!-- comment削除 -->
    </article>

    <?php 
      }
    }
    ?>

    <?php if( $wp_query->max_num_pages > 1 ){ ?>
    <div class="pagenav">
      <span class="old">
        <?php next_posts_link( '<i class="fas fa-chevron-circle-left"></i> 古い記事' ); ?>
      </span>

      <span class="new">
        <?php previous_posts_link( '新しい記事 <i class="fas fa-chevron-circle-right"></i>' ); ?>
      </span>
    </div>
    <?php } ?>


  </div> <!-- contents -->



  <div class="blogmenu">
    <ul>
      <?php dynamic_sidebar('sidebar-1'); ?>

      <li class="widget">
        <ul>
          <li>
            <a href="<?php bloginfo('rss2_url'); ?>">
              <i class="fa fa-rss-square"></i> RSS</a>
          </li>
        </ul>
      </li>
    </ul>
  </div> <!-- blogmenu -->

</div> <!-- container -->

<?php get_footer(); ?>