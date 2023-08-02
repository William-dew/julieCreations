<?php get_header(); ?>

<?php $s = get_search_query();
$the_query = new WP_Query([
    's' => $s,
    'post_type' => 'creation'
]);
?>
<h1 class="h1 text-center m-3">Résultat</h1>
<div class="container container-card">

    <?php if ($the_query->have_posts()) :  while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <div class="">
                <a href="<?php the_permalink(); ?>">
                    <div class="card text-bg-dark text-center border-light m-2" style="width: 16rem;height: 27rem;">
                        <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid card-img-top p-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php the_title(); ?></h5>
                            <p class="card-text mb-2">
                            <div>
                                <p class="m-1"><?php echo get_field('dimensions'); ?></p>
                                <p class="mb-1"><?php echo get_field('prix'); ?> €</p>
                            </div>
                            </p>
                        </div>
                    </div>
                </a>
            </div>
    <?php endwhile;
    endif; ?>
</div>
<?php get_footer(); ?>