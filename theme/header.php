<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package zakotv
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page">
	<a href="#primary" class="sr-only focus:not-sr-only"><?php esc_html_e('Skip to content', 'zakotv'); ?></a>

	<header id="masthead"
			class="sticky top-0 z-40 w-full backdrop-blur flex-none transition-colors duration-500 lg:z-50 lg:border-b lg:border-slate-900/10 dark:border-slate-50/[0.06] bg-white/95 supports-backdrop-blur:bg-white/60 dark:bg-transparent">
		<div class="max-w-8xl mx-auto">
			<div class="py-4 border-b border-slate-900/10 lg:px-8 lg:border-0 dark:border-slate-300/10 mx-4 lg:mx-0">
				<div class="relative flex items-center">
					<?php
					the_custom_logo();
					if (is_front_page() && is_home()) :
						?>
						<h1><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
						</h1>
					<?php
					else :
						?>
						<p><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
					<?php
					endif;
					$omskdev_description = get_bloginfo('description', 'display');
					if ($omskdev_description || is_customize_preview()) :
						?>
						<p><?php echo $omskdev_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
							?></p>
					<?php endif; ?>

					<nav id="site-navigation">
						<button aria-controls="primary-menu" aria-expanded="false"
								class="sr-only"><?php esc_html_e('Primary Menu', 'zakotv'); ?></button>
						<?php
						wp_nav_menu(
								array(
										'theme_location' => 'menu-1',
										'menu_id' => 'primary-menu',
								)
						);
						?>
					</nav><!-- #site-navigation -->
				</div>
			</div>
		</div>
	</header><!-- #masthead -->
