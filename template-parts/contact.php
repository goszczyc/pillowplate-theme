<section class="container px-0 grid grid-cols-12 mb-12">

  <div class="grid grid-cols-1 lg:grid-cols-2 col-span-full lg:col-start-2 lg:col-span-10">

    <?php if ($contact_page_heading = get_field('contact_page_heading')) : ?>

      <div class="px-5 col-span-full">
        <h2 class="text-3xl font-bold uppercase text-center max-w-2xl mx-auto my-12"><?= $contact_page_heading ?></h2>
      </div>

    <?php endif; ?>

    <div>
      <div class="text-base leading-7">
        <?php if ($contact_info = get_field('contact_info')) : ?>
          <?= $contact_info; ?>
        <?php endif; ?>
      </div>

      <?php if (have_rows('locations')) : ?>

        <div class="flex flex-wrap" data-location="<?= get_sub_field('coords'); ?>">

          <?php while (have_rows('locations')) : the_row(); ?>

            <div class="flex items-start mt-5" data-lat-long="<?= get_sub_field('coords'); ?>">
              <img src="<?= get_template_directory_uri(); ?>/dist/images/pin-empty.svg" class="w-7 h-auto mr-3">
              <div>
                <?php if ($text = get_sub_field('text')) : ?>

                  <div class="text-base">
                    <?= $text; ?>
                  </div>

                <?php endif; ?>

                <?php if ($route_link = get_sub_field('route_link')) : ?>

                  <a href="<?= $route_link['url'] ?>" class="inline-block text-primary lowercase underline font-medium hover:text-dark focus:text-dark transition-colors mt-2"><?= $route_link['title']; ?></a>

                <?php endif; ?>
              </div>
            </div>

          <?php endwhile; ?>

        </div>

      <?php endif; ?>
      <?php if ($contact_email = get_field('contact_email')) : ?>

        <div class="flex mt-5">
          <img src="<?= get_template_directory_uri(); ?>/dist/images/envelope.svg" class="w-7 h-auto mr-3">
          <a href="mailto: <?= $contact_email; ?>"><?= $contact_email; ?></a>
        </div>

      <?php endif; ?>
      <?php if ($contact_phone = get_field('contact_phone')) : ?>

        <div class="flex mt-5">
          <img src="<?= get_template_directory_uri(); ?>/dist/images/phone.svg" class="w-7 h-auto mr-3">
          <a href="mailto: <?= $contact_phone; ?>"><?= $contact_phone; ?></a>
        </div>

      <?php endif; ?>


    </div>

    <div id="map" class="bg-dark isolate"></div>

    <?php if ($divisions_heading = get_field('divisions_heading')) : ?>

      <div class="px-5 col-span-full">
        <h2 class="text-3xl font-bold text-center max-w-2xl mx-auto my-12"><?= $divisions_heading ?></h2>
      </div>

    <?php endif; ?>

    <?php if (have_rows('divisions')) : ?>

      <div class="col-span-full grid grid-cols-1 md:grid-cols-2">

        <?php while (have_rows('divisions')) : the_row(); ?>

          <div class="px-5 mb-10 relative">
            <a href="show-division" class="flex justify-between items-center text-[15px] text-gray font-medium py-3 border-b border-solid border-gray group/division hover:text-primary hover:border-primary transition-colors duration-300">
              <?php if ($division_name = get_sub_field('division_name')) : ?>

                <span class="mr-2"><?= $division_name; ?></span>

              <?php endif; ?>

              <span class="relative w-10 h-full before:absolute before:top-1/2 before:left-1/2 before:w-2 before:h-2 before:border-b before:border-l before:border-solid before:border-gray before:-translate-1/2 before:-translate-y-3/4 before:-rotate-45 group-hover/division:before:border-primary before:transition-colors before:duration-300"></span>
            </a>

            <?php if (have_rows('contact_people')) : ?>

              <div class="h-0 overflow-hidden">

                <?php while (have_rows('contact_people')) : the_row(); ?>

                  <div class="mt-8 border-b border-solid border-gray">

                    <?php if ($name = get_sub_field('name')) : ?>

                      <h4 class="text-xl font-semibold"><?= $name; ?></h4>

                    <?php endif; ?>

                    <?php if ($position = get_sub_field('position')) : ?>

                      <p class="text-sm text-gray"><?= $position; ?></p>

                    <?php endif; ?>

                    <span class="block w-6 h-px bg-gray my-3"></span>

                    <div class="flex flex-wrap items-center">

                      <?php if ($phone_1 = get_sub_field('phone_1')) : ?>

                        <div class="flex flex-wrap items-center my-2">
                          <img src="<?= get_template_directory_uri(); ?>/dist/images/smartphone.svg" alt="smartphone" class="w-[14px] h-auto mr-3">

                          <a href="tel: <?= str_replace(array('(', ')'), array('', ''), trim($phone_1)); ?>" class="text-primary font-medium transition-colors duration-300 hover:text-dark focus:text-dark mr-3"><?= $phone_1; ?></a>


                          <?php if ($phone_2 = get_sub_field('phone_2')) : ?>

                            <a href="tel: <?= str_replace(array('(', ')'), array('', ''), trim($phone_2)); ?>" class="text-primary font-medium transition-colors duration-300 hover:text-dark focus:text-dark mr-5"><?= $phone_2; ?></a>

                          <?php endif; ?>

                        </div>

                      <?php endif; ?>

                      <?php if ($email = get_sub_field('email')) : ?>

                        <div class="flex items-center my-2">
                          <img src="<?= get_template_directory_uri(); ?>/dist/images/envelope-gray.svg" alt="envelope" class="w-[22px] h-auto mr-3">

                          <a href="mailto: <?= $email ?>" class="text-primary font-medium transition-colors duration-300 hover:text-dark focus:text-dark mr-5"><?= $email ?></a>
                        </div>

                      <?php endif; ?>

                    </div>

                  </div>

                <?php endwhile; ?>

              </div>

            <?php endif; ?>

          </div>

        <?php endwhile; ?>

      </div>

    <?php endif; ?>


  </div>

</section>