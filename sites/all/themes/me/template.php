<?php
/**
 * Custom Galeria Template settings
 */
 
/**
 * page alter
 */
function me_page_alter(&$vars) {
	// Add custom varibales for scss
	$theme = superhero_get_theme();
	$theme->custom['header_height'] = theme_get_setting('superhero_header_height');
	$theme->custom['header_fixed_height'] = theme_get_setting('superhero_header_fixed_height');
	// Remove content from front page
	if (drupal_is_front_page()) {
		unset($vars['data']['content']);
	}
}

/**
 * Preprocess node
 */
function me_preprocess_node(&$vars) {
  $node = $vars['node'];
  if ($vars['view_mode'] == 'teaser_alt') {
    $vars['theme_hook_suggestions'][] = 'node__' . $node->type . '__teaser__alt';
    $vars['theme_hook_suggestions'][] = 'node__' . $node->nid . '__teaser_alt';
  }
}


function me_theme() {
  $items = array();
    
  $items['user_login'] = array(
    'render element' => 'form',
    'path' => drupal_get_path('theme', 'me') . '/templates',
    'template' => 'user-login',
    'preprocess functions' => array(
       'me_preprocess_user_login'
    ),
  );
  $items['user_register_form'] = array(
    'render element' => 'form',
    'path' => drupal_get_path('theme', 'me') . '/templates',
    'template' => 'user-register-form',
    'preprocess functions' => array(
      'me_preprocess_user_register_form'
    ),
  );
  $items['user_pass'] = array(
    'render element' => 'form',
    'path' => drupal_get_path('theme', 'me') . '/templates',
    'template' => 'user-pass',
    'preprocess functions' => array(
      'me_preprocess_user_pass'
    ),
  );
  return $items;
}

function me_preprocess_user_login(&$vars) {
  $vars['intro_text'] = t('This is my awesome login form');
}

function me_preprocess_user_register_form(&$vars) {
  $vars['intro_text'] = t('This is my super awesome reg form');
}

function me_preprocess_user_pass(&$vars) {
  $vars['intro_text'] = t('This is my super awesome request new password form');
}