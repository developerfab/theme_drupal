<?php

function mi_tema_preprocess_page(&$vars, $hook)
{
	if (isset($vars['main_menu'])) {
		$vars['primary_nav'] = theme('links__system_main_menu', array(
			'links' => $vars['main_menu'],
			'attributes' => array(
				'class' => array('links', 'main-menu'),
			),
			'heading' => array(
				'text' => t('Main menu'),
				'level' => 'h2',
				'class' => array('element-invisible'),
			)
		));
	}
	else
		$vars['primary_nav'] = FALSE;
	}
?>
<?php
function fotocopiadora_theme() {
  $items = array();
    
  $items['user_login'] = array(
    'render element' => 'form',
    'path' => drupal_get_path('theme', 'fotocopiadora') . '/templates',
    'template' => 'user-login',
    'preprocess functions' => array(
       'fotocopiadora_preprocess_user_login'
    ),
  );
  $items['user_register_form'] = array(
    'render element' => 'form',
    'path' => drupal_get_path('theme', 'fotocopiadora') . '/templates',
    'template' => 'user-register-form',
    'preprocess functions' => array(
      'fotocopiadora_preprocess_user_register_form'
    ),
  );
  $items['user_pass'] = array(
    'render element' => 'form',
    'path' => drupal_get_path('theme', 'fotocopiadora') . '/templates',
    'template' => 'user-pass',
    'preprocess functions' => array(
      'fotocopiadora_preprocess_user_pass'
    ),
  );
  return $items;
}
?>
<?php
function fotocopiadora_preprocess_user_login(&$vars) {
  $vars['intro_text'] = t('This is my awesome login form');
}

function fotocopiadora_preprocess_user_register_form(&$vars) {
  $vars['intro_text'] = t('This is my super awesome reg form');
}

function fotocopiadora_preprocess_user_pass(&$vars) {
  $vars['intro_text'] = t('This is my super awesome request new password form');
}
?>