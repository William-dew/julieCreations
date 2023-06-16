<?php

function julie_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menu('header', 'En tête du menu');
}

function julie_init()
{
    register_taxonomy('type_de_creation', 'creation', [
        'labels' => [
            'name'          => 'Création',
            'singular_name' => 'Création',
            'plural_name'   => 'Créations',
            'search_items'  => 'Rechercher des créations',
            'all_items'     => 'Toutes les créations',
            'edit_item'     => 'Editer la création',
            'update_item'   => 'Metre à jour la création',
            'add_new_item'   => 'Ajouter une nouvelle création',
            'new_item_name' => 'Ajouter la nouvelle création',
            'menu_name'     => 'Type De Création',
        ],
        'show_in_rest'      => true,
        'hierarchical'      => true,
        'show_admin_column' => true,
    ]);

    register_post_type(
        'creation',
        [
            'label'         => 'Créations',
            'public'        => true,
            'hiearchical'   => false,
            'menu_position' => 3,
            'menu_icon'     => 'dashicons-admin-customizer',
            'show_in_rest' => true,
            'supports'      => ['title', 'editor', 'thumbnail'],
            'has_archive'   => true,

        ]
    );
}

add_action('init', 'julie_init');
add_action('after_setup_theme', 'julie_setup');
