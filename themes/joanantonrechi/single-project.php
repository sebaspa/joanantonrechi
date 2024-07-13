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
    </div>
  </div>
</div>

<?php get_footer(); ?>
