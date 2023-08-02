<?php
function julie_customize_register($wp_customize)
{
    // 1. on créé un panel
    // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_panel/

    $wp_customize->add_panel(
        'julie_theme',
        [
            'title' => 'Configuration du thème julie', // titre affiché dans le BO
            'priority' => 0, // ordre d'affichage dans le BO

        ]
    );

    // 2. on créé une section à propos
    // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_section/
    $wp_customize->add_section(
        'julie_theme_about_page',
        [
            'title' => 'Page à propos', // titre affiché dans le BO
            'panel' => 'julie_theme' // panel sur lequel on se rattache
        ]
    );

        // 2. on créé une section page d'accueil
    // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_section/
    $wp_customize->add_section(
        'julie_theme_home_page',
        [
            'title' => 'Page d\'accueil', // titre affiché dans le BO
            'panel' => 'julie_theme' // panel sur lequel on se rattache
        ]
    );

         // 2. on créé une section page 404
    // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_section/
    $wp_customize->add_section(
        'julie_theme_404_page',
        [
            'title' => 'Page 404', // titre affiché dans le BO
            'panel' => 'julie_theme' // panel sur lequel on se rattache
        ]
    );


    // 3. on créé un setting
    // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_setting/
    $wp_customize->add_setting(
        'julie_theme_about_page_text',
        [
            'type' => 'theme_mod' // définit la manière de récupérer le setting sur le front
        ]
    );

    // 3. on créé un setting pour page d'accueil
    // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_setting/
    $wp_customize->add_setting(
        'julie_theme_home_page_title',
        [
            'type' => 'theme_mod' // définit la manière de récupérer le setting sur le front
        ]
    );

     // 3. on créé un setting pour page 404
    // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_setting/
    $wp_customize->add_setting(
        'julie_theme_404_page_text',
        [
            'type' => 'theme_mod' // définit la manière de récupérer le setting sur le front
        ]
    );

    // 4. on créé un control a propos
    // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_control/
    $wp_customize->add_control(
        'julie_theme_about_page_text',
        [
            'type' => 'textarea', // type de champ
            'label' => 'Texte de la page',
            'section' => 'julie_theme_about_page'
        ]
    );



    // 4. on créé un control home page titre
    // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_control/
    $wp_customize->add_control(
        'julie_theme_home_page_title',
        [
            'type' => 'text', // type de champ
            'label' => 'Titre de la page d\'accueil',
            'section' => 'julie_theme_home_page'
        ]
    );

        // 4. on créé un control  page 404 texte
    // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_control/
    $wp_customize->add_control(
        'julie_theme_404_page_text',
        [
            'type' => 'textarea', // type de champ
            'label' => 'Texte de la page 404',
            'section' => 'julie_theme_404_page'
        ]
    );
}

// ajout de la capabiliy 'edit_theme_options' au role éditeur.

function add_edit_theme_options_to_editor_role()
{
    $role = get_role('editor');
    if (!$role->has_cap('edit_theme_options')) {
        $role->add_cap('edit_theme_options');
    }
}

add_action('admin_init', 'add_edit_theme_options_to_editor_role');
add_action('customize_register', 'julie_customize_register');
