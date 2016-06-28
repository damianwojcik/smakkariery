<?php


	//changes post title placeholder for cpt 'pracownicy'
	function sk_change_default_title( $title ){
	    $screen = get_current_screen();
	    if ( 'pracownicy' == $screen->post_type ){
	        $title = 'Imię i nazwisko';
	    }
	    return $title;
	}
	
	add_filter( 'enter_title_here', 'sk_change_default_title' );


	//checks if page is parent
	function sk_is_parent() {
	    global $post;

	    $children = get_pages('child_of='.$post->ID);
	    if( count( $children ) > 0 ) {
	        $parent = true;
	    }

	    return $parent;
	}

?>