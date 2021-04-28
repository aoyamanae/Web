<?php
// head内<title>
add_theme_support( 'title-tag' );

// head内<link>
function my_styles() {
  wp_enqueue_style('my-style', get_theme_file_uri('style.css?v=16'));//?v=16追加
  wp_enqueue_style('google-font', 'https://fonts.gstatic.com');
  wp_enqueue_style('google-font2', 'https://fonts.googleapis.com/css2?family=Russo+One&display=swap');
  wp_enqueue_style('awesome4', 'https://use.fontawesome.com/releases/v5.15.2/css/all.css');
}
add_action( 'wp_enqueue_scripts', 'my_styles' );

// ウィジェット
register_sidebar( array('id' => 'sidebar-1' ) );

// RSSフィード
add_theme_support( 'automatic-feed-links' );

// カスタムメニュー
register_nav_menu( 'navigation', 'ナビゲーション' );

// カスタムヘッダー
add_theme_support( 'custom-header', array('widh'=>1500, 'height'=>250, 'default-image'=>'%s/header-1500x250.jpg', 'header-text'=>false) );

// カスタム背景
add_theme_support( 'custom-background' );

// 概要の文字数
function my_length($length){
  return 70;
}
add_filter( 'excerpt_mblength', 'my_length' );

// 概要の省略記号変更
function my_more($more){
  return '･･･';
}
add_filter( 'excerpt_more', 'my_more' );

// アイキャッチ画像
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 300, 150, true );

// category削除
function rem_cat_function($link) {
return str_replace("/category/", "/", $link);
}
add_filter('user_trailingslashit', 'rem_cat_function');
function rem_cat_flush_rules() {
global $wp_rewrite;
$wp_rewrite->flush_rules();
}
add_action('init', 'rem_cat_flush_rules');
function rem_cat_rewrite($wp_rewrite) {
$new_rules = array('(.+)/page/(.+)/?' => 'index.php?category_name='.$wp_rewrite->preg_index(1).'&paged='.$wp_rewrite->preg_index(2));
$wp_rewrite->rules = $new_rules + $wp_rewrite->rules;
}
add_filter('generate_rewrite_rules', 'rem_cat_rewrite');

//投稿追加
add_action('init','create_post_type');
function create_post_type(){
  register_post_type('jiseki',[
    'labels'=>['name'=>'施工実績',
    'singular_name'=>'施工実績'],
    'public'=>true,'has_archive'=>false,
    'menu_position'=>5,
    'show_in_rest'=>false,
    'supports'=>array('title','thumbnail')
    ]);
  register_taxonomy_for_object_type('post_tag','jiseki');
}