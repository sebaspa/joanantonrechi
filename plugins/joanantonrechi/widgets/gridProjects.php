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

    // Display widget content
    ?>
    <div class="grid grid-cols-12">
      <div class="col-span-12 md:col-span-6">
        <div class="projectCard">
          <img src="https://dummyimage.com/960x400/000/fff" class="projectCard__image" alt="image" />
        </div>
      </div>
      <div class="col-span-12 md:col-span-6">
        <div class="projectCard">
          <img src="https://dummyimage.com/960x400/000/fff" class="projectCard__image" alt="image" />
        </div>
      </div>
    </div>
    <div class="grid grid-cols-12">
      <div class="col-span-12 md:col-span-6 lg:col-span-4">
        <div class="projectCard">
          <img src="https://dummyimage.com/960x400/000/fff" class="projectCard__image" alt="image" />
        </div>
      </div>
      <div class="col-span-12 md:col-span-6 lg:col-span-4">
        <div class="projectCard">
          <img src="https://dummyimage.com/960x400/000/fff" class="projectCard__image" alt="image" />
        </div>
      </div>
      <div class="col-span-12 md:col-span-6 lg:col-span-4">
        <div class="projectCard">
          <img src="https://dummyimage.com/960x400/000/fff" class="projectCard__image" alt="image" />
        </div>
      </div>
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
