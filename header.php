<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ecommerce
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
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'ecommerce' ); ?></a>

	<header id="masthead" class="site-header container-fluid  p-3 header-mercadolibre">
		<div class="container">
			<div class="row">
				<div class="site-branding col-md-2 text-md-end text-center mb-md-0 mb-4">
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
					$ecommerce_description = get_bloginfo( 'description', 'display' );
					if ( $ecommerce_description || is_customize_preview() ) :
						?>
						<p class="site-description"><?php echo $ecommerce_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
					<?php endif; ?>
				</div><!-- .site-branding -->
		

				<div class="col-md-6 ancho">
					<div class="search-bar mb-3">
						<?php if(is_active_sidebar('nav_uno')) :
						dynamic_sidebar('nav_uno'); endif; //llamar a los sidebar ?>
					</div>

					<div>
						<nav id="site-navigation" class="main-navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'ecommerce' ); ?></button>
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
								)
							);
							?>
						</nav><!-- #site-navigation -->
					</div>
				</div>

				<div class="col-md-4 d-md-block d-none">
					<?php 
					$image = get_field('img_disney');
					if( !empty( $image ) ): ?>
						<img src="<?php echo esc_url($image['url']);?>" class="img-disney" alt="<?php echo esc_attr($image['alt']); ?>" />
					<?php endif; ?>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->
