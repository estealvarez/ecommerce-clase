<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ecommerce
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="row">
        <div class="banner m-0 p-0">
                <?php ecommerce_post_thumbnail();?>
        </div>
    </div>
    
    <div class="container p-5">
        <?php include get_template_directory() . '/assets/modulos/modulo-product/loop-woocommerce.php';?>
    </div>
    

</article><!-- #post-<?php the_ID(); ?> -->
