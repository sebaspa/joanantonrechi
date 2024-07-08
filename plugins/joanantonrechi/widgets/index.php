<?php

function joanantonrechi_widgets()
{
  require_once dirname(__FILE__) . '/gridProjects.php';
}

add_action('widgets_init', 'joanantonrechi_widgets');
