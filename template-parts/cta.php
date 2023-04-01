<section class="bg-dark bg-opacity-60 py-16 bg-no-repeat bg-center bg-cover bg-blend-overlay" <?php if ($cta_bg = get_field('cta_bg', 'options')) : ?> style="background-image: url('<?= esc_url($cta_bg); ?>')" <?php endif; ?>>

	<div class="flex-col items-center text-center max-w-5xl px-5  mx-auto">
		<?php if ($cta_heading = get_field('cta_heading', 'options')) : ?>

			<h2 class=" text-4xl text-white font-bold mb-10"><?= $cta_heading; ?></h2>

		<?php endif; ?>

		<?php if ($cta_subheading = get_field('cta_subheading', 'options')) : ?>

			<p class="text-white text-lg mb-10">
				<?= $cta_subheading; ?>
			</p>

		<?php endif; ?>

		<?php if (($contact_tel = get_field('contact_tel', 'options')) && ($contact_email = get_field('contact_email', 'options'))) : ?>

			<p class="text-xl xs:text-4xl mb-16 text-white">
				<a href="tel: <?= str_replace(array('(', ')'), array('', ''), trim($contact_tel));; ?>" class="font-bold transition-colors duration-300 hover:text-primary focus:text-primary"><?= $contact_tel; ?></a>
				<span> lub </span>
				<a href="mailto: <?= $contact_email; ?>" class="font-bold transition-colors duration-300 hover:text-primary focus:text-primary"><?= $contact_email; ?></a>
			</p>

		<?php endif; ?>

		<?php if (have_rows('contact_icon_text', 'options')) : ?>

			<div class="flex flex-wrap justify-evenly items-center">

				<?php while (have_rows('contact_icon_text', 'options')) : the_row(); ?>

					<?php if ($link = get_sub_field('link')) : ?>

						<a href="<?= $link['url']; ?>" class="flex items-center mx-3">

							<?php if ($icon = get_sub_field('icon')) {
								echo wp_get_attachment_image($icon, 'contact-icon');
							} ?>

							<span class="block text-xl text-white ml-3">
								<?= $link['title']; ?>
							</span>

						</a>

					<?php endif; ?>

				<?php endwhile; ?>

			</div>

		<?php endif; ?>
	</div>

</section>