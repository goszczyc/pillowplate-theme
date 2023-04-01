<section class="documents">
	<div class="bg-primary">
		<div class="container mx-auto px-0 xs:px-5">

			<?php get_template_part('/components/documents-menu', '', ['menu' => 'documents-nav', 'class' => 'documents__menu']); ?>

		</div>
	</div>

	<div class="container mx-auto py-14 max-w-4xl">
		<?php if ($documents_heading = get_field('documents_heading')) : ?>

			<h2 class="text-3xl mb-8 text-center">
				<?= $documents_heading; ?>
			</h2>

			<?php if ($documents_subheading = get_field('documents_subheading')) : ?>

				<p class="text-base mb-7 text-center">
					<?= $documents_subheading; ?>
				</p>

			<?php endif; ?>

		<?php endif; ?>
		<div class="flex justify-center prose text-black prose-span:text-sm lowercase prose-p:text-sm prose-a:text-primary prose-a:no-underline p max-w-full hover:prose-a:text-dark focus:prose-a:text-dark prose-a:transition-colors">
			<?php
			if (function_exists('yoast_breadcrumb')) {
				yoast_breadcrumb('<p id="breadcrumbs ">', '</p>');
			}
			?>
		</div>

		<?php if (have_rows('documents_images')) : ?>
			<div class="grid grid-cols-1 xs:grid-cols-2 md:grid-cols-4 gap-5 my-10">

				<?php while (have_rows('documents_images')) : the_row(); ?>

					<?php if ($image = get_sub_field('image')) : ?>

						<?= wp_get_attachment_image($image, 'document-image', '', ['class' => 'w-full h-auto object-fit']); ?>

					<?php endif; ?>

				<?php endwhile; ?>

			</div>
		<?php endif; ?>
	</div>
</section>