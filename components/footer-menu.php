<?php
$args = wp_parse_args($args, array(
  'menu' => null,
  'class' => null
));
$menu = wp_get_menu_array($args['menu']);
$current_class = ($item['current'])? 'text-primary' : 'text-white';
?>
<ul class="<?php echo $args['class'] ?> list-none flex flex-col">

  <?php  foreach ($menu['menus'] as $item) : ?>

    <li class="<?= $current_class ?> text-sm mt-1 hover:text-primary focus-within:text-primary transition-colors">
      <a href="<?php echo $item['url'] ?>" class="<?php echo $item['class']; ?> block py-1">
        <?php echo $item['title'] ?>
      </a>
    </li>

  <?php endforeach; ?>

</ul>