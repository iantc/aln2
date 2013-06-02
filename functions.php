<?php
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'before_widget' => '<div class="moduleone"><div class="moduletwo">',
        'after_widget' => '</div></div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
add_action( 'init', 'register_my_menus' );

function register_my_menus() {
	register_nav_menus(
		array(
			'primary-menu' => __( 'Primary Menu' ),
			'secondary-menu' => __( 'Secondary Menu' ),
			'tertiary-menu' => __( 'Tertiary Menu' )
		)
	);
}

function getUserAgent($form_tag){
  if ($form_tag['name'] == 'user-agent'){
    $form_tag['values'][] = $_SERVER['HTTP_USER_AGENT'];
  }
  return $form_tag;
}
add_filter('wpcf7_form_tag', 'getUserAgent');

?>