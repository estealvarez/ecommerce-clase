<?php
/*assets scripts*/

function ecommerce_script()
{
    // nos aseguramos que no estamos en el area de administracion
    if (!is_admin()) {
        // registramos nuestro script con el nombre "mi-script" y decimos que es dependiente de jQuery para que wordpress se asegure de incluir jQuery antes de este archivo
        // en adición a las dependencias podemos indicar que este archivo debe ser insertado en el footer del sitio, en el lugar donde se encuente la función wp_footer

    //Registrar Js
    wp_register_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js', true);
    wp_register_script('mi-js', get_bloginfo('template_directory') . '/assets/librerias/js/mis-scripts.js', array('jquery'), '1', true);
    
    //Encolar Js
    wp_enqueue_script('mi-js', array('jquery'), true);
    wp_enqueue_script('bootstrap-js');

    }
}
add_action("wp_enqueue_scripts", "ecommerce_script", 1); //1 representa prioridad, mas alto el número = mas prioridad.