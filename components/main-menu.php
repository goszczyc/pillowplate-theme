<?php
$args = wp_parse_args($args, array(
  'menu' => null,
  'class' => null
));
$menu = wp_get_menu_array($args['menu']);
$current = ($item['current']) ? 'bg-primary text-white' : '';
?>
<ul class="<?php echo $args['class'] ?> flex flex-col items-center text-center w-full lg:w-auto lg:flex-row">
  <?php foreach ($menu['menus'] as $item) : ?>
    <li class="<?= $current; ?> lg:flex group/menu relative px-5 lg:hover:bg-primary transition-colors">
      <a href="<?php echo $item['url'] ?>" class="block py-3 px-2 lg:group-hover/menu:text-white transition-colors">
        <?php echo $item['title'] ?>
      </a>
      <?php if ($item['children']) : ?>
        <button class="show-submenu absolute max-lg:right-1 max-lg:top-6 w-4 h-12 max-lg:-translate-y-1/2 before:absolute before:top-1/2 before:left-1/2 before:w-3 before:h-3 before:border-solid before:border-b-[2px] before:border-l-[2px] before:border-black before:-translate-x-1/2 before:-translate-y-3/4 before:-rotate-45 before:transition-colors lg:group-hover/menu:before:border-white lg:relative"></button>
        <ul class="flex flex-col h-0 lg:group-hover/menu:h-auto overflow-hidden lg:flex lg:absolute lg:top-full lg:left-1/2 lg:bg-dark lg:text-white lg:-translate-x-1/2">

          <?php foreach ($item['children'] as $child) : ?>

            <li>
              <a href="<?php echo $child['url'] ?>" class="block text-sm py-2 px-4 min-w-max w-full lg:px-12 lg:py-4 lg:hover:bg-primary lg:hover:text-white transition-colors">
                <?php echo $child['title'] ?>
              </a>
            </li> 

          <?php endforeach; ?>

        </ul>
      <?php endif ?>
    </li>
  <?php endforeach; ?>
</ul>