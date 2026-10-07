<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array(  ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

// END ENQUEUE PARENT ACTION
include( get_stylesheet_directory() . '/inc/custom-admin.php'); 
//include( get_stylesheet_directory() . '/inc/my-widget.php'); 
 include( get_stylesheet_directory() . '/inc/social-widgets.php');
function custom_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Main Widget Area', 'twentyseventeen-child' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Appears in the footer section of the site.', 'twentyseventeen-child' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Important Link Widget Area', 'twentyseventeen-child' ),
		'id'            => 'import-link',
		'description'   => __( 'Appears on posts and pages in the sidebar.', 'twentyseventeen-child' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s sd-lk">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
        
        register_sidebar( array(
		'name'          => __( 'header social Widget Area', 'twentyseventeen-child' ),
		'id'            => 'social',
		'description'   => __( 'Appears on posts and pages in the sidebar.', 'twentyseventeen-child' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
		
		
		
	) );
        
        register_sidebar( array(
		'name'          => __( 'Header Contact No ', 'twentyseventeen-child' ),
		'id'            => 'contact-no',
		'description'   => __( 'Appears on posts and pages in the sidebar.', 'twentyseventeen-child' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
        register_sidebar( array(
		'name'          => __( 'footer Widget Area', 'twentyseventeen-child' ),
		'id'            => 'foot',
		'description'   => __( 'Appears on posts and pages in the sidebar.', 'twentyseventeen-child' ),
		
	) );

        register_sidebar( array(
		'name'          => __( 'footer Delhi add', 'twentyseventeen-child' ),
		'id'            => 'footdhl',
		'description'   => __( 'Appears on posts and pages in the sidebar.', 'twentyseventeen-child' ),
	) );
}
 register_sidebar( array(
		'name'          => __( 'footer social Area', 'twentyseventeen-child' ),
		'id'            => 'foot-social',
		'description'   => __( 'Appears on posts and pages in the sidebar.', 'twentyseventeen-child' ),
		
	) );

add_action( 'widgets_init', 'custom_widgets_init' );



function register_my_menus() {
register_nav_menu( 'primary', __( 'Navigation Menu', 'twentythirteen' ) );
        register_nav_menu( 'Secondry', __( 'Practice area Menu', 'twentythirteen' ) );
        register_nav_menu( 'Footer', __( 'Footer Menu', 'twentythirteen' ) );
        register_nav_menu( 'left', __( 'leftsidebar Menu', 'twentythirteen' ) );
        
        
        
	/*
	 * This theme uses a custom image size for featured images, displayed on
	 * "standard" posts and pages.
	 */
 }
 add_action( 'init', 'register_my_menus' );
 
 
 function change_post_menu_label() {
   global $menu;
   global $submenu;
   $menu[5][0] = 'Blogs';
   $submenu['edit.php'][5][0] = 'Blogs';
   $submenu['edit.php'][10][0] = 'Add Blog';
   $submenu['edit.php'][15][0] = 'Categories'; // Change name for categories
   $submenu['edit.php'][16][0] = 'Tags'; // Change name for tags
   echo '';
}

function change_post_object_label() {
       global $wp_post_types;
       $labels = &$wp_post_types['post']->labels;
       $labels->name = 'Blogs';
       $labels->singular_name = 'Blogs';
       $labels->add_new = 'Add Blog';
       $labels->add_new_item = 'Add Blog';
       $labels->edit_item = 'Edit Blog';
       $labels->new_item = 'Blogs';
       $labels->view_item = 'View Blogs';
       $labels->search_items = 'Search Blogs';
       $labels->not_found = 'No Blogs found';
       $labels->not_found_in_trash = 'No Blogs found in Trash';
   }
   add_action( 'init', 'change_post_object_label' );
   add_action( 'admin_menu', 'change_post_menu_label' );

   /**
 * Sets the extension and mime type for .webp files.
 *
 * @param array  $wp_check_filetype_and_ext File data array containing 'ext', 'type', and
 *                                          'proper_filename' keys.
 * @param string $file                      Full path to the file.
 * @param string $filename                  The name of the file (may differ from $file due to
 *                                          $file being in a tmp directory).
 * @param array  $mimes                     Key is the file extension with value as the mime type.
 */
add_filter( 'wp_check_filetype_and_ext', 'wpse_file_and_ext_webp', 10, 4 );
function wpse_file_and_ext_webp( $types, $file, $filename, $mimes ) {
    if ( false !== strpos( $filename, '.webp' ) ) {
        $types['ext'] = 'webp';
        $types['type'] = 'image/webp';
    }

    return $types;
}

/**
 * Adds webp filetype to allowed mimes
 * 
 * @see https://codex.wordpress.org/Plugin_API/Filter_Reference/upload_mimes
 * 
 * @param array $mimes Mime types keyed by the file extension regex corresponding to
 *                     those types. 'swf' and 'exe' removed from full list. 'htm|html' also
 *                     removed depending on '$user' capabilities.
 *
 * @return array
 */
add_filter( 'upload_mimes', 'wpse_mime_types_webp' );
function wpse_mime_types_webp( $mimes ) {
    $mimes['webp'] = 'image/webp';

  return $mimes;
}


// Existing code

add_theme_support( 'post-thumbnails' );

// More code