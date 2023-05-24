<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="header">
        <h1 class="title">Les Créations de Julie</h1>
        <?php get_template_part('template-parts/nav/nav'); ?>
    </header>
