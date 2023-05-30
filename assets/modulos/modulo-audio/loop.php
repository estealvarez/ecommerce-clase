<script>
function incrustar_hoja_estilos_comision() {
    var hoja_estilos_url = '<?php echo get_site_url() . '/wp-content/themes/spotify/assets/modulos/modulo-audio/modulo-audio.css';?>';
    var hoja_estilos = document.createElement('link');
    hoja_estilos.rel = 'stylesheet';
    hoja_estilos.href = hoja_estilos_url;
    document.head.appendChild(hoja_estilos);
}
incrustar_hoja_estilos_comision();
</script>
<!--Script que permite llamar a la hoja de estilos cuando se muestre el custom post type-->


<!--Sección 1-->
<section>
    <!--Custom Loop-->
    <?php $active = true;
            $temp = $wp_query;
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; //Número de paginas
            $post_per_page = 6; // -1 shows all posts Cantidad de post a mostrar
            $args = array(
                'post_type' => 'audio',
                'orderby' => 'DSC',
                'order' => 'ASC',//DSC descendente 
                'paged' => $paged,
                'posts_per_page' => $post_per_page,
                'tax_query' => array (
                    array(
                        'taxonomy' => 'categoria-audio',
                        'field' => 'slug',
                        'terms' => 'playlist'
                    ),
                ),
            );
            $wp_query = new WP_Query($args);
    if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
        
        <!--Contenido HTML-->
        
    <?php endwhile; endif; wp_reset_query(); $wp_query = $temp ?>
    <!--Custom Loop-->

</section>
<!--Sección 1-->