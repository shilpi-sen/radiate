<?php
/**
 * template name:front page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package ThemeGrill
 * @subpackage Radiate
 * @since Radiate 1.0
 */

get_header(); ?>

	
	<div class="home-featured">
				<div class="home-featured-1">
				<?php dynamic_sidebar('home-featured');
				?>
				</div>
			</div>

<?php get_footer(); ?>