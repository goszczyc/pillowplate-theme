<?php if (have_rows('movies')) : ?>

  <section class="container mx-auto">

    <?php if ($movies_heading = get_field('movies_heading')) : ?>

      <div class="my-12 max-w-2xl mx-auto text-center">
        <h2 class="text-3xl font-semibold mb-8">
          <?= $movies_heading; ?>
        </h2>

        <?php if ($movies_subheading = get_field('movies_subheading')) : ?>

          <div class="prose max-w-full prose-p:text-black prose-strong:text-primary">
            <?= $movies_subheading; ?>
          </div>

        <?php endif; ?>
      </div>

    <?php endif; ?>

    <div class="flex -mx-5 flex-wrap">

      <?php while (have_rows('movies')) : the_row(); ?>

        <div class="w-full sm:w-1/2 p-5">
          <div class="relative movie pb-[56.25%]">
            
            <?php if ($movie = get_sub_field('movie')) : ?>

              <?= $movie; ?>

            <?php endif; ?>

          </div>
        </div>

      <?php endwhile; ?>

    </div>

  </section>

<?php endif; ?>

