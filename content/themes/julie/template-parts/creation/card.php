<div class="card text-bg-dark text-center border-light m-1" style="width: 18rem;">
  <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid card-img-top p-1" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php the_title(); ?></h5>
    <p class="card-text mb-2">
      <?php echo get_field('dimensions'); ?> -
      <?php echo get_field('prix'); ?> €
    </p>
    <a href="<?php the_permalink(); ?>" class="btn btn-light">Voir</a>
  </div>
</div>