<?php get_header(); ?>

<main class="main">
  <?php get_template_part('/template-parts/heading-subheading', '', ['breadcrumbs' => true]); ?>
  <section class="container grid grid-cols-12 mx-auto mb-12">
    <div class="col-span-full lg:col-start-2 lg:col-span-10">
      <div class="flex flex-col-reverse xs:items-end mb-11 xs:flex-row">
        <h1 class="text-3xl w-full sm:w-4/5 md:w-3/4 lg:w-1/2">
          <?= get_the_title(); ?>
        </h1>
        <span class="text-xs text-gray mb-2 w-max flex-shrink-0 xs:pl-2 xs:ml-auto xs:mb-0"><?= get_the_date('d M Y'); ?></span>
      </div>
      <article class="prose prose-h2:text-3xl prose-h3:text-2xl prose-h4:text-xl prose-headings:font-normal prose-img:max-w-full prose-img:mx-auto text-gray prose-a:text-current hover:prose-a:text-primary focus:prose-a:text-primary prose-headings:text-black prose-a:transition-colors  max-w-full">
        <?= get_the_content(); ?>
      </article>
    </div>
  </section>

  <?php get_template_part('/template-parts/news', '', ['other' => true]); ?>
</main>

<?php get_footer(); ?>