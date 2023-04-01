<?php
if( function_exists('acf_add_options_page') ) {
  $parent = acf_add_options_page(array(
    'page_title'  => 'Pola powtarzalne',
    'menu_title'  => 'Pola powtarzalne',
    'menu_slug'   => 'repeat',
    'capability'  => 'edit_posts',
    'redirect'    => true
  ));

  acf_add_options_sub_page(array(
    'page_title'  => 'Elementy powtarzalne',
    'menu_title'  => 'Elementy powtarzalne',
    'parent_slug'   => $parent['menu_slug'],
  ));
  acf_add_options_sub_page(array(
    'page_title'  => 'Sekcja z ikonami',
    'menu_title'  => 'Sekcja z ikonami',
    'parent_slug'   => $parent['menu_slug'],
  ));
  acf_add_options_sub_page(array(
    'page_title'  => 'Formularz kontakowy/ dane kontaktowe',
    'menu_title'  => 'Formularz kontakowy/ dane kontaktowe',
    'parent_slug'   => $parent['menu_slug'],
  ));
}