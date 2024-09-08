<?php

$labels = array(
  'name' => _x('Proyectos', 'General name', 'joanantonrechi'),
  'singular_name' => _x('Proyecto', 'Singular name', 'joanantonrechi'),
  'menu_name' => __('Proyectos', 'joanantonrechi'),
  'name_admin_bar' => __('Proyecto', 'joanantonrechi'),
  'archives' => __('Item Archives', 'joanantonrechi'),
  'attributes' => __('Item Attributes', 'joanantonrechi'),
  'parent_item_colon' => __('Parent Item:', 'joanantonrechi'),
  'all_items' => __('Todos los proyectos', 'joanantonrechi'),
  'add_new_item' => __('Agrega nuevo proyecto', 'joanantonrechi'),
  'add_new' => __('Agrega nuevo', 'joanantonrechi'),
  'new_item' => __('Nuevo proyecto', 'joanantonrechi'),
  'edit_item' => __('Editar proyecto', 'joanantonrechi'),
  'update_item' => __('Actualizar proyecto', 'joanantonrechi'),
  'view_item' => __('Ver proyecto', 'joanantonrechi'),
  'view_items' => __('Ver proyectos', 'joanantonrechi'),
  'search_items' => __('Buscar proyectos', 'joanantonrechi'),
  'not_found' => __('No hay proyectos', 'joanantonrechi'),
  'not_found_in_trash' => __('No se encuentran proyectos en la basura', 'joanantonrechi'),
  'featured_image' => __('Imagen destacada', 'joanantonrechi'),
  'set_featured_image' => __('Agregar imagen destacada', 'joanantonrechi'),
  'remove_featured_image' => __('Remover imagen destacada', 'joanantonrechi'),
  'use_featured_image' => __('Usar como imagen destacada', 'joanantonrechi'),
  'insert_into_item' => __('Insertar a proyectos', 'joanantonrechi'),
  'uploaded_to_this_item' => __('Subir a un proyecto', 'joanantonrechi'),
  'items_list' => __('Lista de proyectos', 'joanantonrechi'),
  'items_list_navigation' => __('Navegar a la lista de proyectos', 'joanantonrechi'),
  'filter_items_list' => __('Filtrar proyectos', 'joanantonrechi'),
);
$args = array(
  'label' => __('Proyecto', 'joanantonrechi'),
  'description' => __('Descripción de proyectos', 'joanantonrechi'),
  'labels' => $labels,
  'supports' => array('title'),
  'taxonomies' => array('project-category'),
  'hierarchical' => false,
  'public' => false,
  'show_ui' => true,
  'show_in_menu' => true,
  'menu_position' => 6,
  'can_export' => true,
  'has_archive' => true,
  'exclude_from_search' => false,
  'publicly_queryable' => true,
  'map_meta_cap' => true,
  'query_var' => true,
  'rewrite' => array('slug' => 'project'),
  'menu_icon' => 'dashicons-category',
  'show_in_rest' => false,
  'rest_base' => 'project'
);
register_post_type('project', $args);

/**
 * Images
 */

add_image_size('project_grid', 800, 400, false);
add_image_size('project_single', 1920, 450, false);
add_image_size('project_gallery', 1920, 650, false);
