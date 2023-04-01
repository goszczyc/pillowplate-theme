<?php $is_breadcrumbs = (isset($args['breadcrumbs'])) ? $args['breadcrumbs'] : false; ?>

<?php if ($heading_main = get_field('heading_main')) : ?>

  <div class="container mx-auto mt-16 mb-14">
    <div class="flex justify-center">
      <div class="lg:w-6/12 text-3xl text-center font-bold mb-7">
        <?= $heading_main; ?>
      </div>
    </div>

    <?php if ($heading_sub = get_field('heading_sub')) : ?>

      <div class="flex justify-center">
        <div class="lg:w-6/12 text-base text-center mb-6">
          <?= $heading_sub; ?>
        </div>
      </div>

    <?php endif; ?>

    <?php if ($is_breadcrumbs) : ?>

      <div class="flex justify-center prose lowercase text-black prose-span:text-sm prose-p:text-sm prose-a:text-primary prose-a:no-underline p max-w-full hover:prose-a:text-dark focus:prose-a:text-dark prose-a:transition-colors">
        <?php
        if (function_exists('yoast_breadcrumb')) {
          yoast_breadcrumb('<p id="breadcrumbs ">', '</p>');
        }
        ?>
      </div>

    <?php endif; ?>

  </div>

<?php endif; ?>