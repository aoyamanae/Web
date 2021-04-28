<!-- カスタム投稿の一覧 -->

<?php get_header();?>

<?php
/* （ステップ1）データの取得 */
$query = new WP_Query(
array(
'post_type' => 'jiseki',
'posts_per_page' => 5,
// 'category__in' => array( 3, 4 ),
)
);
?>
<?php
/* （ステップ2）データの表示 */
if ( $query->have_posts() ) : ?>
<div>
<?php while ( $query->have_posts() ) : $query->the_post();?>
<p><a href="<?php the_permalink(); ?>">
<?php the_title(); ?></a></p>
<p><?php the_date(); ?></p>
<p><?php the_category(", "); ?></p>
<p><?php the_excerpt(); ?></p>
<?php if ( has_post_thumbnail() ) : ?>
<p><?php the_post_thumbnail(); ?></p>
<?php endif; ?> 
<hr />
<?php endwhile; ?>
</div>
<?php endif; wp_reset_postdata(); ?>

<?php get_footer();?>