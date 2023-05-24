<?php
function julie_script()
{

    wp_register_style('fonts_allison', 'https://fonts.googleapis.com/css2?family=Allison&display=swap');
    wp_register_style('fonts_georgian', 'https://fonts.googleapis.com/css2?family=Noto+Serif+Georgian&display=swap');

    wp_enqueue_style(
        'css',
        get_theme_file_uri('assets/css/style.css'),
        ['fonts_allison', 'fonts_georgian'],
        '20230523'
    );

    wp_enqueue_script(
        'font-awesome',
        'https://kit.fontawesome.com/a0294eea98.js',
        [],
        '',
        '',
        true
    );

//     wp_enqueue_script(
//         'main-js',
//         get_theme_file_uri('assets/js/index.js'),
//         [],
//         '20210112',
//         true
//     );
}

add_action('wp_enqueue_scripts', 'julie_script');
