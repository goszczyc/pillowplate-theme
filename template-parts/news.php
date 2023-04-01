<?php

$is_pagination = (isset($args['is_pagination'])) ? true : false;
$other = (isset($args['other'])) ? true : false;
$page_id = apply_filters('wpml_object_id', 188, 'page');

$news_gallery_heading = get_field('news_gallery_heading');
$other_news_heading = $other ? get_field('other_news_heading', 'options') : false;

$news_heading =  $news_gallery_heading ? $news_gallery_heading : $other_news_heading;

$posts_per_page = $is_pagination ? 4 : 2;

$args = array(
	'post_type' => 'post',
	'posts_per_page' => $posts_per_page,
	'paged' => $paged
);

$current_id = get_the_ID();

// The Query
$the_query = new WP_Query($args);

if ($the_query->have_posts()) : ?>

	<section class="container px-0 mx-auto mb-16">

		<?php if ($news_heading) : ?>

			<div class="flex flex-wrap-reverse items-baseline px-5">

				<h2 class="text-3xl font-bold pr-2 my-2 mr-auto">
					<?= $news_heading; ?>
				</h2>

				<a href="<?= esc_url(get_permalink($page_id)); ?>" class="text-xs uppercase text-primary underline font-bold hover:text-dark focus:text-dark transition-colors my-2">
					<?= get_field('all_news_text', 'options', true); ?>
				</a>

			</div>

		<?php endif; ?>

		<div>

			<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

				<?php if ($current_id != get_the_ID()) : ?>

					<div class="grid grid-cols-12 relative py-9 before:absolute before:left-1/2 before:bottom-0 before:w-4/5 before:h-px before:bg-gray before:-translate-x-1/2 last:before:hidden group/news">
						<div class="px-5 col-span-full xs:col-start-2 xs:col-span-10 sm:col-start-1 sm:col-span-6 md:col-start-1 md:col-span-5 lg:col-span-4">
							<div class="box-shadow h-full overflow-hidden">

								<?= get_the_post_thumbnail('', 'standard', ['class' => 'w-full h-full object-cover transition-transform duration-1000 group-hover/news:scale-105 group-focus-within/news:scale-105']); ?>

							</div>
						</div>
						<div class="col-span-full px-5 mt-6 xs:col-start-2 xs:col-span-10 sm:col-start-7 sm:col-span-6 sm:mt-0 md:col-start-6 md:col-span-7 lg:col-start-5 lg:col-span-8 xl:col-start-6 xl:col-span-7">
							<p class="mb-6"><span class="text-sm"><?= get_the_date('d M Y') ?></span></p>
							<a href="<?= esc_url(get_permalink()); ?>">
								<h3 class="text-2xl font-bold mb-9"><?= get_the_title(); ?></h3>
							</a>
							<p class="text-gray mb-9"><?= get_the_excerpt(); ?></p>
							<a href="<?= esc_url(get_permalink()); ?>" class="text-primary underline hover:text-dark focus:text-dark transition-colors">Czytaj więcej</a>
						</div>
					</div>

				<?php endif; ?>

			<?php endwhile; ?>

		</div>

		<?php if ($is_pagination) : ?>

			<div class="flex justify-center px-5 my-8">
				<?php pagination_bar($the_query); ?>
			</div>

		<?php endif; ?>

	</section>

<?php endif; ?>