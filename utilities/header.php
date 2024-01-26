<?php
  require_once dirname(__DIR__) . ('/config/config.php');
  require_once dirname(__DIR__) . ('/function/database.fn.php');
  $db = getPDOlink($config);
  require_once dirname(__DIR__) . ('/config/headerConfig.php');
  require_once dirname(__DIR__) . ('/function/header.fn.php');

?>

<!DOCTYPE html>
<html lang="FR-fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="apple-touch-icon" sizes="180x180" href="./assets/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./assets/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./assets/favicon/favicon-16x16.png">
  <link rel="manifest" href="./assets/favicon/site.webmanifest">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <title>Utopia</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container px-4 px-lg-5">
      <a class="navbar-brand" href="/">
        <img src="/assets/img/utopia-logo.png" alt="Logo" width="50" height="50" class="d-inline-block">
        Cinema Utopia
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4 col-12 justify-content-end">
          <li class="nav-item">
            <a 
            class="nav-link 
            <?= activeNavLink($index_page, $current_url) ?>
            <?= activeNavLink('/index.php', $current_url) ?>" 
              aria-current="page" 
              href="<?= $index_page ?>">
              Accueil
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= activeNavLink($films_page, $current_url) ?>" href="<?= $films_page ?>">Les Films</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle <?= activeNavLink($contact_page, $current_url) ?>" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Contact</a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#!">Tous les cinemas</a></li>
              <li><hr class="dropdown-divider" /></li>
              <li><a class="dropdown-item" href="<?= $contact_page ?>">Formulaire de contact</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
</nav>

<header class="overflow-hidden" style="height: 500px;">
  <div class="container-fluid px-4 px-lg-5 position-relative h-100">
    <img src="https://picsum.photos/2000/800" alt="image de background" class="position-absolute top-50 start-50 translate-middle h-100">
    <div class="text-center text-white position-absolute align-items-center top-50 start-50 translate-middle bg-dark bg-opacity-25 rounded">
      <h1 class="display-4 fw-bolder"><?= $title ?></h1>
      <p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p>
    </div>
  </div>
</header>
<div class="container">