<!DOCTYPE html>
<html lang="pl">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo wp_title(); ?></title>
	<?php wp_head(); ?>

</head>

<?php $contact_id = apply_filters('wpml_object_id', 265, 'page'); ?>


<body <?php body_class(); ?>>

	<header class="header fixed top-0 left-0 w-full bg-white py-9 transition-all duration-300 z-50">
		<div class="container flex items-center mx-auto">
			<?php if ($logo_dark = get_field('logo_dark', 'options')) :
				$url = $logo_dark['url'];
				$alt = $logo_dark['alt'];
			?>

				<a href="<?= esc_url(home_url()); ?>" class="block mr-auto">
					<img width="274px" height="74px" src="<?php echo esc_url($url); ?>" alt="<?php echo esc_attr($alt); ?>" />
				</a>

			<?php endif; ?>
			<nav class="main-nav hidden flex-col items-center fixed top-0 left-0 w-screen h-screen pt-32 bg-white max-lg:overflow-y-auto lg:flex lg:flex-row lg:relative lg:top-auto lg:left-auto lg:w-auto lg:h-auto lg:pt-0">
				<?php get_template_part('/components/main-menu', '', ['menu' => 'main-nav']); ?>
				<a href="<?= esc_url(get_permalink($contact_id)); ?>" class="btn btn--primary btn--wide mx-2">Skontaktuj się z nami</a>
				<div class="flex items-center ml-1">
					<?php echo do_shortcode('[gtranslate]'); ?>
				</div>
			</nav>
			<button class="burger flex flex-col justify-center items-center relative w-10 h-10 border-none bg-none lg:hidden">
				<div class="relative w-9 h-[2px] bg-black before:absolute before:top-3 before:left-0 before:w-full before:h-full before:bg-black
        after:absolute after:-top-3 after:left-0 after:w-full after:h-full after:bg-black"></div>
			</button>
		</div>
	</header>