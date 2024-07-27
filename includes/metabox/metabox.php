<?php

if (class_exists('Coltman_Create_Metabox')) {
    class Coltman_Add_Contact_Fields  extends Coltman_Create_Metabox{
       
        private array $config = [
            'title' => 'Información del contacto',
            'description' => 'Estos son los datos ',
            'prefix' => 'coltman_get_contact_',
            'domain' => 'coltman_get_contact',
            'class_name' => 'coltman_get_contact',
            'context' => 'normal',
            'priority' => 'high',
            'cpt' => 'coltman_contact_user',
            'fields' => [
                [
                    'label' => 'Nombre del contacto',
                    'id' => 'contact-name',
                    'type' => 'text',
                    'default' => ''
                ],
                [
                    'label' => 'Correo del contacto',
                    'id' => 'contact-email',
                    'type' => 'text',
                    'default' => ''
                ],
                [
                    'label' => 'telefono del contacto',
                    'id' => 'contact-phone',
                    'type' => 'text',
                    'default' => ''
                ],
                [
                    'label' => 'Mensaje del contacto',
                    'id' => 'contact-message',
                    'type' => 'textarea',
                    'default' => ''
                ]
            ]
        ];

        public function __construct() {
            parent::__construct( $this->config );
        }
    }
}
if (class_exists('Coltman_Add_Contact_Fields')) {
    new Coltman_Add_Contact_Fields();
}