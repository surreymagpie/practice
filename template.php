<?php

  // Implements theme_preprocess_hook

function practice_preprocess_html(&$variables) {

  // Import Google font 'Roboto'
  drupal_add_css('http://fonts.googleapis.com/css?family=Roboto:100,300,400,700');
}
