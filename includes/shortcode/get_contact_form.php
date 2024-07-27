<?php

if (!function_exists('coltman_get_contact_fomr_fn')) {

    function coltman_get_contact_fomr_fn($atts) {
        $atts = shortcode_atts([
            'name_title' => 'Nombre',
            'phone_title' => 'Teléfono',
            'email_title' => 'Correo electrónico',
            'message_title' => 'Mensaje',
            'title' => 'Request a Quote',
            'submit' => 'Enviar',
            'message' => 'Gracias por contactar con nosostros. En breve nos pondremos en contacto contigo',
            'sub_content'=> 'Enviado correctamente',
            'sub_message' => 'lorem ipsum',
        ], $atts);
        ob_start();
        set_query_var('atts', $atts);
        echo coltman_plugin_template_part('form/form', 'contact');
        return ob_get_clean();
    }
    add_shortcode('coltman_get_contact_form', 'coltman_get_contact_fomr_fn');
}