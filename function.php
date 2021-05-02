<?php
add_action('wp_enqueue_scripts', 'cdo_scripts');

function cdo_scripts() {
    wp_enqueue_style( 'cdo-style', get_stylesheet_uri() );

    wp_enqueue_script( 'cdo-scripts', get_template_directory_uri() . '<?php echo bloginfo('template_url');?>/assets/js/main.js', array(), null, true);
};


add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );


?>