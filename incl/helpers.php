<?php

	function get_random_employees_by_tax($taxonomy_id){

		$args = array(
			'posts_per_page'	=> 4,
			'orderby'			=>	'rand',
			'post_type'			=> 'pracownicy',
			'tax_query'			=> array( 
		        array( 
		            'taxonomy' => 'pracownicy_tax',
		            'field' => 'id',
		            'terms' => $taxonomy_id
		        )
		    )
		);

		$posts_array = get_posts( $args );

		return $posts_array;

	}

	function year_suffix($exp_years){

		//proper Polish suffix according to years of experience
		if ( $exp_years == 1 ) {
			$suffix = 'rok';
		} elseif ( $exp_years == 2 OR  $exp_years == 3 OR $exp_years == 4) {
			$suffix = 'lata';
		} else {
			$suffix = 'lat';
		}
		
		return $suffix;

	}

?>