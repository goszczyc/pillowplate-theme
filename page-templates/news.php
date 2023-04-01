<?php

/* Template Name: Aktualności */

get_header();
?>

<main class="main">
  <?php get_template_part('/template-parts/banner'); ?>
  <?php get_template_part('/template-parts/heading-subheading', '', ['is_breadcrumbs' => true]); ?>
  <?php get_template_part('/template-parts/news', '', ['is_pagination' => true]); ?>
  <?php get_template_part('/template-parts/contact-form-big'); ?>
  <?php get_template_part('/template-parts/cta'); ?>
<?php get_footer(); ?>