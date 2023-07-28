<?php
function julie_script()
{

    wp_register_style('fonts_allison', 'https://fonts.googleapis.com/css2?family=Allison&display=swap');
    wp_register_style('fonts_georgian', 'https://fonts.googleapis.com/css2?family=Noto+Serif+Georgian&display=swap');
    wp_enqueue_style('icon','https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css');
    wp_enqueue_style('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css');
    
    wp_enqueue_style(
        'css',
        get_theme_file_uri('assets/css/style.css'),
        ['fonts_allison', 'fonts_georgian'],
        '20230728'
    );


    // <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    // wp_enqueue_script(
    //     'font-awesome',
    //     'https://kit.fontawesome.com/a0294eea98.js',
    //     [],
    //     '',
    //     '',
    //     true
    // );

//     wp_enqueue_script(
//         'main-js',
//         get_theme_file_uri('assets/js/index.js'),
//         [],
//         '20210112',
//         true
//     );
}

add_action('wp_enqueue_scripts', 'julie_script');
