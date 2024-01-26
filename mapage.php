<?php 
  require_once __DIR__ . ('/config/config.php');
  require_once __DIR__ . ('/function/database.fn.php');
  $db = getPDOlink($config);

  require_once __DIR__ . ('/function/movies.fn.php');
  $film = findMovieById($db, $_GET['id']);

  if (!isset($_GET['id']) || empty($film['id'])) {
    header("Location: /");
  } else {
    $title = 'Detail du film ' . $film['title'];
  }

  $picture = findPictureByMovie($db, $_GET['id']);
  $path = $picture['pathImg'];
  
  require_once __DIR__ . ('/utilities/header.php');
  echo '<div class="py-3">';
  require_once  __DIR__ . ('/utilities/card.php'); 
  echo '</div>';
  require_once __DIR__ . ('/utilities/footer.php');
?>