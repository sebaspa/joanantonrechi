<?php

function joanantonrechi_taxonomies()
{
  require_once dirname(__FILE__) . '/project-taxonomy.php';
}

add_action('init', 'joanantonrechi_taxonomies');
