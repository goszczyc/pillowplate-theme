<?php
$args = wp_parse_args($args, array(
	'menu' => null,
	'class' => null
));
$menu = wp_get_menu_array($args['menu']);
$class = $args['class'];
$item_class = $class . '-item';
$parent_class = $item_class . '--parent';
$sub_class = $class . '-sub-menu';
?>
<ul class="<?= $class; ?> flex items-center justify-center flex-col xs:flex-row">

	<?php foreach ($menu['menus'] as $item) : ?>

		<li class="<?= $item_class; ?> <?php if ($item['children']) echo $parent_class; ?> flex flex-col relative text-sm uppercase text-white xs:w-auto w-full font-medium py-4 xs:px-3 xs:mx-2 before:absolute before:bottom-3 before:left-0 before:w-full before:h-[2px] before:bg-white before:scale-x-0 before:origin-center before:transition-transform before:duration-100 hover:before:scale-x-100 focus-within:before:scale-x-100 group/parent">

			<a href="<?php echo $item['url'] ?>" class="flex items-center justify-center px-3 xs:px-0">
				<?php echo $item['title'] ?>
				<?php if ($item['children']) : ?>

					<button class="relative ml-2 w-5 h-5 before:w-2 before:absolute before:left-1/2 before:top-1/2 before:h-2 before:border-l-[2px] before:border-b-[2px] before:border-white before:-translate-x-1/2 before:-translate-y-3/4 before:-rotate-45 transition-transform group-hover/parent:rotate-180"></button>

				<?php endif; ?>
			</a>




			<?php if ($item['children']) : ?>

				<ul class="<?= $sub_class; ?> flex flex-col xs:absolute xs:top-full xs:left-0 bg-white  xs:bg-primary w-full xs:w-max max-w-[100vw] overflow-hidden h-0 xs:group-hover/parent:h-auto">

					<?php foreach ($item['children'] as $child) : ?>

						<li class="<?php echo $item_class; ?> relative xs:mx-2 before:absolute before:bottom-3 before:left-0 before:w-full before:h-[2px] before:bg-white before:scale-x-0 before:origin-center before:transition-transform before:duration-100 hover:before:scale-x-100 focus-within:before:scale-x-100">
							<a href="<?php echo $child['url'] ?>" class="block text-sm text-center xs:text-left uppercase text-primary xs:text-white font-normal py-3 px-3 ">
								<?php echo $child['title'] ?>
							</a>
						</li>

					<?php endforeach; ?>
				</ul>

			<?php endif ?>

		</li>
	<?php endforeach; ?>
</ul>