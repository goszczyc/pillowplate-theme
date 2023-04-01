<?php
$index = (isset($args['index'])) ? $args['index'] : '';
$contact_id = apply_filters('wpml_object_id', 265, 'page');
?>

<?php if (have_rows('offer_view')) : ?>

	<section class="text-image">

		<?php while (have_rows('offer_view')) : the_row(); ?>

			<div class="grid-container mt-12 pb-10 mb-16">

				<?php
				$img_container_class = ($index % 2 != 0) ? 'col-span-full sm:col-start-8 sm:col-span-7 lg:col-start-7 lg:col-span-8 lg:ml-20 box-shadow--left' : 'col-span-full sm:col-span-7 lg:col-span-8 lg:mr-20';

				$text_container_class = ($index % 2 != 0) ? 'col-start-2 col-span-12 sm:col-start-2 sm:col-span-6 sm:mr-5 lg:col-start-2 lg:col-span-5 xl:col-start-3 xl:col-span-4' : 'col-start-2 col-span-12 xs:col-start-2 xs:col-span-12 sm:col-start-8 sm:col-span-6 lg:col-span-5 lg:col-start-9 sm:ml-5 xl:col-start-9 xl:col-span-4';
				?>

				<div class="flex flex-col justify-center relative <?= $text_container_class; ?> row-start-2 sm:row-start-1 sm:mr-5 mb-10 py-5">

					<?php
					if (have_rows('text_image_content')) {
						while (have_rows('text_image_content')) {
							the_row();
							$component_name = '';
							if (get_row_layout() == 'heading_red_text') $component_name = 'heading_red';
							if (get_row_layout() == 'heading') $component_name = 'heading';
							if (get_row_layout() == 'text') $component_name = 'text';
							if (get_row_layout() == 'list') $component_name = 'list';
							if (get_row_layout() == 'icons_text') $component_name = 'icons_text';
							if (get_row_layout() == 'button') $component_name = 'button';

							get_template_part('/components/flexible-layouts/' . $component_name);
						}
					}
					?>

					<div class="flex items-center flex-wrap absolute top-full left-0">
						<?php if ($offer_btn = get_field('offer_btn')) : ?>

							<a href="<?= get_permalink(); ?>" class="btn mt-3 btn--secondary mr-4"><?= $offer_btn; ?></a>

						<?php endif; ?>
						<a href="<?= esc_url(get_permalink($contact_id)); ?>" class="btn mt-3 btn--primary">Skontaktuj się z nami</a>
					</div>

				</div>

				<div class="<?= $img_container_class; ?> relative min-h-[350px] row-start-1 box-shadow mb-10">
					<?php if ($image = get_sub_field('image')) : ?>

						<?= wp_get_attachment_image($image, 'standard', '', ['class' => 'absolute top-0 left-0 w-full h-full object-cover']); ?>

					<?php endif; ?>
				</div>


			</div>

		<?php endwhile; ?>

	</section>

<?php wp_reset_query();
endif; ?>