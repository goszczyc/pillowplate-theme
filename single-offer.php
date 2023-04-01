<?php

/* Template Name: Szabon strony oferty */

get_header();
?>

<main class="main">
  <?php get_template_part('/template-parts/banner'); ?>
  <?php get_template_part('/template-parts/heading-subheading', '', ['breadcrumbs' => true]); ?>
  <?php get_template_part('/template-parts/text-image-even'); ?>
  <?php get_template_part('/template-parts/red-bar-text'); ?>
  <?php get_template_part('/template-parts/icons-section'); ?>

  <?php
  // Additional text-image section... Thanks Andrew :)
  if (have_rows('text-image_additional')) : ?>

    <section class="text-image">
      <?php $i = 0; ?>

      <?php while (have_rows('text-image_additional')) : the_row(); ?>

        <div class="grid-container">

          <?php
          $img_container_class = ($i % 2 != 0) ? 'col-span-full sm:col-start-8 sm:col-span-7 box-shadow--left' : 'col-span-full sm:col-span-7';

          $text_container_class = ($i % 2 != 0) ? 'col-start-2 col-span-12 sm:col-start-2 sm:col-span-6 sm:mr-5 lg:col-start-3 lg:col-span-5 xl:col-start-3 xl:col-span-4' : 'col-start-2 col-span-12 xs:col-start-2 xs:col-span-12 sm:col-start-8 sm:col-span-6 sm:ml-5 lg:col-span-5 xl:col-start-9 xl:col-span-4';
          ?>

          <div class="flex flex-col justify-center <?= $text_container_class; ?> row-start-2 sm:row-start-1 sm:mr-5 mb-10 py-5">

            <?php
            if (have_rows('text_image_content')) {
              while (have_rows('text_image_content')) {
                the_row();
                $component_name = '';
                if (get_row_layout() == 'heading_red_text') $component_name = 'heading_red';
                if (get_row_layout() == 'heading') $component_name = 'heading';
                if (get_row_layout() == 'text') $component_name = 'text';
                if (get_row_layout() == 'list') $component_name = 'list';
                if (get_row_layout() == 'icons_text') $component_name = 'icons_text';
                if (get_row_layout() == 'button') $component_name = 'button';

                get_template_part('/components/flexible-layouts/' . $component_name);
              }
            }
            ?>

          </div>

          <div class="<?= $img_container_class; ?> row-start-1 box-shadow mb-10">
            <?php if ($image = get_sub_field('image')) : ?>

              <?= wp_get_attachment_image($image, 'standard', '', ['class' => 'w-full h-full object-cover']); ?>

            <?php endif; ?>
          </div>


        </div>

      <?php $i++;
      endwhile; ?>

    </section>

  <?php endif; ?>

  <?php if (have_rows('expandables')) : ?>


    <div class="container mx-auto flex flex-wrap justify-center mt-10">
      <?php if ($expandables_heading = get_field('expandables_heading')) : ?>

        <div class="w-full xs:w-10/12 sm:w-9/12 md:w-8/12 lg:w-7/12 xl:w-6/12 2xl:w-5/12 text-3xl b-red mb-14">
          <?= $expandables_heading; ?>
        </div>

      <?php endif; ?>

      <div class="w-full lg:w-10/12 pb-14">

        <?php $content_id = 1;
        while (have_rows('expandables')) : the_row(); ?>

          <div class="expandable pt-8 border-gray border-solid border-t last:border-y">
            <?php if ($heading = get_sub_field('heading')) : ?>

              <div class="flex flex-wrap items-center justify-between">
                <h3 class="text-3xl text-center xs:text-left w-10/12"><?= $heading; ?></h3>
                <div class="flex justify-center items-center w-full mt-5 xs:justify-end xs:w-2/12 xs:mt-0"><a href="expand-content" data-content-id="<?= $content_id; ?>" class="expandable__btn"></a></div>
              </div>

              <?php if ($text = get_sub_field('text')) : ?>

                <div id="content-<?= $content_id; ?>" class="expandable__content mt-3 mb-5 h-0 overflow-hidden w-full xs:w-10/12 prose max-w-full prose-ul:pl-4 prose-ul:list-inside prose-li:mt-5 prose-li:first:mt-0 text-gray">
                  <?= $text; ?>
                </div>

              <?php endif; ?>

            <?php endif; ?>
          </div>

        <?php $content_id++;
        endwhile; ?>

      </div>
    </div>

  <?php endif; ?>

  <?php if (have_rows('three_images')) : ?>

    <div class="container mx-auto my-14 px-0 grid grid-cols-1 xs:grid-cols-2 md:grid-cols-3">
      <?php while (have_rows('three_images')) : the_row(); ?>
        <div class="p-5">
          <div class="relative pb-[65%] box-shadow">
            <?php if ($image = get_sub_field('image')) : ?>

              <?= wp_get_attachment_image($image, 'standard', '', ['class' => 'absolute w-full h-full object-cover']); ?>

            <?php endif; ?>
          </div>
        </div>
      <?php endwhile; ?>
    </div>

  <?php endif; ?>

  <?php get_template_part('template-parts/cta'); ?>

</main>


<?php get_footer(); ?>