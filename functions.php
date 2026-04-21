<?php

function my_portfolio_scripts() {
    wp_enqueue_style('my-style', get_stylesheet_uri(), array(), filemtime(get_stylesheet_directory() . '/style.css'));
    
    wp_enqueue_script('jquery');

    wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js', array(), null, true);
    wp_enqueue_script('gsap-scrolltrigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js', array('gsap'), null, true);
    
    if (wp_is_mobile()) {
        wp_enqueue_style('drawer-css', 'https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/css/drawer.min.css');
        wp_enqueue_script('iscroll', 'https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js', array(), null, true);
        wp_enqueue_script('drawer-js', 'https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/js/drawer.min.js', array('jquery', 'iscroll'), null, true);
    }

    // main.js
   wp_enqueue_script('my-script', get_template_directory_uri() . '/js/default.js', array('jquery', 'gsap', 'gsap-scrolltrigger'), filemtime(get_template_directory() . '/js/default.js'), true);
}
add_action('wp_enqueue_scripts', 'my_portfolio_scripts');

// アイキャッチ画像を有効化
add_theme_support('post-thumbnails');

// タイトルタグを有効化
add_theme_support('title-tag');

// ブロックエディタのスタイルを読み込む
add_theme_support('wp-block-styles');

