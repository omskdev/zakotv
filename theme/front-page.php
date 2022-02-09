<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package zakotv
 */

get_header();
?>

	<!-- Start only Front Page -->
<?php if ( is_front_page() ) : ?>

	<div class="bg-fixed bg-cover bg-center min-h-screen min-w-full z-0 top-0 left-0"
		 style="background-image: url(https://russia.thatsliving.com/wp-content/uploads/2021/01/tk-13_6.jpg)">
	</div>
<?php endif; ?>
	<!-- End Front Page -->

	<main id="primary">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
