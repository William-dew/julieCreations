<footer class="d-flex flex-wrap flex-md-nowrap justify-content-between align-items-center py-3 my-4 border-top bg-pink">
  <div class="col-md-4 d-flex align-items-center">
    <a href="/galerie" class="mb-1 me-2 mb-md-0">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="logo_site" width="50">
    </a>
    <span class="text-light">© 2023 Les Créations de Julie</span>
  </div>

  <ul class="nav col-md-3 justify-content-end list-unstyled d-flex flex-column flex-md-row">
    
    <li class="m-2"><a class="text-light" href="<?php echo esc_url(home_url('/contact')); ?>">Contact</a></li>
    <!-- Ajout du lien vers la politique de confidentialité -->
    <li class="m-2"><a class="text-light" href="<?php echo esc_url(home_url('/politique-de-confidentialite')); ?>">Politique de confidentialité</a></li>
  </ul>
</footer>


</body>

</html>