<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ecommerce
 */

?>
	<p class="text-center mb-0">
	<button class="button-footer text-secondary"  type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
		Más Información
	</button>
	</p>
	<div class="collapse m-0 p-0 container-fluid background-footer-interior" id="collapseExample">
		<div class="card card-body">
			<div class="container">
				<div class="row footer-interior">

						<div class="col-lg-2 col-md-6 col-12">
							<?php if(is_active_sidebar('nav_footer_interior_uno')) :
									dynamic_sidebar('nav_footer_interior_uno'); endif;?>
						</div>
						<div class="col-lg-2 col-md-6 col-12">
							<?php if(is_active_sidebar('nav_footer_interior_dos')) :
									dynamic_sidebar('nav_footer_interior_dos'); endif;?>
						</div>
						<div class="col-lg-2 col-md-6 col-12">
							<?php if(is_active_sidebar('nav_footer_interior_tres')) :
									dynamic_sidebar('nav_footer_interior_tres'); endif;?>
						</div>
						<div class="col-lg-2 col-md-6 col-12">
							<?php if(is_active_sidebar('nav_footer_interior_cuatro')) :
									dynamic_sidebar('nav_footer_interior_cuatro'); endif;?>
						</div>
						<div class="col-lg-2 col-md-6 col-12">
							<?php if(is_active_sidebar('nav_footer_interior_cinco')) :
									dynamic_sidebar('nav_footer_interior_cinco'); endif;?>
						</div>
						<div class="col-lg-2 col-md-6 col-12">
							<?php if(is_active_sidebar('nav_footer_interior_seis')) :
									dynamic_sidebar('nav_footer_interior_seis'); endif;?>
						</div>

				</div>
			</div>
		</div>
	</div>






	<footer id="colophon" class="site-footer footer-background p-3 container-fluid">
		<div class="ul-footer-principal container">
			<?php if(is_active_sidebar('nav_footer_uno')) :
			dynamic_sidebar('nav_footer_uno'); endif;?>
			<div class="mt-1 text-secondary info-footer"><?php the_field('copyright');?></div>
			<div class="mt-1 text-secondary info-footer"><?php the_field('direccion');?></div>
		</div>
		
		<!-- <div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'ecommerce' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'ecommerce' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'ecommerce' ), 'ecommerce', '<a href="http://underscores.me/">este.alvarez</a>' );
				?>
		</div> -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
