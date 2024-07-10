<?php

function joanantonrechi_post_types()
{
  require_once dirname(__FILE__) . '/project.php';
}

add_action('init', 'joanantonrechi_post_types');
