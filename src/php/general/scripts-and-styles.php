<?php
add_action('wp_enqueue_scripts', 'load_styles_and_scripts');

function load_styles_and_scripts()
{
  wp_enqueue_style('style-main', get_template_directory_uri() . '/dist/styles/theme.css', array(), '1.2.6', 'all');
  wp_enqueue_script('main', get_template_directory_uri() . '/dist/js/main.js', false, '1.0.5', true);
}
