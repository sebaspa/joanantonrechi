<?php

get_header();

function get_custom_post_type_category($post_id, $category)
{
  $categories = get_the_terms($post_id, $category);
  if (!empty($categories)) {
    $category_name = $categories[0]->name;
    return $category_name;
  } else {
    return 'Uncategorized';
  }
}

$category_name = get_custom_post_type_category($post_id, 'project-category');

$image_id = get_post_meta(get_the_ID(), 'joanantonrechi_fields_project_image_id', true);
$image_size = 'project_single';
$image_src = wp_get_attachment_image_src($image_id, $image_size);
$gallery = get_post_meta(get_the_ID(), 'joanantonrechi_fields_project_gallery', true);
$projectText = get_post_meta(get_the_ID(), 'joanantonrechi_fields_project_description', true);

?>

<div class="singleProject">
  <div class="singleProjectHero">
    <img src="<?php echo $image_src[0]; ?>" alt="<?php echo get_the_title(); ?>" class="singleProjectHero__image">
    <div class="singleProjectHero__overlay">
      <p class="singleProjectHero__category"><?php echo $category_name; ?></p>
      <h1 class="singleProjectHero__title"><?php echo get_the_title(); ?></h1>
    </div>
  </div>
  <div class="container">
    <div class="singleProject__description">
      <?php echo $projectText; ?>
    </div>
    <div class="gallery">
      <p class="gallery__title">Galería</p>
      <div class="swiper swiper-project-gallery">
        <div class="swiper-wrapper">
          <?php
          foreach ($gallery as $image) {
            $image_id = $image['image_id'];
            $image_size = 'project_gallery';
            $image_src = wp_get_attachment_image_src($image_id, $image_size);
            ?>
            <a href="<?php echo $image_src[0]; ?>" data-lightbox="roadtrip" class="swiper-slide">
              <img src="<?php echo $image_src[0]; ?>" alt="project image" class="gallery__image">
            </a>
            <?php
          }
          ?>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>
    </div>
  </div>
  <p class="uppercase text-center font-bold text-2xl py-12 text-black-500">También te puede interesar</p>
</div>


<?php

$interestProjects = new WP_Query(
  array(
    'post_type' => 'project',
    //'category_name' => $category_name, // Nombre de la categoría
    'posts_per_page' => 3, // Número de posts a obtener
    'orderby' => 'rand' // Ordenar de forma aleatoria
  )
);

?>

<?php if ($interestProjects->posts): ?>
  <div class="grid grid-cols-3">
    <?php foreach ($interestProjects->posts as $post): ?>
      <?php
      $category = get_the_terms($post->ID, 'project-category');
      $image_id = get_post_meta($post->ID, 'joanantonrechi_fields_project_image_id', true);
      $image_size = 'project_single';
      $image_src = wp_get_attachment_image_src($image_id, $image_size);
      ?>
      <a href="<?php echo get_permalink($post->ID, false) ?>" class="col-span-3 lg:col-span-1 relative mb-4 lg:mb-0">
        <img src="<?php echo $image_src[0]; ?>" alt="<?php echo $post->post_title; ?>"
          class="w-full h-[230px] object-cover" />
        <div class="absolute bottom-0 left-0 w-full p-4">
          <p class="text-primary-500 font-medium text-sm uppercase"><?php echo $category[0]->name; ?></p>
          <p class="text-primary-500 font-extrabold text-base uppercase"><?php echo $post->post_title; ?></p>
        </div>
      </a>
    <?php endforeach; ?>
    <?php wp_reset_postdata(); ?>
  </div>
<?php else: ?>
  <div class="col-span-12">
    <p class="text-center text-xl text-black-500">No hay resultados</p>
  </div>
<?php endif; ?>

<?php get_footer(); ?>