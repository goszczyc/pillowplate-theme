<?php
get_header();
?>

<main class="main">
	<?php get_template_part('/template-parts/banner'); ?>
	<?php get_template_part('/template-parts/documents'); ?>
	<section class="container mx-auto mb-10">
		<h2 class="text-3xl text-center font-semibold mb-12 max-w-7xl mx-auto"><?= get_the_title(); ?></h2>
		<article class="prose prose-headings:mb-9 prose-headings:mt-3 prose-ul:pl-4 prose-ol:pl-4 prose-ul:list-inside prose-li:mb-8 prose-p:text-gray prose-li:text-gray hover:prose-a:text-primary max-w-7xl mx-auto prose-td:border prose-td:border-gray prose-td:p-1">
			<?php the_content(); ?>
		</article>
	</section>
</main>

<?php get_footer(); ?>