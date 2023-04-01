<?php
$is_fp = (isset($args['is_fp'])) ? $args['is_fp'] : false;
$args = array(
	'post_type' => 'offer',
	'posts_per_page' => $is_fp ? 3 : -1,
);

$offer = new WP_Query($args);
$index = 0;
?>

<?php if ($offer->have_posts()) : ?>
<?php while ($offer->have_posts()) : $offer->the_post(); ?>
<?php get_template_part('/template-parts/text-image-offer', '', ['index' => $index]); ?>

<?php $index++;
	endwhile; ?>

<?php endif; ?>