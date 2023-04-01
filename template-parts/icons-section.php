<section class="icons container flex flex-col items-center pt-14 pb-8 mx-auto">

  <?php if ($icons_heading = get_field('icons_heading', 'options')) : ?>

    <div class="text-3xl text-center b-red max-w-2xl mb-8 sm:mb-12 lg:mb-14 xl:mb-16">
      <?= $icons_heading; ?>
    </div>

  <?php endif; ?>

  <?php if (have_rows('icons_repeater', 'options')) : ?>

    <div class="flex flex-wrap justify-center">

      <?php while (have_rows('icons_repeater', 'options')) : the_row(); ?>

        <div class="w-full xs:w-1/2 sm:w-1/3 md:w-1/4 px-5 mb-10">

          <?php if ($icon = get_sub_field('icon')) : ?>

            <div class="icons__icon flex flex-col items-center mb-7">

              <?= wp_get_attachment_image($icon, 'icon-large'); ?>

            </div>

            <div class="icons-text text-center">

              <?php if ($text_bold = get_sub_field('text_bold')) : ?>

                <h3 class="text-base uppercase"><strong><?= $text_bold; ?></strong></h3>

              <?php endif; ?>

              <?php if ($text = get_sub_field('text')) : ?>

                <p class="text-base uppercase"><?= $text; ?></p>

              <?php endif; ?>

            </div>

          <?php endif; ?>

        </div>

      <?php endwhile; ?>

    </div>

  <?php endif; ?>

</section>