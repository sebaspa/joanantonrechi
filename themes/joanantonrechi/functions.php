<?php

if (!defined('VERSION')) {
  define('VERSION', '1.0.0');
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

  wp_enqueue_style('joanantonrechi-style', get_template_directory_uri() . '/dist/css/app.css', array('font-awesome'), VERSION);
  wp_enqueue_script('joanantonrechi-script', get_template_directory_uri() . '/dist/js/app.js', array('jquery'), VERSION, true);
}

add_action('wp_enqueue_scripts', 'joanantonrechi_styles_scripts');
