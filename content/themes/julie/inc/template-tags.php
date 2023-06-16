
<?php

function pageArchive($type)
{
    $creationQuery = new WP_Query(
        [
            // on va chercher des articles
            'post_type' => 'creation',
            'tax_query' => $type
        ]
    );

    if ($creationQuery->have_posts()) : while ($creationQuery->have_posts()) : $creationQuery->the_post();

            get_template_part('template-parts/creation/card');


        endwhile;
    endif;
}
