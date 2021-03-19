<?php
// head内<title>
add_theme_support( 'title-tag' );

// head内<link>
function my_styles() {
  wp_enqueue_style('my-style', get_theme_file_uri('style.css'));
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
