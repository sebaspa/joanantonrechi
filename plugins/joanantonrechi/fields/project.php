<?php

function joanantonrechi_fields_project()
{
  $prefix = 'joanantonrechi_fields_project_';

  $cmb = new_cmb2_box(
    array(
      'id' => $prefix . 'project',
      'title' => esc_html__('Proyecto', 'joanantonrechi'),
      'object_types' => array('project'),
      'context' => 'normal',
      'priority' => 'high',
      'show_names' => true,
    )
  );

  $cmb->add_field(
    array(
      'id' => $prefix . 'image',
      'name' => esc_html__('Imágen', 'joanantonrechi'),
      'desc' => esc_html__('Cargue una imágen.', 'joanantonrechi'),
      'type' => 'file',
      'attributes' => array(
        'required' => 'required',
        'accept' => 'image/*',
      ),
      'text' => array(
        'add_upload_file_text' => esc_html__('Agregue una imágen para el proyecto', 'joanantonrechi'),
      ),
      'options' => array(
        'url' => false, // Hide the text input for the url
      ),
      'query_args' => array(
        'type' => 'image',
      ),
      'preview_size' => 'medium',
    )
  );

  $cmb->add_field(
    array(
      'id' => $prefix . 'imageFront',
      'name' => esc_html__('Imágen de portada', 'joanantonrechi'),
      'desc' => esc_html__('Cargue una imágen.', 'joanantonrechi'),
      'type' => 'file',
      'attributes' => array(
        'required' => 'required',
        'accept' => 'image/*',
      ),
      'text' => array(
        'add_upload_file_text' => esc_html__('Agregue una imágen para el proyecto', 'joanantonrechi'),
      ),
      'options' => array(
        'url' => false, // Hide the text input for the url
      ),
      'query_args' => array(
        'type' => 'image',
      ),
      'preview_size' => 'medium',
    )
  );

  $cmb->add_field(
    array(
      'id' => $prefix . 'author',
      'name' => esc_html__('Autor', 'joanantonrechi'),
      'desc' => esc_html__('Escriba el autor.', 'joanantonrechi'),
      'type' => 'text',
      'attributes' => array(
        'required' => 'required',
      ),
    )
  );

  $cmb->add_field(
    array(
      'id' => $prefix . 'category',
      'name' => esc_html__('Categoría', 'joanantonrechi'),
      'desc' => esc_html__('Seleccione una categoría.', 'joanantonrechi'),
      'taxonomy' => 'project-category',
      'type' => 'taxonomy_select',
      'remove_default' => 'true',
      'query_args' => array(
        'orderby' => 'slug',
        'hide_empty' => false,
      ),
      'attributes' => array(
        'required' => 'required',
      ),
    )
  );

  $cmb->add_field(
    array(
      'id' => $prefix . 'date',
      'name' => esc_html__('Fecha', 'joanantonrechi'),
      'desc' => esc_html__('Escriba una fecha.', 'joanantonrechi'),
      'type' => 'text_date',
      'attributes' => array(
        'required' => 'required',
      ),
      'date_format' => 'Y-m-d',
      'text_date_format' => 'F j, Y',
    )
  );

  $cmb->add_field(
    array(
      'id' => $prefix . 'description',
      'name' => esc_html__('Descripción', 'joanantonrechi'),
      'desc' => esc_html__('Escriba una descripción.', 'joanantonrechi'),
      'default' => '',
      'sanitization_cb' => false,
      'type' => 'wysiwyg',
      'attributes' => array(
        'required' => 'required',
      ),
      'options' => array(
        'wpautop' => true,
        'media_buttons' => false,
        'textarea_rows' => get_option('default_post_edit_rows', 10),
        'teeny' => false,
        'dfw' => false,
        'quicktags' => true,
        'default_editor' => 'tinymce',
        'tinymce' => true,
      )
    )
  );

  $cmb->add_field(array(
    'id' => $prefix . 'viewInHome',
    'name' => esc_html__('Ver en home', 'joanantonrechi'),
    'desc' => esc_html__('Selecciona si quieres que aparezca en la home.', 'joanantonrechi'),
    'type' => 'checkbox',
  ));

  $cmb->add_field(array(
    'id' => $prefix . 'orderInHome',
    'name' => __('Orden', 'joanantonrechi'),
    'desc' => __('Selecciona el oorden, en que aparecerá en la home.', 'joanantonrechi'),
    'type' => 'select',
    'show_option_none' => true,
    'default' => 'none',
    'options' => array(
      '1' => '1',
      '2' => '2',
      '3' => '3',
      '4' => '4',
      '5' => '5',
      '6' => '6',
      '7' => '7',
      '8' => '8',
      '9' => '9',
    ),
  ));

  $cmb->add_field(
    array(
      'id' => $prefix . 'gallery',
      'name' => esc_html__('Galería', 'joanantonrechi'),
      'desc' => esc_html__('Galería de fotos.', 'joanantonrechi'),
      'type' => 'group',
      'options' => array(
        'group_title' => __('Fotografía {#}', 'joanantonrechi'),
        'add_button' => __('Anadir fotografía', 'joanantonrechi'),
        'remove_button' => __('Eliminar fotografía', 'joanantonrechi'),
        'sortable' => true,
      ),
    )
  );

  $cmb->add_group_field(
    $prefix . 'gallery',
    array(
      'name' => esc_html__('Fotografía', 'joanantonrechi'),
      'id' => 'image',
      'type' => 'file',
      'options' => array(
        'url' => false, // Hide the text input for the url
      ),
      'query_args' => array(
        'type' => 'image',
      ),
      'preview_size' => 'medium',
    )
  );

}

add_action('cmb2_admin_init', 'joanantonrechi_fields_project');
