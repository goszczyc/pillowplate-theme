<?php

/*************** MENU ***************/
add_action('init', 'register_menu');
function register_menu()
{
  register_nav_menus(array(
    'main-nav' => esc_html__('Menu Główne', 'bth-theme'),
    'documents-nav' => esc_html__('Menu Dokumentów', 'bth-theme'),
    'footer-services' => esc_html__('Zakres usług', 'bth-theme'),
    'footer-other' => esc_html__('Pozostałe usługi', 'bth-theme'),
    'footer-products' => esc_html__('Pozostałe produkty', 'bth-theme'),
    'footer-links' => esc_html__('Przydatne linki', 'bth-theme'),
  ));
}
