<?php

class gridProjects extends WP_Widget
{

  public function __construct()
  {
    parent::__construct(
      'gridProjects',
      __('Proyectos', 'joanantonrechi'),
      array(
        'description' => __('Proyectos', 'joanantonrechi')
      )
    );
  }

  public function widget($args, $instance)
  {
    //$numberPost = $instance['numberPost'];

    $projects = new WP_Query(
      array(
        'post_type' => 'project',
        'posts_per_page' => 11,
        'order' => 'DESC',
        'post_status' => 'publish',
      )
    );
    ?>
    <div class="gridProjects">
      <?php if ($projects->posts): ?>
        <?php foreach ($projects->posts as $post): ?>
          <?php
          $category = get_the_terms($post->ID, 'project-category');
          $image_id = get_post_meta($post->ID, 'joanantonrechi_fields_project_image_id', true);
          $image_size = 'project_grid';
          $image_src = wp_get_attachment_image_src($image_id, $image_size);
          ?>
          <div class="gridProjects__item">
            <a href="<?php echo get_permalink($post->ID, false) ?>" class="projectCard">
              <img src="<?php echo $image_src[0]; ?>" class="projectCard__image" alt="<?php echo $post->post_title; ?>" />
              <div class="projectCard__overlay">
                <p class="projectCard__category"><?php echo $category[0]->name; ?></p>
                <p class="projectCard__title"><?php echo $post->post_title; ?></p>
              </div>
            </a>
          </div>
        <?php endforeach; ?>
        <?php wp_reset_postdata(); ?>
      <?php else: ?>
        <div class="col-span-12">
          <p class="text-center text-xl text-black-500">No hay resultados</p>
        </div>
      <?php endif; ?>
    </div>
    <?php
  }

  // Widget Update Method
  public function update($new_instance, $old_instance)
  {
    // Update widget options
    $instance['numberPost'] = strip_tags($new_instance['numberPost']);
    return $instance;
  }

  // Widget Settings Form
  public function form($instance)
  {
    // Retrieve widget options from $instance
    $numberPost = isset($instance['numberPost']) ? $instance['numberPost'] : 9;
    // Display widget settings form
  ?>
  <?php
  }

}


register_widget('gridProjects');
