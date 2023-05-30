<?php

function audio_register() {

    $labels = array(
        'name' => _x('Audio', 'post type general name'),
        'singular_name' => _x('canciones', 'post type singular name'),
        'add_new' => _x('Agregar audio', 'slideshow_two item'),
        'add_new_item' => __('Agregar audio'),
        'edit_item' => __('Editar audio'),
        'new_item' => __('Nuevo audio'),
        'view_item' => __('Ver el audio'),
        'search_items' => __('Buscar audio'),
        'not_found' =>  __('No se encontraron'),
        'not_found_in_trash' => __('No se encontraron en la basura'),
        'parent_item_colon' => ''
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
		'exclude_from_search' => false,
        'capability_type' => 'post', //puede cambiar por 'page'
        'menu_icon'  => 'dashicons-format-audio',
        'hierarchical' => false,
        'menu_position' => null,
        'supports'=> array( 'title','thumbnail', 'excerpt', 'editor'), //Modificar tipo de contenido de post
        'rewrite' => array('slug' => 'audio', 'with_front' => false)
    ); 

    register_post_type( 'audio' , $args );
}
    add_action('init', 'audio_register');

    /*categorías personalizadas, taxonomía de categoría separada para que no se funcione con categorías
    de post*/
    function categoria_audio() {

        register_taxonomy(
            'categoria-audio',
            'audio',
            array(
                'label' => __( 'Categoria' ),
                'rewrite' => array( 'slug' => 'categoria-audio' ),
                'hierarchical' => true, //Herencia categorías y sub categorías
                // Allow automatic creation of taxonomy columns on associated post-types table?
                'show_admin_column'   => true,
                // Show in quick edit panel?
                'show_in_quick_edit'  => true,
            )
        );
    }
    add_action( 'init', 'categoria_audio' );
