<?php
if (!function_exists('coltman_save_contact_data')) {
    
    function coltman_save_contact_data() {
        $nonce_code = 'get_contact_form';
        $nonce_verify =  wp_verify_nonce($_POST['nonce'], $nonce_code);
        /*
        contact-name
        contact-phone
        contact-email
        contact-message
        */

        if (!$nonce_verify) {
         return  wp_send_json([
                'error' => 'Error al enviar el formulario'
            ]);
        }
        foreach ($_POST as $key => $value) {
            if (empty($value)) {
                return wp_send_json([
                    'message' => 'Todos los campos son obligatorios',
                    'error' => 'Error al enviar el formulario'
                ]);
            }
        }

        $contact_name = sanitize_text_field($_POST['contact-name']);
        $contact_phone = sanitize_text_field($_POST['contact-phone']);
        $contact_email = sanitize_text_field($_POST['contact-email']);
        $contact_message = sanitize_text_field($_POST['contact-message']);

        $create_post = wp_insert_post([
            'post_title' => $contact_name,
            'post_type' => 'coltman_contact_user',
            'post_status' => 'publish',
        ]);

        if (!$create_post) {
            return wp_send_json([
                'error' => $create_post,
                'message' => 'Error al enviar el formulario'
            ]);
        }

        $save_name = update_post_meta($create_post, 'contact-name', $contact_name);
        $save_phone = update_post_meta($create_post, 'contact-phone', $contact_phone);
        $save_email = update_post_meta($create_post, 'contact-email', $contact_email);
        $save_message = update_post_meta($create_post, 'contact-message', $contact_message);

        

        wp_send_json([
            'success' => $create_post,
            'name_data' => $save_name,
            'email_data' => $save_email,
            'phone_data' => $save_phone,
            'message_data' => $save_message,
            'message' => 'Gracias por contactar con nosotros. En breve nos pondremos en contacto contigo',
        ]);

    }
    add_action('wp_ajax_get_contact_form', 'coltman_save_contact_data');
    add_action('wp_ajax_nopriv_get_contact_form', 'coltman_save_contact_data');
}