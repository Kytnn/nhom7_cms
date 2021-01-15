<?php
define('TPL_DIR_URI', get_template_directory_uri());
//Add css files
function svh_enqueue_styles() {
    wp_enqueue_style( 'bootstrap', TPL_DIR_URI .
    '/assets/vendor/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style( 'core', TPL_DIR_URI . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'svh_enqueue_styles');

function register_svh_menus() {
    register_nav_menus([
        'main-menu' => __( 'Main Menu' )
    ]);
}
add_action('init', 'register_svh_menus');

# Khai báo hằng số TPL_DIR bằng đường dẫn đến thư mục theme
define('TPL_DIR', get_stylesheet_directory());

# Yêu cầu load file class-wp-bootstrap-navwalker.php
function register_navwalker(){
	require_once TPL_DIR . '/inc/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );
/**
 * Thêm logo vào trang quản trị WordPress
 */
function config_custom_logo() {
    add_image_size( 'custom-image-size' , 240 , 100 , true );
    $defaults = array(
        'height' => 100,
        'width' => 240,
        'flex-height' => true,
        'flex-width' => true,
        'header-text' => array(),
    );
    add_theme_support( 'custom-logo' , $defaults );

}

add_action( 'after_setup_theme' , 'config_custom_logo' );
?>