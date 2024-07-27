<?php

if(!function_exists('coltman_add_collumns_fn')){

    function coltman_add_collumns_fn($columns){
        unset($columns['author']);
        unset($columns['date']);
        unset($columns['comments']);
        
        $columns['contact_email'] = 'Correo Electrónico';
        $columns['contact_phone'] =  'Número de teléfono';
        $columns['fecha'] = 'Fecha de envío';
        

        return $columns;
    }

    add_filter('manage_coltman_contact_user_posts_columns', 'coltman_add_collumns_fn');
}