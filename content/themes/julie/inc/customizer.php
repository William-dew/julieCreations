<?php
function julie_customize_register($wp_customize){
    // 1. on créé un panel
    // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_panel/

    $wp_customize->add_panel(
        'julie_theme',
        [
            'title' => 'Configuration du thème julie', // titre affiché dans le BO
            'priority' => 0 // ordre d'affichage dans le BO
        ]
    );

    // 2. on créé une section
    // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_section/
    $wp_customize->add_section(
        'julie_theme_about_page',
        [
            'title' => 'Page à propos', // titre affiché dans le BO
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
        
    // 4. on créé un control
    // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_control/
    $wp_customize->add_control(
        'julie_theme_about_page_text',
        [
            'type' => 'textarea', // type de champ
            'label' => 'Texte de la page',
            'section' => 'julie_theme_about_page'
            ]
        );

    
        // 2. on créé une section
        // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_section/
        $wp_customize->add_section(
            'julie_theme_home_page',
            [
                'title' => 'Page d\'accueil', // titre affiché dans le BO
                'panel' => 'julie_theme' // panel sur lequel on se rattache
            ]
        );
    
        
        // 3. on créé un setting
        // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_setting/
        $wp_customize->add_setting(
            'julie_theme_home_page_title',
            [
                'type' => 'theme_mod' // définit la manière de récupérer le setting sur le front
                ]
            );
            
        // 4. on créé un control
        // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_control/
        $wp_customize->add_control(
            'julie_theme_home_page_title',
            [
                'type' => 'text', // type de champ
                'label' => 'Titre de la page d\'accueil',
                'section' => 'julie_theme_home_page'
                ]
            );
        
}
        

add_action('customize_register', 'julie_customize_register');
