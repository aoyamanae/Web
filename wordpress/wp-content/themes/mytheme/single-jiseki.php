<?php get_header(); ?>
<div class="container">
  <div class="contents">

    <!-- archivetitle削除 -->

    <?php 
    if (have_posts()) {
      while (have_posts()) {
        the_post();
      ?>

      <h1 class="post-title">
      <?php the_title(); ?></h1>
      <p><?php var_dump(get_field('photo')) ?></p>
      <p><?php echo get_field('hachusha') ?></p>
      <p><?php echo get_field('sekobasho') ?></p>
      <p><?php echo get_field('kansei') ?></p>
      <p><?php echo get_field('gaiyo') ?></p>
      <p><?php echo get_field('gijutsu') ?></p>

      <!-- <?php      
      $tags=get_tag();
      foreach ($tags as $tag) {
        echo '<span>',$tag->name,'</span>';
      }
      ?> -->


      <article <?php post_class(); ?>>


          <!-- ifis_single削除 -->
          <h1><?php the_title(); ?></h1>
      


        <div class="postinfo">
          <time datetime="<?php echo get_the_date('Y-m-d');?>">
            <i class="far fa-clock"></i>
            <?php echo get_the_date(); ?>
          </time>
          <!-- <span class="postcat">
            <i class="fas fa-folder-open"></i>
            <?php //the_category( ', ' ); ?>
          </span> -->
          <span class="postcom">
            <i class="fas fa-comment"></i>
            <a href="<?php comments_link(); ?>">
            <?php comments_number( 'コメント', 'コメント(1件)', 'コメント(%件)' ); ?>
            </a>
          </span>
        </div>



        <?php the_content(); ?>

        <!-- ifis_single削除 -->
          <div class="pagenav">
            <span class="old">
              <?php previous_post_link('%link', '<i class="fas fa-chevron-circle-left"></i> %title'); ?>
            </span>

            <span class="new">
              <?php next_post_link('%link', '%title <i class="fas fa-chevron-circle-right"></i>'); ?>
            </span>
          </div>


        <?php comments_template(); ?>
      </article>

      <?php 
      }
    }
    ?>

    <!-- pagenav削除 -->
    </div> <!-- contents -->



  </div> <!-- container -->


<?php get_footer(); ?>