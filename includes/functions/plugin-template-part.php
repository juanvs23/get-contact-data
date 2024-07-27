<?php

if (!function_exists('coltman_plugin_template_part')) {
    function coltman_plugin_template_part($slug, $name = null){
        do_action("coltman_plugin_template_part_{$slug}", $slug, $name);

        $templates = array();
        if (isset($name))
            $templates[] = "{$slug}-{$name}.php";
      
        $templates[] = "{$slug}.php";
      
        coltman_plugin_template_path($templates, true, false);
    }

    function coltman_plugin_template_path($templates, $load = false, $require_once = true) {
        $located = '';
        
        foreach ($templates as $template) {
            if ( !$template ) continue;


            if(file_exists(get_stylesheet_directory() ."/coltman-get-contact/templates/{$template}")){
                $located = get_stylesheet_directory() ."/coltman-get-contact/templates/{$template}";
                break;
            }else  { 
                $located = COLTMAN_GET_CONTACT_TEMPLATE . "/{$template}"; 
                break; 
            } 
            
        }
        if ( $load && '' != $located )
        load_template( $located, $require_once );

        return $located;
    }

}