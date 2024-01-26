<?php 
  require __DIR__ . ('/utilities/header.php'); 
  require __DIR__ . ('/function/movies.fn.php'); 
?>

  <h1>Les films Utopia</h1>
  <div class="p-5 col-5">
    <form method="post"  action="">
      <div class="d-flex">
        <select class="form-select" name="limit" aria-label="Default select example">
          <option selected>Nombres de films :</option>
          <option value="3">Les 3 meilleurs films.</option>
          <option value="5">Les 5 meilleurs films.</option>
          <option value="10">Les 10 meilleurs films.</option>
        </select>
        <input type="submit" value="valider" class="btn btn-primary ms-2">
      </div>
    </form>
  </div>
  <div class="d-flex flex-wrap justify-content-between">
  <?php
    $limit = isset($_POST['limit']) ? $_POST['limit'] : 3;
    $films = findBestMovies($db, $limit);
    foreach ($films as $film) { ?>
    <div class="alert alert-primary mx-1 col-2" role="alert">
      <a href="mapage.php?id=<?= $film['id'] ?>">
        <?= $film['title'] ?>
      </a>
    </div>
    <?php } ?>
  </div>
  <?php require_once __DIR__ . ('/utilities/footer.php'); ?>
