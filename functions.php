<?php

function ifspvtp_theme_setup(){

    add_theme_support('post-thumbnails');

    //register_nav_menu( 'primary', __( 'Navegacao primaria', 'ifspvtp-wp' ) );

    register_nav_menus(array(
      'primary' => __('Navegacao primaria','ifspvtp-wp'),
    ));

    require_once('wp_bootstrap_navwalker.php');

}

add_action('after_setup_theme','ifspvtp_theme_setup');


if ( function_exists('register_sidebar') )
register_sidebar(array(
'name' => 'left',
'description' => 'Barra Lateral Esquerda',
'before_widget' => '',
'after_widget' => '',
'before_title' => '',
'after_title' => '',
));

if ( function_exists('register_sidebar') )
register_sidebar(array(
'name' => 'right',
'description' => 'Barra Lateral Direita',
'before_widget' => '',
'after_widget' => '',
'before_title' => '',
'after_title' => '',
));

if ( function_exists('register_sidebar') )
register_sidebar(array(
'name' => 'bottom1',
'description' => 'Barra Inferior 1',
'before_widget' => '',
'after_widget' => '',
'before_title' => '',
'after_title' => '',
));

if ( function_exists('register_sidebar') )
register_sidebar(array(
'name' => 'bottom2',
'description' => 'Barra Inferior 2',
'before_widget' => '',
'after_widget' => '',
'before_title' => '',
'after_title' => '',
));

if ( function_exists('register_sidebar') )
register_sidebar(array(
'name' => 'bottom3',
'description' => 'Barra Inferior 3',
'before_widget' => '',
'after_widget' => '',
'before_title' => '',
'after_title' => '',
));

if ( function_exists('register_sidebar') )
register_sidebar(array(
'name' => 'bottom4',
'description' => 'Barra Inferior 4',
'before_widget' => '',
'after_widget' => '',
'before_title' => '',
'after_title' => '',
));

if ( function_exists('register_sidebar') )
register_sidebar(array(
'name' => 'bottom5',
'description' => 'Barra Inferior 5',
'before_widget' => '',
'after_widget' => '',
'before_title' => '',
'after_title' => '',
));

?>
