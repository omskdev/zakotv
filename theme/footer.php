<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package zakotv
 */

?>

	<footer id="colophon">
		<div>
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'zakotv' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'zakotv' ), 'WordPress' );
				?>
			</a>
			<span> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'zakotv' ), 'zakotv', '<a href="https://omsk.dev">OmskDev</a>' );
				?>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
