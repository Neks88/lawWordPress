<?php 
function mycss () {
    wp_enqueue_style("my-css", get_stylesheet_directory_uri() . "/style.css");
    wp_enqueue_style("bst-file", get_stylesheet_directory_uri() . "/css/bootstrap.min.css");
    wp_enqueue_style("ani-file", get_stylesheet_directory_uri() . "/css/animate.css");
    wp_enqueue_style("fon-file", get_stylesheet_directory_uri() . "/fonts/ionicons.min.css");
    wp_enqueue_style("lato-file", 'https://fonts.googleapis.com/css?family=Lato:100,200,300,400,500,600,700,900()');
 


}

add_action("wp_enqueue_scripts", "mycss");


// function myjs () {
//     wp_enqueue_script("abc", get_template_directory_uri(  ) . "/js/script.js", array(), "1.0.0", true);
// }

// add_action( $tag:string, $function_to_add:callable, $priority:integer, $accepted_args:integer )



//Register Nav Walker





require_once get_template_directory(  ). "/class-wp-bootstrap-navwalker.php";

// Add theme support for nav walker menu
function navwalker() {

        register_nav_menus([
            "primary" => __("Primary_Menu", "navwalker")
        ]) ;

}

add_action("after_setup_theme", "navwalker" );









?>