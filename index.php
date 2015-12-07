<?php
  include 'includes/isLoggedIn.php';

  if ($isLoggedIn == 1) {
    include 'branches.php';
  } else {
    include 'landing.php';
  }
?>