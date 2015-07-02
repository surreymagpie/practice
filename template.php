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

function practice_preprocess_node(&$variables) {

  // Set a variable for each date part for the node template
  if($variables['type'] == 'article') {
   $date = $variables['node']->created;
   $variables['day'] = date('j', $date);
   $variables['month'] = date('M', $date);
   $variables['year'] = date('Y', $date);
  }
}

function practice_preprocess_page(&$variables) {

  /* If we are on the home page and that is not set as a particular node */
  if ($variables['is_front'] && !isset($variables['node'])) {
    // Remove the first element from the main content array
    $first_node = array_shift($variables['page']['content']['system_main']['nodes']);
    // and insert it at the start of the highlighted region content
    array_unshift($variables['page']['highlighted'], $first_node);
  }
}
