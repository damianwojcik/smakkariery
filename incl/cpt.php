<?php

	// Register Pracownicy Post Type
	function sk_pracownicy_post_type() {

		$labels = array(
			'name'                  => _x( 'Pracownicy', 'Post Type General Name', 'text_domain' ),
			'singular_name'         => _x( 'Pracownicy', 'Post Type Singular Name', 'text_domain' ),
			'menu_name'             => __( 'Pracownicy', 'text_domain' ),
			'name_admin_bar'        => __( 'Pracownicy', 'text_domain' ),
			'archives'              => __( 'Wszyscy Pracownicy', 'text_domain' ),
			'parent_item_colon'     => __( 'Rodzic:', 'text_domain' ),
			'all_items'             => __( 'Wszyscy Pracownicy', 'text_domain' ),
			'add_new_item'          => __( 'Dodaj nowego pracownika', 'text_domain' ),
			'add_new'               => __( 'Dodaj nowego pracownika', 'text_domain' ),
			'new_item'              => __( 'Dodaj nowego pracownika', 'text_domain' ),
			'edit_item'             => __( 'Edytuj pracownika', 'text_domain' ),
			'update_item'           => __( 'Aktualizuj pracownika', 'text_domain' ),
			'view_item'             => __( 'Zobacz szczegóły', 'text_domain' ),
			'search_items'          => __( 'Szukaj pracownika', 'text_domain' ),
			'not_found'             => __( 'Nie znaleziono', 'text_domain' ),
			'not_found_in_trash'    => __( 'Nie znaleziono w koszu', 'text_domain' ),
			'featured_image'        => __( 'Wyróżniony obrazek', 'text_domain' ),
			'set_featured_image'    => __( 'Ustaw zdjęcie pracownika', 'text_domain' ),
			'remove_featured_image' => __( 'Usuń zdjęcie pracownika', 'text_domain' ),
			'use_featured_image'    => __( 'Użyj jako zdjęcie pracownika', 'text_domain' ),
			'insert_into_item'      => __( 'Wstaw do wpisu', 'text_domain' ),
			'uploaded_to_this_item' => __( 'Wgrano do wpisu', 'text_domain' ),
			'items_list'            => __( 'Lista pracowników', 'text_domain' ),
			'items_list_navigation' => __( 'Lista pracowników', 'text_domain' ),
			'filter_items_list'     => __( 'Filtruj pracowników', 'text_domain' ),
		);
		
		$args = array(
			'label'                 => __( 'Pracownicy', 'text_domain' ),
			'description'           => __( 'Typ wpisu Pracownicy', 'text_domain' ),
			'labels'                => $labels,
			'supports'              => array( 'title' ),
			'taxonomies'            => array( 'pracownicy_tax' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 20,
			'menu_icon'             => 'dashicons-groups',
			'show_in_admin_bar'     => false,
			'show_in_nav_menus'     => false,
			'can_export'            => false,
			'has_archive'           => false,		
			'exclude_from_search'   => true,
			'publicly_queryable'    => true,
			'capability_type'       => 'post',
		);
		register_post_type( 'pracownicy', $args );

		$labels = array(
			'name'                       => _x( 'Programy', 'Taxonomy General Name', 'text_domain' ),
			'singular_name'              => _x( 'Program', 'Taxonomy Singular Name', 'text_domain' ),
			'menu_name'                  => __( 'Programy', 'text_domain' ),
			'all_items'                  => __( 'Wszystkie programy', 'text_domain' ),
			'parent_item'                => __( '', 'text_domain' ),
			'parent_item_colon'          => __( '', 'text_domain' ),
			'new_item_name'              => __( 'Nazwa nowego programu', 'text_domain' ),
			'add_new_item'               => __( 'Dodaj nowy program', 'text_domain' ),
			'edit_item'                  => __( 'Edytuj program', 'text_domain' ),
			'update_item'                => __( 'Aktualizuj program', 'text_domain' ),
			'view_item'                  => __( 'Zobacz program', 'text_domain' ),
			'separate_items_with_commas' => __( 'Oddziel programy przecinkiem', 'text_domain' ),
			'add_or_remove_items'        => __( 'Dodaj lub usuń programy', 'text_domain' ),
			'choose_from_most_used'      => __( 'Wybierz spośród najczęściej używanych', 'text_domain' ),
			'popular_items'              => __( 'Popularne programy', 'text_domain' ),
			'search_items'               => __( 'Szukaj programu', 'text_domain' ),
			'not_found'                  => __( 'Nie znaleziono', 'text_domain' ),
			'no_terms'                   => __( 'Brak kategorii', 'text_domain' ),
			'items_list'                 => __( 'Lista programów', 'text_domain' ),
			'items_list_navigation'      => __( 'Lista programów', 'text_domain' ),
		);
		$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => false,
			'show_tagcloud'              => false,
		);
		register_taxonomy( 'pracownicy_tax', array( 'pracownicy' ), $args );

	}
	add_action( 'init', 'sk_pracownicy_post_type', 0 );
	

	// Register Custom Post Type
	function gallery_post_type() {

		$labels = array(
			'name'                  => _x( 'Galerie', 'Post Type General Name', 'text_domain' ),
			'singular_name'         => _x( 'Galeria', 'Post Type Singular Name', 'text_domain' ),
			'menu_name'             => __( 'Galerie', 'text_domain' ),
			'name_admin_bar'        => __( 'Galerie', 'text_domain' ),
			'archives'              => __( 'Archiwum Galerii', 'text_domain' ),
			'parent_item_colon'     => __( 'Rodzic Galerii:', 'text_domain' ),
			'all_items'             => __( 'Wszystkie Galerie', 'text_domain' ),
			'add_new_item'          => __( 'Dodaj nową Galerie', 'text_domain' ),
			'add_new'               => __( 'Dodaj nową', 'text_domain' ),
			'new_item'              => __( 'Nowa Galeria', 'text_domain' ),
			'edit_item'             => __( 'Edytuj Galerie', 'text_domain' ),
			'update_item'           => __( 'Zaaktualizuj Galerie', 'text_domain' ),
			'view_item'             => __( 'Zobacz Galerie', 'text_domain' ),
			'search_items'          => __( 'Szukaj Galerii', 'text_domain' ),
			'not_found'             => __( 'Nie znaleziono', 'text_domain' ),
			'not_found_in_trash'    => __( 'Nie znaleziono w koszu', 'text_domain' ),
			'featured_image'        => __( 'Wyróżniony obrazek', 'text_domain' ),
			'set_featured_image'    => __( 'Ustaw wyróżniony obrazek', 'text_domain' ),
			'remove_featured_image' => __( 'Usuń wyróżniony obrazek', 'text_domain' ),
			'use_featured_image'    => __( 'Użyj jako wyróżniony obrazek', 'text_domain' ),
			'insert_into_item'      => __( 'Wstaw do Galerii', 'text_domain' ),
			'uploaded_to_this_item' => __( 'Wgrano do Galerii', 'text_domain' ),
			'items_list'            => __( 'Lista Galerii', 'text_domain' ),
			'items_list_navigation' => __( 'Lista Galerii', 'text_domain' ),
			'filter_items_list'     => __( 'Filtruj Galerie', 'text_domain' ),
		);
		$args = array(
			'label'                 => __( 'Galeria', 'text_domain' ),
			'description'           => __( 'Post type used for site galleries', 'text_domain' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'thumbnail', 'post-formats', ),
			'taxonomies'            => array( 'galleries' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 15,
			'menu_icon'             => 'dashicons-format-gallery',
			'show_in_admin_bar'     => false,
			'show_in_nav_menus'     => false,
			'can_export'            => true,
			'has_archive'           => true,		
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'post',
		);
		register_post_type( 'gallery', $args );

	}
	add_action( 'init', 'gallery_post_type', 0 );


	// Register Custom Taxonomy
	function gallery_custom_taxonomy() {

		$labels = array(
			'name'                       => _x( 'Programy', 'Taxonomy General Name', 'text_domain' ),
			'singular_name'              => _x( 'Program', 'Taxonomy Singular Name', 'text_domain' ),
			'menu_name'                  => __( 'Programy', 'text_domain' ),
			'all_items'                  => __( 'Wszystkie programy', 'text_domain' ),
			'parent_item'                => __( 'Nadrzędny program', 'text_domain' ),
			'parent_item_colon'          => __( 'Nadrzędny program:', 'text_domain' ),
			'new_item_name'              => __( 'Nazwa nowego programu', 'text_domain' ),
			'add_new_item'               => __( 'Dodaj nowy program', 'text_domain' ),
			'edit_item'                  => __( 'Edytuj program', 'text_domain' ),
			'update_item'                => __( 'Aktualizuj program', 'text_domain' ),
			'view_item'                  => __( 'Zobacz program', 'text_domain' ),
			'separate_items_with_commas' => __( 'Oddziel elementy przecinkiem', 'text_domain' ),
			'add_or_remove_items'        => __( 'Dodaj lub usuń program', 'text_domain' ),
			'choose_from_most_used'      => __( 'Wybierz spośród najczęściej używanych', 'text_domain' ),
			'popular_items'              => __( 'Popularne programy', 'text_domain' ),
			'search_items'               => __( 'Wyszukaj programy', 'text_domain' ),
			'not_found'                  => __( 'Nie znaleziono', 'text_domain' ),
			'no_terms'                   => __( 'Brak kategorii', 'text_domain' ),
			'items_list'                 => __( 'Lista kategorii', 'text_domain' ),
			'items_list_navigation'      => __( 'Lista Kategorii', 'text_domain' ),
		);
		$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => false,
			'show_in_nav_menus'          => false,
			'show_tagcloud'              => false,
		);
		register_taxonomy( 'galleries', array( 'gallery' ), $args );

	}
	add_action( 'init', 'gallery_custom_taxonomy', 0 );