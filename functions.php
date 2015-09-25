<?php

function ifspvtp_theme_setup(){

    add_theme_support('post-thumbnails');

    register_nav_menu( 'primary', __( 'Navegacao primaria', 'ifspvtp-wp' ) );

    require_once('wp_bootstrap_navwalker.php');

}

add_action('after_setup_theme','ifspvtp_theme_setup');



?>