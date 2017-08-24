<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage open_maine
 */

	get_header();

?>

<header>
	<div class="container">
		<a class="homebutton" href= "<?php echo get_site_url(); ?>" >Open Maine</a>
		<nav role="navigation">
			<?php

				// LOTS OF OPTIONS HERE: https://developer.wordpress.org/reference/functions/wp_nav_menu/
				wp_nav_menu(array(
					'menu_id' => 'header-nav',
					'container_class' => 'header-links',   // class of container (should you choose to use it)
					'menu' => __( 'Header Links' ),   				// nav name
					'theme_location' => 'header-links',       // where it's located in the theme

				));
			?>
		</nav>
		<div style="clear: both"></div>
	</div>
</header>

<div class="container" id="avb-body">
	<div class="row-fluid" id="avb-wrap" style="width:auto;">
		<?php
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();
					the_content();
				}
			}
		?>
	</div>
</div>

<?php get_footer(); ?>
