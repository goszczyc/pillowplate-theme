<footer>
  <div class="bg-dark py-12">
    <div class="container px-0 mx-auto grid grid-cols-12">
      <?php if ($logo_light = get_field('logo_light', 'options')) :
        $url = $logo_light['url'];
        $alt = $logo_light['alt'];
      ?>
        <div class="col-span-full px-5">
          <a href="<?= esc_url(home_url()); ?>" class="block">
            <img width="214px" height="52px" src="<?php echo esc_url($url); ?>" alt="<?php echo esc_attr($alt); ?>" />
          </a>
        </div>
      <?php endif; ?>
      <div class="px-5 mt-10 col-span-full xs:col-span-6 lg:col-span-3">
        <div class="text-white text-sm leading-7">
          <?php if ($footer_info = get_field('footer_info', 'options')) : ?>
            <?= $footer_info; ?>
          <?php endif; ?>
          <?php if ($footer_email = get_field('footer_email', 'options')) : ?>
            <p class="mt-6">email: <a href="mailto: <?= $footer_email; ?>" class="hover:text-primary transition-colors"><?= $footer_email; ?></a></p>
          <?php endif; ?>
        </div>
      </div>
      <div class="px-5 mt-10 col-span-6 lg:col-span-3">
        <?php if ($footer_services_heading = get_field('footer_services_heading', 'options')) : ?>
          <h2 class="text-white text-sm font-semibold mb-1">
            <?= $footer_services_heading; ?>
          </h2>
        <?php endif; ?>
        <?php get_template_part('/components/footer-menu', '', ['menu' => 'footer-services']); ?>
      </div>
      <div class="px-5 mt-10 col-span-6 xs:col-span-4 lg:col-span-2">
        <?php if ($footer_products_heading = get_field('footer_products_heading', 'options')) : ?>
          <h2 class="text-white text-sm font-semibold mb-1">
            <?= $footer_products_heading; ?>
          </h2>
        <?php endif; ?>
        <?php get_template_part('/components/footer-menu', '', ['menu' => 'footer-products']); ?>
      </div>
      <div class="px-5 mt-10 col-span-6 xs:col-span-4 lg:col-span-2">
        <?php if ($footer_other_heading = get_field('footer_other_heading', 'options')) : ?>
          <h2 class="text-white text-sm font-semibold mb-1">
            <?= $footer_other_heading; ?>
          </h2>
        <?php endif; ?>
        <?php get_template_part('/components/footer-menu', '', ['menu' => 'footer-other']); ?>
      </div>
      <div class="px-5 mt-10 col-span-6 xs:col-span-4 lg:col-span-2">
        <?php if ($footer_links_heading = get_field('footer_links_heading', 'options')) : ?>
          <h2 class="text-white text-sm font-semibold mb-1">
            <?= $footer_links_heading; ?>
          </h2>
        <?php endif; ?>
        <?php get_template_part('/components/footer-menu', '', ['menu' => 'footer-links']); ?>
      </div>
    </div>
  </div>

  <div class="grid-container bg-primary">
    <div class="flex justify-between items-center col-start-2 col-span-12 sm:col-start-2 sm:col-span-6 px-5 py-7">
      <span class="text-white text-sm">Powrót na górę</span>
      <button class="scroll-top cursor-pointer">
        <img src="<?= get_template_directory_uri(); ?>/dist/images/arrow-top.png" alt="arrow-up" class="w-8 h-8">
      </button>
    </div>
    <div class="flex items-center justify-center px-5 col-span-full sm:col-start-8 sm:col-span-7 py-7 bg-white">
      <span class="text-sm text-center">Copyright <?= date('Y'); ?> &copy; BTH - producent stali nierdzewnej i kwasoodpornej</span>
    </div>
  </div>


</footer>

<?php wp_footer(); ?>
</body>

</html>