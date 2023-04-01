<?php if (have_rows('galleries')) :
	$gallery_id = 0; ?>

	<section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 container px-0 mx-auto mt-12 mb-20">
		<?php if ($gallery_heading = get_field('gallery_heading')) : ?>

			<div class="px-5 col-span-full">
				<h2 class="text-3xl font-bold uppercase text-center max-w-2xl mx-auto mb-12"><?= $gallery_heading ?></h2>
			</div>

		<?php endif; ?>

		<?php while (have_rows('galleries')) : the_row(); ?>

			<?php if ($gallery = get_sub_field('gallery')) :
				$thumbnail = $gallery[0];
			?>

				<div class="p-5">

					<a href="<?= esc_url($thumbnail['url']); ?>" data-fslightbox="gallery-<?= $gallery_id; ?>" class="group/gallery block relative box-shadow overflow-hidden">
						<?php
						$size = 'gallery-thumb';
						$thumb = $thumbnail['sizes'][$size];
						?>
						<img src="<?= $thumb; ?>" alt="<?= $thumbnail['alt'] ?>" class="w-full h-full object-cover group-hover/gallery:scale-105 group-focus-within/gallery:scale-105 transition-transform duration-1000">
						<?php if ($gallery_name = get_sub_field('gallery_name')) : ?>

							<div class="flex flex-col justify-end bg-dark/40 absolute top-0 left-0 w-full h-full">
								<div class="absolute lg:top-full left-0 w-full">
									<div class="p-4 pr-20 lg:-translate-y-[108px] transition-transform duration-400 lg:group-hover/gallery:-translate-y-full lg:group-focus-within/gallery:-translate-y-full">
										<div class="flex flex-col justify-end min-h-[64px] mb-7">
											<h3 class="text-white text-2xl font-semibold"><?= $gallery_name ?></h3>
										</div>
										<?php if ($gallery_description = get_sub_field('gallery_description')) : ?>

											<p class="text-white text-sm pt-2"><?= $gallery_description; ?></p>

										<?php endif; ?>
									</div>
								</div>
							</div>

						<?php endif; ?>

						<div class="flex items-center absolute bottom-7 right-3 py-2 px-4 rounded-full bg-white">
							<img src="<?= get_template_directory_uri(); ?>/dist/images/gallery-icon.svg" class="w-5 h-auto mr-1">
							<span class="text-sm"><?= count($gallery); ?></span>
						</div>
					</a>


					<?php for ($i = 1, $size = count($gallery); $i < $size; $i++) : ?>

						<a href="<?= esc_url($gallery[$i]['url']); ?>" data-fslightbox="gallery-<?= $gallery_id; ?>" class="invisible"></a>

					<?php endfor ?>
				</div>

			<?php endif; ?>

		<?php $gallery_id++;
		endwhile; ?>

	</section>

<?php endif; ?>