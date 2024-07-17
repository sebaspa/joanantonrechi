<?php

get_header();

// Obtener el término desde la URL
$category_slug = get_query_var('project-category');
$paged = (isset($_GET['page']) && is_numeric($_GET['page'])) ? intval($_GET['page']) : 1;

$projects = new WP_Query(
  array(
    'post_type' => 'project',
    'posts_per_page' => 5,
    'orderby' => 'date',
    'order' => 'DESC',
    'post_status' => 'publish',
    'paged' => $paged,
    'tax_query' => array(
      array(
        'taxonomy' => 'project-category',
        'field' => 'slug',  // Puedes usar 'slug' o 'name'
        'terms' => $category_slug,
      ),
    ),
  )
);
?>

<div class="py-8 md:py-12 lg:py-32 px-4 text-center">
  <h1 class="font-extrabold text-3xl lg:text-[120px] lg:leading-[120px] text-black-500 uppercase"><?php echo $term; ?>
  </h1>
  <p class="text-base md:text-2xl text-black-500 uppercase tracking-widest">Joan anton rechi</p>
</div>
<div class="px-4 container">
  <h2 class="text-xl md:text-2xl text-black-500 uppercase font-bold tracking-widest text-center mb-6 md:mb-14">Proyectos
  </h2>
</div>

<?php if ($projects->posts): ?>

  <?php foreach ($projects->posts as $post): ?>
    <?php
    $category = get_the_terms($post->ID, 'project-category');
    $image_id = get_post_meta($post->ID, 'joanantonrechi_fields_project_image_id', true);
    $image_size = 'project_gallery';
    $image_src = wp_get_attachment_image_src($image_id, $image_size);
    ?>
    <a href="<?php echo get_permalink($post->ID, false) ?>" class="col-span-3 lg:col-span-1 relative mb-4 lg:mb-0">
      <img src="<?php echo $image_src[0]; ?>" alt="<?php echo $post->post_title; ?>"
        class="w-full h-72 md:h-[400px] object-cover" />
      <div class="absolute bottom-0 left-0 w-full p-4">
        <p class="text-primary-500 font-medium text-sm uppercase"><?php echo $category[0]->name; ?></p>
        <p class="text-primary-500 font-extrabold text-base uppercase"><?php echo $post->post_title; ?></p>
      </div>
    </a>
  <?php endforeach; ?>

  <div class="pagination py-12">
    <?php
    $current_page = max(1, $paged);
    echo paginate_links(
      array(
        'base' => add_query_arg('page', '%#%'),
        'format' => '',
        'current' => $current_page,
        'total' => $projects->max_num_pages,
        'prev_text' => 'Anterior Página',
        'next_text' => 'Siguiente Página',
      )
    );
    ?>
  </div>

<?php else: ?>
  <div class="col-span-12">
    <p class="text-center text-xl text-black-500">No hay resultados</p>
  </div>
<?php endif; ?>

<?php wp_reset_postdata(); ?>
<?php get_footer(); ?>