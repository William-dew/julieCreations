<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="header">
        <?php if (is_front_page()) {
            echo ('<h1 class="title">' . get_theme_mod('julie_theme_home_page_title') . '</h1>');
        } ?>
        <?php get_template_part('template-parts/nav/nav'); ?>

    </header>