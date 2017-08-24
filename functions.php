<?php

	add_theme_support( 'menus' );

	// These are the possible menu positions:
	register_nav_menus(
		array(
			'footer-links' 	=> "Footer Links",
			'header-links' 	=> "Header Links"
		)
	);
