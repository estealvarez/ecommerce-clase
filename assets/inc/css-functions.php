<?php
function css_ecommerce(){
    //Registrar estilos
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css', 'all');
    wp_register_style('estilos', get_template_directory_uri() . '/assets/librerias/css/estilos.css', 'all');
    wp_register_style('iconos', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css', 'all'); //Iconos Bootstrap
    
    
    //Encolar estilos
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('estilos');
    wp_enqueue_style('iconos');
}

add_action('wp_enqueue_scripts', 'css_ecommerce');