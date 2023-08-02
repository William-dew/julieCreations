<a href="<?php the_permalink(); ?>">
  <div class="card text-bg-dark text-center border-light m-2" style="width: 16rem;">
    <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid card-img-top p-3" alt="...">
    <div class="card-body">
      <h5 class="card-title"><?php the_title(); ?></h5>
      <p class="card-text mb-2">
      <div>
        <p class="m-1"><?php echo get_field('dimensions'); ?></p>
        <p class="mb-1"><?php echo get_field('prix'); ?> €</p>
      </div>
      </p>

      <!-- <a href="<?php the_permalink(); ?>" class="btn btn-light">
      <?php
      $textButton = has_term('meubles', 'type_de_creation') ? 'Voir la transformation' : 'Voir';
      echo $textButton;
      ?>
    </a> -->
    
    </div>
  </div>
</a>