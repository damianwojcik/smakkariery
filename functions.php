<?php

	// vars
	define("THEME_URL", get_stylesheet_directory_uri());
	define("TEMPLATE_PATH", get_stylesheet_directory() .'/');
	define("SITE_URL", site_url());


	//include php files
	include("incl/general.php");

	include("incl/cpt.php");

	//include("incl/cpt2.php");

	include("incl/acf.php");

	include("incl/widgets.php");

	include("incl/custom-functions.php");

	include("incl/helpers.php");


	

	// function query_by_dates($query) {
		
	//     global $wp_query;

	//     if( isset( $_GET['archive_year'] ) ){
	//         $custom_archive_date = $_GET['archive_year'];
	//     }

	//     if ( $custom_archive_date ){
	//         $query->set( array('meta_key' => $custom_archive_date, 'meta_value' => date('o-m-d'), 'meta_compare' => '>=' ));
	//         return;
	//     }

	// }

	// add_action( 'pre_get_posts', 'query_by_dates' );