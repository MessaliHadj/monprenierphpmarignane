<?php

function activeNavLink($page, $url) {
  if (strpos($page, $url) !== FALSE) {
    echo 'active text-uppercase';
  }
}
