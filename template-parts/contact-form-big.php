<?php
// Tailwind classes for CF7 inputs :/
$classes = 'grid grid-cols-1 xs:grid-cols-2 md:grid-cols-3 p-[6px] bg-white max-w-3xl px-12 relative w-6 h-6 border-none bg-none cursor-pointer before:absolute before:top-1/2 before:left-1/2 before:w-2 before:h-2 before:border-l-[2px] before:border-b-[2px] before:border-white before:border-solid before:-translate-x-1/2 before:-translate-y-3/4 before:-rotate-45 text-xs relative w-6 h-6 border-none bg-none cursor-pointer before:absolute before:top-1/2 before:left-1/2 before:w-2 before:h-2 before:border-l-[2px] before:border-b-[2px] before:border-white before:border-solid before:-translate-x-1/2 before:-translate-y-3/4 before:-rotate-45 px-[6px] mt-8';
?>
<section class="contact bg-dark py-16">
  <div class="container mx-auto flex flex-col items-center">
    <?php if ($form_heading = get_field('form_heading', 'options')) : ?>

      <h2 class="text-3xl text-white uppercase font-bold mb-12"><?= $form_heading; ?></h2>

    <?php endif; ?>
    <div class="w-full xl:w-10/12">
      <?= do_shortcode('[contact-form-7 id="115" title="Formularz - stopka"]'); ?>
    </div>
  </div>
</section>