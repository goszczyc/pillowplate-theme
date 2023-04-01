<?php
// Register Custom Post Type
function wp_register_doc_post_type() {

	$labels = array(
		'name'                  => _x( 'Dokumenty', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Dokument', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Dokumenty', 'text_domain' ),
		'name_admin_bar'        => __( 'Dokumenty', 'text_domain' ),
		'archives'              => __( 'Archiwum dokumentów', 'text_domain' ),
		'attributes'            => __( 'Atrybuty dokumentów', 'text_domain' ),
		'parent_item_colon'     => __( 'Rodzic dokumentu:', 'text_domain' ),
		'all_items'             => __( 'Wszystkie dokumenty', 'text_domain' ),
		'add_new_item'          => __( 'Dodaj nowy dokument', 'text_domain' ),
		'add_new'               => __( 'Dodaj nowy', 'text_domain' ),
		'new_item'              => __( 'Dowy dokument', 'text_domain' ),
		'edit_item'             => __( 'Edytuj dokument', 'text_domain' ),
		'update_item'           => __( 'Zaktualizuj dokument', 'text_domain' ),
		'view_item'             => __( 'Zobacz dokument', 'text_domain' ),
		'view_items'            => __( 'Zobacz dokumenty', 'text_domain' ),
		'search_items'          => __( 'Szukaj dokumentów', 'text_domain' ),
		'not_found'             => __( 'Nie znaleziono', 'text_domain' ),
		'not_found_in_trash'    => __( 'Nie znaleziono w koszu', 'text_domain' ),
		'featured_image'        => __( 'Obrazek wyróżniający', 'text_domain' ),
		'set_featured_image'    => __( 'Ustaw obrazek wyróżniający', 'text_domain' ),
		'remove_featured_image' => __( 'Usuń obrazek wyróżniający', 'text_domain' ),
		'use_featured_image'    => __( 'Użyj jako obrazek wyróżniający', 'text_domain' ),
		'insert_into_item'      => __( 'Wstaw do dokumentu', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Wyślij do tego dokumentu', 'text_domain' ),
		'items_list'            => __( 'Lista dokumentu', 'text_domain' ),
		'items_list_navigation' => __( 'Menu listy dokumentów', 'text_domain' ),
		'filter_items_list'     => __( 'Filtruj listę dokumentów', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Dokument', 'text_domain' ),
		'description'           => __( 'Dokumenty', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'taxonomies'            => array( 'document_category' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
    'menu_icon' => 'dashicons-media-document',
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
    'rewrite' => array('slug' => 'dokumenty')
	);
	register_post_type( 'documents', $args );

}
add_action( 'init', 'wp_register_doc_post_type', 0 );