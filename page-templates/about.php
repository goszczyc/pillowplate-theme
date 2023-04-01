<?php

/* Template Name: O nas */

get_header();
?>

<main class="main">
  <?php get_template_part('/template-parts/banner'); ?>
  <?php get_template_part('/template-parts/heading-subheading'); ?>
  <?php get_template_part('/template-parts/movies'); ?>
  <?php get_template_part('/template-parts/text-image-even'); ?>
  <?php get_template_part('/template-parts/icons-section'); ?>
  <?php get_template_part('/template-parts/collaborators'); ?>
  <?php get_template_part('/template-parts/news'); ?>
  <?php get_template_part('/template-parts/contact-form-big'); ?>
  <?php get_template_part('/template-parts/cta'); ?>
</main>

<?php get_footer(); ?>