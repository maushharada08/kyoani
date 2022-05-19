<?php

add_action( 'init', function(){
  add_theme_support( 'post-thumbnails');
  add_theme_support( 'post-thumbnails', array( 'post' ) );
  add_theme_support( 'post-thumbnails', array( 'page' ) );  
  add_theme_support('custom-background');
  add_theme_support( 'custom-header' );

  // メニューをサポート
  register_nav_menus([
    'global_nav' => 'グローバルナビゲーション',

  ]);
});

function get_eyecatch_with_default(){
  if (has_post_thumbnail( )){
    
    $img = get_the_post_thumbnail_url();
  }else{
    $img = array( get_template_directory_uri(  ). '/images/te.jpg');
  }
}

?>