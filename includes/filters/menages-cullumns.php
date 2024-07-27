<?php

if(!function_exists('coltman_menages_cullumns_fn')){

    function coltman_menages_cullumns_fn($column, $post_id){
        global $post;

        switch ($column) {
            case 'contact_email':
                echo get_post_meta($post_id, 'contact-email', true);
                break;
            case 'contact_phone':
                echo get_post_meta($post_id, 'contact-phone', true);
                break;
            case 'fecha':
                echo get_the_date('d/m/Y H:i', $post_id);
                break;
        }

        return $column;
    }

    add_action('manage_coltman_contact_user_posts_custom_column', 'coltman_menages_cullumns_fn', 10, 2);
}
