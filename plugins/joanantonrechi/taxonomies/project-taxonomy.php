<?php

$labels = array(
  'name' => __('Categorías', 'joanantonrechi'),
  'singular_name' => __('Categoría', 'joanantonrechi'),
  'search_items' => __('Buscar categorías', 'joanantonrechi'),
  'all_items' => __('Todas las categorías', 'joanantonrechi'),
  'parent_item' => __('Categoría padre', 'joanantonrechi'),
  'parent_item_colon' => __('Categoría padre:', 'joanantonrechi'),
  'edit_item' => __('Editar categoría', 'joanantonrechi'),
  'update_item' => __('Actualizar categoría', 'joanantonrechi'),
  'add_new_item' => __('Agregar nueva categoría', 'joanantonrechi'),
  'new_item_name' => __('Nuevo nombre de categoría', 'joanantonrechi'),
  'menu_name' => __('Categorías', 'joanantonrechi'),
);

$args = array(
  // Hierarchical taxonomy (like categories)
  'hierarchical' => true,
  // This array of options controls the labels displayed in the WordPress Admin UI
  'labels' => $labels,
  // Control the slugs used for this taxonomy
  'rewrite' => array(
    'slug' => 'project-category', // This controls the base slug that will display before each term
  ),
  'show_ui' => true,
  'show_admin_column' => true,
  'query_var' => true,
  'show_in_rest' => false,
  'rest-base' => 'project-category'
);

register_taxonomy('project-category', array('project'), $args);
