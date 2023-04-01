<?php

/* Template Name: Galeria */

get_header();
?>

<main class="main">
  <?php get_template_part('/template-parts/banner'); ?>
  <?php get_template_part('/template-parts/gallery'); ?>
  <?php get_template_part('/template-parts/news'); ?>
  <?php get_template_part('/template-parts/contact-form-big'); ?>
  <?php get_template_part('/template-parts/cta'); ?>
  <?php get_footer(); ?>