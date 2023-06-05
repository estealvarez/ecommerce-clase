<?php
function example_theme_support() {
    remove_theme_support( 'widgets-block-editor' );
}
add_action( 'after_setup_theme', 'example_theme_support' );


/*widget assets*/
function zona_widget () {

//widget 1
register_sidebar(array(
    'name'=> 'Menu de Navegacion',
    'id'=> 'nav_uno', //ID y nombre al footer
    'before_widget'=> '<div id="%1$s" class="col-12 col-md-4">', //clase y contenedor
    'after_widget'=> '</div>', //cerrar contenedor
    'before_title'=> '<h5 class="titulo-menu-footer">', //contenedor para titulo
    'after_title'=> '</h5>'
));
//widget 1

//widget 2
register_sidebar(array(
    'name'=> 'Nav Footer Principal',
    'id'=> 'nav_footer_uno', //ID y nombre al footer
    'before_widget'=> '<div id="%1$s" class="col-12 col-md-4">', //clase y contenedor
    'after_widget'=> '</div>', //cerrar contenedor
    'before_title'=> '<h5 class="titulo-menu-footer">', //contenedor para titulo
    'after_title'=> '</h5>'
));
//widget 2

//widget 3
register_sidebar(array(
    'name'=> 'Nav 1 Footer Interior',
    'id'=> 'nav_footer_interior_uno', //ID y nombre al footer
    'before_widget'=> '<div id="%1$s" class="col-12 col-md-4">', //clase y contenedor
    'after_widget'=> '</div>', //cerrar contenedor
    'before_title'=> '<h5 class="titulo-menu-footer">', //contenedor para titulo
    'after_title'=> '</h5>'
));
//widget 3

//widget 4
register_sidebar(array(
    'name'=> 'Nav 2 Footer Interior',
    'id'=> 'nav_footer_interior_dos', //ID y nombre al footer
    'before_widget'=> '<div id="%1$s" class="col-12 col-md-4">', //clase y contenedor
    'after_widget'=> '</div>', //cerrar contenedor
    'before_title'=> '<h5 class="titulo-menu-footer">', //contenedor para titulo
    'after_title'=> '</h5>'
));
//widget 4

//widget 5
register_sidebar(array(
    'name'=> 'Nav 3 Footer Interior',
    'id'=> 'nav_footer_interior_tres', //ID y nombre al footer
    'before_widget'=> '<div id="%1$s" class="col-12 col-md-4">', //clase y contenedor
    'after_widget'=> '</div>', //cerrar contenedor
    'before_title'=> '<h5 class="titulo-menu-footer">', //contenedor para titulo
    'after_title'=> '</h5>'
));
//widget 5

//widget 6
register_sidebar(array(
    'name'=> 'Nav 4 Footer Interior',
    'id'=> 'nav_footer_interior_cuatro', //ID y nombre al footer
    'before_widget'=> '<div id="%1$s" class="col-12 col-md-4">', //clase y contenedor
    'after_widget'=> '</div>', //cerrar contenedor
    'before_title'=> '<h5 class="titulo-menu-footer">', //contenedor para titulo
    'after_title'=> '</h5>'
));
//widget 6

//widget 7
register_sidebar(array(
    'name'=> 'Nav 5 Footer Interior',
    'id'=> 'nav_footer_interior_cinco', //ID y nombre al footer
    'before_widget'=> '<div id="%1$s" class="col-12 col-md-4">', //clase y contenedor
    'after_widget'=> '</div>', //cerrar contenedor
    'before_title'=> '<h5 class="titulo-menu-footer">', //contenedor para titulo
    'after_title'=> '</h5>'
));
//widget 7

//widget 8
register_sidebar(array(
    'name'=> 'Nav 6 Footer Interior',
    'id'=> 'nav_footer_interior_seis', //ID y nombre al footer
    'before_widget'=> '<div id="%1$s" class="col-12 col-md-4">', //clase y contenedor
    'after_widget'=> '</div>', //cerrar contenedor
    'before_title'=> '<h5 class="titulo-menu-footer">', //contenedor para titulo
    'after_title'=> '</h5>'
));
//widget 8
}
add_action('widgets_init', 'zona_widget');