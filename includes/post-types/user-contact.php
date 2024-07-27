<?php
if ( ! function_exists('unknown_user_contact_fn') ) {

    // Register Custom Post Type
    function unknown_user_contact_fn() {
    
        $labels = array(
            'name'                  => _x( 'Contactos solicitados', 'Post Type General Name', 'coltman-get-contact' ),
            'singular_name'         => _x( 'Conatcto solicitado', 'Post Type Singular Name', 'coltman-get-contact' ),
            'menu_name'             => __( 'Contacto solicitado', 'coltman-get-contact' ),
            'name_admin_bar'        => __( 'Contacto solicitado', 'coltman-get-contact' ),
            'archives'              => __( 'Listado de contactos solicitados', 'coltman-get-contact' ),
            'attributes'            => __( 'Atributos de contactos solicitados', 'coltman-get-contact' ),
            'parent_item_colon'     => __( 'Listado superior:', 'coltman-get-contact' ),
            'all_items'             => __( 'Todos los contactos', 'coltman-get-contact' ),
            'add_new_item'          => __( 'Añadir nuevo contacto solicitado', 'coltman-get-contact' ),
            'add_new'               => __( 'Añadir nuevo', 'coltman-get-contact' ),
            'new_item'              => __( 'Nuevo contacto solicitado', 'coltman-get-contact' ),
            'edit_item'             => __( 'Editar contacto solicitado', 'coltman-get-contact' ),
            'update_item'           => __( 'Actualizar contacto solicitado', 'coltman-get-contact' ),
            'view_item'             => __( 'Ver contacto solicitado', 'coltman-get-contact' ),
            'view_items'            => __( 'Ver contactos solicitados', 'coltman-get-contact' ),
            'search_items'          => __( 'Buscar contacto', 'coltman-get-contact' ),
            'not_found'             => __( 'No encontrado', 'coltman-get-contact' ),
            'not_found_in_trash'    => __( 'No hay en papelera', 'coltman-get-contact' ),
            'featured_image'        => __( 'Imagen destacada', 'coltman-get-contact' ),
            'set_featured_image'    => __( 'Conf. imagen destacada', 'coltman-get-contact' ),
            'remove_featured_image' => __( 'Remover imagen destacada', 'coltman-get-contact' ),
            'use_featured_image'    => __( 'Usar como imagen destacada', 'coltman-get-contact' ),
            'insert_into_item'      => __( 'Insertar en el contacto', 'coltman-get-contact' ),
            'uploaded_to_this_item' => __( 'Actualizar este contacto', 'coltman-get-contact' ),
            'items_list'            => __( 'Lista de contactos', 'coltman-get-contact' ),
            'items_list_navigation' => __( 'Navegar por contactos', 'coltman-get-contact' ),
            'filter_items_list'     => __( 'Filtrado de contactos', 'coltman-get-contact' ),
        );
        $args = array(
            'label'                 => __( 'Conatcto solicitado', 'coltman-get-contact' ),
            'description'           => __( 'Sistema de contacto guardados, solicitados por nuestros visitantes', 'coltman-get-contact' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor',  'custom-fields' ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'show_in_admin_bar'     => true,
            'show_in_rest'          => true,
            'menu_icon'             => COLTMAN_GET_CONTACT_URL. '/assets/image/iconmonstr-email-9.svg',
            'show_in_nav_menus'     => false,
            'can_export'            => true,
            'has_archive'           => false,
            'exclude_from_search'   => true,
            'publicly_queryable'    => true,
            'rewrite'               => false,
            'capability_type'       => 'page',
        );
        register_post_type( 'coltman_contact_user', $args );
    
    }
    add_action( 'init', 'unknown_user_contact_fn', 0 );
    
    }