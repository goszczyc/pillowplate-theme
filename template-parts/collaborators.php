<?php if (have_rows('collaborators')) : ?>

  <section class="container mx-auto my-12">

    <?php if ($collaborators_heading = get_field('collaborators_heading')) : ?>

      <div class="max-w-3xl mx-auto mb-10 text-center">

        <h2 class="text-3xl mb-6 font-semibold">
          <?= $collaborators_heading; ?>
        </h2>

        <?php if ($collaborators_subheading = get_field('collaborators_subheading')) : ?>

          <p class="text-gray text-xs">
            <?= $collaborators_subheading; ?>
          </p>

        <?php endif; ?>

      </div>

    <?php endif; ?>

    <div class="collaborators-slider swiper">
      <div class="swiper-wrapper flex items-center">
        <?php while (have_rows('collaborators')) : the_row(); ?>
          <?php if ($logo = get_sub_field('logo')) : ?>

            <div class="swiper-slide">
              <?= wp_get_attachment_image($logo, 'full'); ?>
            </div>

          <?php endif; ?>
        <?php endwhile; ?>
      </div>

    </div>


  </section>

<?php endif; ?>