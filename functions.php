<?php

function rootscafe_scripts() {
    wp_enqueue_style('rootscafe-style', get_stylesheet_uri(), array(), filemtime(get_stylesheet_directory() . '/style.css'));
    
    // GSAP
    wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js', array(), null, true);
    wp_enqueue_script('gsap-scrolltrigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js', array('gsap'), null, true);

    // main.js
    wp_enqueue_script('rootscafe-script', get_template_directory_uri() . '/js/main.js', array('gsap', 'gsap-scrolltrigger'), filemtime(get_template_directory() . '/js/default.js'), true);
}
add_action('wp_enqueue_scripts', 'rootscafe_scripts');

add_theme_support('post-thumbnails');
add_theme_support('title-tag');