<?php

/**
 * @file
 * This file is empty by default because the base theme chain (Alpha & Omega) provides
 * all the basic functionality. However, in case you wish to customize the output that Drupal
 * generates through Alpha & Omega this file is a good place to do so.
 * 
 * Alpha comes with a neat solution for keeping this file as clean as possible while the code
 * for your subtheme grows. Please read the README.txt in the /preprocess and /process subfolders
 * for more information on this topic.
 */

function opendebate_apachesolr_search_mlt_recommendation_block($vars) {
  $docs = $vars['docs'];
  $links = array();
  foreach ($docs as $result) {

   if (strpos($result->url,"/news/") !== false) {
	$ode_class = 'ode-mlt-news';
   } elseif (strpos($result->url,"/citation/") !== false) { 
	$ode_class = 'ode-mlt-citation'; 
   } elseif (strpos($result->url,"/author/") !== false) { 
	$ode_class = 'ode-mlt-author';
   } elseif (strpos($result->url,"/evidence/")) {
	$ode_class = 'ode-mlt-evidence';
   } elseif (strpos($result->url,"/organization/")) {
        $ode_class = 'ode-mlt-organization';
   } elseif (strpos($result->url,"/argument/")) {
        $ode_class = 'ode-mlt-argument';
   } else { 
	$ode_class = 'ode-mlt';
   }

    $links[] = l($result->label, $result->path, array('html' => TRUE, 'attributes' => array('class' => $ode_class)));
  }
  $links = array(
    '#theme' => 'item_list',
    '#items' => $links,
  );
  return render($links);
}
