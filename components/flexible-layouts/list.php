<?php if (have_rows('list')) : ?>

  <ul class="list-disc list-outside mb-8 pl-4">

    <?php while (have_rows('list')) : the_row(); ?>
      <?php if ($list_element = get_sub_field('list_element')) : ?>

        <li class="text-base leading-normal text-gray">
          <?= $list_element; ?>
        </li>

      <?php endif; ?>
    <?php endwhile; ?>

  </ul>

<?php endif; ?>