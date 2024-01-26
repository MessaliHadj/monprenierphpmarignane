<?php
  $domain = '/';

  $index_page = $domain;
  $films_page = $domain . 'films.php';
  $contact_page = $domain . 'contact.php';

  $index_name = 'Les films de la semaine';
  $films_name = 'Tous les films à l\'affiche';
  $contact_name = 'Contactez nous';

  $current_url = $_SERVER['SCRIPT_NAME'];

  if (strpos($index_page, $current_url) !== FALSE || strpos($index_page . 'index.php', $current_url) !== FALSE):
    $title = $index_name;
  elseif (strpos($films_page, $current_url) !== FALSE):
    $title = $films_name;
  elseif (strpos($contact_page, $current_url) !== FALSE):
    $title = $contact_name;
  endif;