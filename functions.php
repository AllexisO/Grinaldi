<?php
    //Register Nav Walker class_alias
    require_once('wp_bootstrap_navwalker.php');

    //Theme Support
    function wpb_theme_setup(){
        add_theme_support('post-thumbnails');
        
        //Nav Menus
        register_nav_menus(array(
            'primary' => __('Primary Menu')
        ));
    }
    //Navs menu and Theme
    add_action('after_setup_theme', 'wpb_theme_setup');


    //Length of news on page
    function set_excerpt_length() {
	return 45;
}
    
    add_filter('excerpt_length', 'set_excerpt_length');
    
    //Add points after content lenght
    add_filter('excerpt_more', function($more) {
	   return ' ...';
    });
    
    //Widgets
    function wpb_init_widgets($id){
        register_sidebar(array(
            'name' => 'Sidebar',
            'id' => 'sidebar',
            'before_widget' => '<div class="sidebar-widget">',
            'after_widget' => '</div>',
            'before_title'  => '<h2 class="rounded">',
            'after_title'   => '</h2>',
        ));
    }

    add_action('widgets_init', 'wpb_init_widgets');



    add_filter( 'envira_gallery_output_link_attr', 'tgm_envira_link_new_window' );
function tgm_envira_link_new_window( $attrs ) {

    return $attrs . ' target="_blank"';

}

add_action( 'envira_gallery_api_helper_config', 'tgm_envira_edit_transparent_overlay' );
function tgm_envira_edit_transparent_overlay( $data ) {
    
    ob_start();
    ?>
    overlay : {
        css : {
            'background' : 'rgba(0, 0, 0, 0.4)'
        }
    },
    <?php
    echo ob_get_clean();
    
}

add_filter( 'category_description', 'do_shortcode' );
add_filter( 'term_description', 'do_shortcode' );
add_filter( 'term_description', 'shortcode_unautop');

include 'global.php';

//Taxonomy & custom types
//require get_template_directory() . '/custom-types.php';