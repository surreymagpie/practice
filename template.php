<?php

  // Implements theme_preprocess_hook

function practice_preprocess_html(&$variables) {

  // Import Google font 'Roboto'
  drupal_add_css('http://fonts.googleapis.com/css?family=Roboto:100,300,400,700');

  // Add a viewport meta tag to the <head> for mobile responsiveness
  $element = array(
    '#tag' => 'meta', // The #tag is the html tag - <meta />
    '#attributes' => array( // Set up an array of attributes inside the tag
      'name' => 'viewport',
      'content' => 'width=device-width, initial-scale=1',
    ),
  );
  drupal_add_html_head($element, 'viewport_meta_tag');
}
