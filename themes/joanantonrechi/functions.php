<?php

if (!defined('VERSION')) {
  define('VERSION', '1.0.3');
}

function joanantonrechi_setup()
{
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support(
    'html5',
    array(
      //'search-form',
      //'comment-form',
      //'comment-list',
      //'gallery',
      //'caption',
      //'style',
      //'script',
    )
  );

  register_nav_menus(
    array(
      'menu-1' => esc_html__('Primary', 'joanantonrechi'),
      'menu-2' => esc_html__('Footer', 'joanantonrechi'),
    )
  );

  //add_image_size('product_thumbnail', 310, 350, true);

}

add_action('after_setup_theme', 'joanantonrechi_setup');



function joanantonrechi_styles_scripts()
{


  wp_enqueue_style('fancybox-style', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css', array(), '5.0');
  wp_enqueue_script('fancybox-script', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js', array('jquery'), '5.0', true);

  wp_enqueue_style('swiper-style', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), '2.0');
  wp_enqueue_script('swiper-script', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array('jquery'), '2.0', true);

  wp_enqueue_style('joanantonrechi-style', get_template_directory_uri() . '/dist/css/app.css', array('font-awesome', 'fancybox-style'), VERSION);
  wp_enqueue_style('joanantonrechi-style2', get_template_directory_uri() . '/dist/css/app2.css', array('joanantonrechi-style'), VERSION);
  wp_enqueue_script('joanantonrechi-script', get_template_directory_uri() . '/dist/js/app.js', array('jquery', 'fancybox-script'), VERSION, true);
}

add_action('wp_enqueue_scripts', 'joanantonrechi_styles_scripts');
