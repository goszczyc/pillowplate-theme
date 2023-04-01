<?php if (have_rows('icons_text')) : ?>

  <div class="flex flex-wrap">

    <?php while (have_rows('icons_text')) : the_row(); ?>

      <div class="flex items-center w-1/2 mb-6 px-5">

        <?php if ($icon = get_sub_field('icon')) : ?>

          <?= wp_get_attachment_image($icon, 'icon'); ?>

        <?php endif; ?>

        <?php if ($text = get_sub_field('text')) : ?>

          <span class="text-base text-gray ml-5">
            <?= $text; ?>
          </span>

        <?php endif; ?>

      </div>

    <?php endwhile; ?>

  </div>

<?php endif; ?>