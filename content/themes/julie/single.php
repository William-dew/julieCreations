<?php get_header(); ?>
<div class="single">
    <img class="img-fluid mt-3" src="<?php the_post_thumbnail_url(); ?>" title="photo du tableau <?php the_title(); ?>" alt="photo du tableau <?php the_title(); ?>" class="m-1">
    <?php the_content();?>
</div>
<?php get_footer(); ?>