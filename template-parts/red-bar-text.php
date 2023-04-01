<?php if ($red_bar_text = get_field('red_bar_text')) : ?>

  <div class="bg-primary pt-8 my-8">
    <div class="container mx-auto">
      <div class="flex flex-wrap prose prose-base prose-headings:text-3xl prose-p:mt-0 prose-headings:mt-0 prose-headings:mb-7 prose-p:mb-7 max-w-full text-[#000]">
        <div class="w-full sm:w-1/2 sm:pr-5 lg:w-5/12">
          <?= $red_bar_text['left']; ?>
        </div>
        <div class="w-full sm:w-1/2 sm:pl-5 lg:w-6/12 lg:ml-[8.3333%]">
          <?= $red_bar_text['right']; ?>
        </div>
      </div>
    </div>
  </div>

<?php endif; ?>