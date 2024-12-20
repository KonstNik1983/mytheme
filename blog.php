<?php
/*
Template Name: blog
*/
?>

<?php get_header(); ?>

<main>
   <h2>Блог - помощник домашнему пивовару</h2>

   <?php
   $args = [
      'posts_per_page' => -1,         // Количество записей

      'category_name'  => 'blog'  // Слаг категории (например, "recipes")
   ];

   $query = new WP_Query($args);

   if ($query->have_posts()) {
      while ($query->have_posts()) {
         $query->the_post(); ?>

         <a href="<?php the_permalink(); ?>" class="full-page-link">
            <article>
               <?php the_post_thumbnail(
                  array(530, 350),
                  array('class' => 'card-img-top')
               ); ?>
               <h3><?php the_title(); ?></h3>
               <p><b><?php the_excerpt(); ?></b></p>
            </article>
         </a>
   <?php }
   }

   wp_reset_postdata();
   ?>





</main>

<?php get_footer(); ?>