<?php
// Register Custom Taxonomy
function wp_register_doc_cat() {

	$labels = array(
		'name'                       => _x( 'Kategorie dokumentu', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Kategoria dokumentu', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Kategorie dokumentów', 'text_domain' ),
		'all_items'                  => __( 'Wszystkei Kategorie dokumentów', 'text_domain' ),
		'parent_item'                => __( 'Rodzic kategorii', 'text_domain' ),
		'parent_item_colon'          => __( 'Rodzic kategorii:', 'text_domain' ),
		'new_item_name'              => __( 'Dodaj kategorię', 'text_domain' ),
		'add_new_item'               => __( 'Dodaj nową kategorie', 'text_domain' ),
		'edit_item'                  => __( 'Eytuj kategorię', 'text_domain' ),
		'update_item'                => __( 'Zaktualizuj kategorię', 'text_domain' ),
		'view_item'                  => __( 'Zobacz kategorię', 'text_domain' ),
		'separate_items_with_commas' => __( 'Oddziel kategorie przecinkami', 'text_domain' ),
		'add_or_remove_items'        => __( 'Dodaj lub usuń kategorie', 'text_domain' ),
		'choose_from_most_used'      => __( 'Wybierz z najczęściej używancyh', 'text_domain' ),
		'popular_items'              => __( 'Popularne kategorie', 'text_domain' ),
		'search_items'               => __( 'Wyszukaj kategorie', 'text_domain' ),
		'not_found'                  => __( 'Nie znaleziono', 'text_domain' ),
		'no_terms'                   => __( 'Brak kategorii', 'text_domain' ),
		'items_list'                 => __( 'Lista kategorii', 'text_domain' ),
		'items_list_navigation'      => __( 'Menu listy kategorii', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'document_category', array( 'documents' ), $args );

}
add_action( 'init', 'wp_register_doc_cat', 0 );