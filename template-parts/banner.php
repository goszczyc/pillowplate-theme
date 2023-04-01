<?php
$p_y = (isset($args['large_padding'])) ? ' py-10 xs:py-12 sm:py-14 md:py-24 lg:py-44 xl:py-56 2xl:pt-[278px] 2xl:pb-[196px]' : 'py-6 xs:py-8 sm:py-10 md:py-14 lg:py-18 xl:py-24 2xl:py-28';
if ($banner_heading = get_field('banner_heading')) :
  $banner_bg = get_field('banner_bg');
?>
  <section class="banner relative <?= $p_y ?> w-full bg-center bg-no-repeat bg-cover flex flex-col items-center  before:absolute before:top-0 before:left-0 before:w-full before:h-full before:bg-black/30" style="background-image: url('<?= esc_url($banner_bg); ?>');">
    <div class="relative max-w-5xl px-5">
      <div class="text-4xl xs:text-5xl leading-tight font-normal text-white bold-decorate mb-16">
        <?= $banner_heading; ?>
      </div>
    </div>

    <?php if ($banner_btn = get_field('banner_btn')) : ?>

      <a href='<?= $banner_btn['url']; ?>' class='relative btn btn--white btn--wide btn--13'><?= $banner_btn['title']; ?></a>

    <?php endif; ?>

  </section>
<?php endif; ?>