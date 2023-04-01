<?php

/* Template Name: Strona główna */

get_header();
?>

<main class="main">
  <?php get_template_part('/template-parts/banner', '', ['large_padding' => true]); ?>
  <?php get_template_part('/template-parts/icons-section'); ?>
  <?php get_template_part('/template-parts/offer', '', ['is_fp' => true]); ?>
  <?php get_template_part('/template-parts/heading-subheading'); ?>
  <?php get_template_part('/template-parts/text-image-even', '', ['is_fp' => true]); ?>
  <?php get_template_part('/template-parts/news'); ?>
  <?php get_template_part('/template-parts/contact-form-big'); ?>
  <?php get_template_part('/template-parts/cta'); ?>
<?php get_footer(); ?>