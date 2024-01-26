<?php

function findAllMovies ($db) {
  $sql = "SELECT * FROM `movies`;";
  $requete = $db->query($sql);
  $result = $requete->fetchAll();
  return $result;
}

function findBestMovies ($db, $limit) {
  $sql = "SELECT * FROM `movies` ORDER BY rating DESC LIMIT $limit;";
  $requete = $db->query($sql);
  $result = $requete->fetchAll();
  return $result;
}

function findMovieById ($db, $currentId) {
  $sql = "SELECT 
  m.id, m.title, m.rating, m.year_released, 
  m.box_office, m.budget, m.duration, 
  d.name AS director,
  dc.name AS distributeur,
  g.name AS genre,
  GROUP_CONCAT(l.name SEPARATOR ', ') AS languages
  FROM `movies` AS m 
  INNER JOIN director d ON m.directorID = d.id
  INNER JOIN distribution_company dc ON m.companyID = dc.id
  INNER JOIN genre g ON m.genreID = g.id
  INNER JOIN movie_language ml ON m.id = ml.movieID
  JOIN languages l ON ml.languageID = l.id
  WHERE m.id = $currentId";
  $requete = $db->query($sql);
  $result = $requete->fetch();
  return $result;
}

function findPictureByMovie ($db, $currentId) {
  $sql = "SELECT * FROM `picture` WHERE movieId = $currentId";
  $requete = $db->query($sql);
  $result = $requete->fetch();
  return $result;
}

function getStar($rating)
{
  $starRating = round($rating);
  $rate = $starRating / 2;
  $ratingInt = explode(".", $rate);
  $starNbr = 0;
  
  for ($i = 0; $i < $ratingInt[0]; $i++) {
    echo '<div class="bi-star-fill"></div>';
    $starNbr++;
  }
  if (isset($ratingInt[1])) { 
    echo '<div class="bi-star-half"></div>';
    $starNbr++;
  }
  for ($i = 0; $i < 5 -  $starNbr++; $i++) {
    echo '<div class="bi-star"></div>';
  }
}