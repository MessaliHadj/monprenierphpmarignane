<?php 
  require __DIR__ . ('/utilities/header.php'); 
  require __DIR__ . ('/function/movies.fn.php'); 
?>

  <h1>Les films Utopia</h1>
  <?php
    $films = findAllMovies($db);
  ?>
  <?php foreach ($films as $film) { ?>
    <div class="alert alert-primary" role="alert">
      <a href="mapage.php?id=<?= $film['id'] ?>">
        <?= $film['title'] ?>
      </a>
    </div>
  <?php } ?>
  
  <?php require_once __DIR__ . ('/utilities/footer.php'); ?>
