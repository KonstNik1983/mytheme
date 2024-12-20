<?php


add_action('wp_enqueue_scripts', function () {

   wp_enqueue_style('bootstrap-icon', 'https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css');
   wp_enqueue_style('bootstrap-menu', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css");
   wp_enqueue_style('bootstrap-prewu', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css");
   wp_enqueue_style('style', get_template_directory_uri() . "/assets/css/style.css");

   wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js', array(), 'null', true);
});

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');
