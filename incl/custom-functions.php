<?php

	function sk_change_default_title( $title ){
	    $screen = get_current_screen();
	    if ( 'pracownicy' == $screen->post_type ){
	        $title = 'Imię i nazwisko';
	    }
	    return $title;
	}
	
	add_filter( 'enter_title_here', 'sk_change_default_title' );

?>