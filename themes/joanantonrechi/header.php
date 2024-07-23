<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div class="container flex items-center justify-between py-6 relative">
    <a href="<?php echo esc_url(home_url('/')); ?>" class="uppercase text-gray-500 font-extrabold text-xl">
      Joan Anton rechi
    </a>
    <?php
    wp_nav_menu(
      array(
        'theme_location' => 'menu-1',
        'menu_id' => 'primaryMenu',
        'menu_class' => 'primaryMenu hidden md:flex',
      )
    );
    ?>
    <div id="btnPrimaryMenuMobile" class="block md:hidden">
      <i class="fa fa-bars text-xl text-black-500" aria-hidden="true"></i>
    </div>

  </div>