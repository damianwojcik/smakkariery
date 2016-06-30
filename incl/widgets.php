<?php

	if (function_exists( 'register_sidebar' )) {

		register_sidebar(array(
			'name' => 'Menu główne',
			'id'  => 'main_menu',
			'before_title' => '',
			'after_title' => '',
			'before_widget' => '',
			'after_widget'  => '',
		));

		register_sidebar(array(
			'name' => 'Stopka lewy box',
			'id'  => 'footer_left',
			'before_title' => '<h2>',
			'after_title' => '</h2>',
			'before_widget' => '<nav>',
			'after_widget'  => '</nav>',
		));

		register_sidebar(array(
			'name' => 'Stopka środkowy box',
			'id'  => 'footer_middle',
			'before_title' => '<h2>',
			'after_title' => '</h2>',
			'before_widget' => '<nav>',
			'after_widget'  => '</nav>',
		));

		register_sidebar(array(
			'name' => 'Stopka prawy box',
			'id'  => 'footer_right',
			'before_title' => '<h2>',
			'after_title' => '</h2>',
			'before_widget' => '<nav>',
			'after_widget'  => '</nav>',
		));

	}

?>
