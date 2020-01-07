<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fjordstudio
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'fj_studio' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$fj_studio_description = get_bloginfo( 'description', 'display' );
			if ( $fj_studio_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $fj_studio_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>

			<p class="menu-open-button">
				<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
				  <g>
						<g>
							<path d="M501.333,96H10.667C4.779,96,0,100.779,0,106.667s4.779,10.667,10.667,10.667h490.667c5.888,0,10.667-4.779,10.667-10.667
								S507.221,96,501.333,96z"/>
						</g>
					</g>
					<g>
						<g>
							<path d="M501.333,245.333H10.667C4.779,245.333,0,250.112,0,256s4.779,10.667,10.667,10.667h490.667
								c5.888,0,10.667-4.779,10.667-10.667S507.221,245.333,501.333,245.333z"/>
						</g>
					</g>
					<g>
						<g>
							<path d="M501.333,394.667H10.667C4.779,394.667,0,399.445,0,405.333C0,411.221,4.779,416,10.667,416h490.667
								c5.888,0,10.667-4.779,10.667-10.667C512,399.445,507.221,394.667,501.333,394.667z"/>
						</g>
					</g>
				</svg>
				<!-- <i class="fas fa-bars"></i> -->
			</p>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php //esc_html_e( 'Primary Menu', 'fj_studio' ); ?></button> -->
			<div class="menu-wrapper">
				<p class="menu-close-button">
					<i class="fas fa-times"></i>
				</p>

				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-0',
					'menu_id'        => 'topmenu-1',
				) );
				?>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
				?>

			</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
