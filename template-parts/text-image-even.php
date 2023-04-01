<?php $is_fp = (isset($args['is_fp'])) ? $args['is_fp'] : false; ?>
<?php if (have_rows('text-image')) : ?>

  <section class="text-image">
    <?php $i = 1; ?>

    <?php while (have_rows('text-image')) : the_row(); ?>

      <div class="grid-container my-10">

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
              if (get_row_layout() == 'heading_red') $component_name = 'heading_red';
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

    <?php if ($is_fp) : ?>
      <div class="flex justify-center my-14">
        <a href="<?= esc_url(get_permalink(321)) ?>" class="btn btn--primary">
          Przeczytaj o naszej firmie
        </a>
      </div>
    <?php endif; ?>

  </section>

<?php endif; ?>