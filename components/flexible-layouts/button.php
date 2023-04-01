<?php if ($link = get_sub_field('link')) : ?>

  <a href='<?= $link['url']; ?>' class='btn btn--primary btn--wide px-10 w-max'><?= $link['title']; ?>
  </a>

<?php endif; ?>