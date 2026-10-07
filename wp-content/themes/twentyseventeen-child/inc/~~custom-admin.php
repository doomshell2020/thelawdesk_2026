<?php

/*=======================================================================

                    Custom Type Post For Members

=======================================================================*/

function codex_custom_init_members() {

  $labels = array(

    'name' => 'Members',

    'singular_name' => 'Member',

    'add_new' => 'Add New',

    'add_new_item' => 'Add New Member',

    'edit_item' => 'Edit Member',

    'new_item' => 'New Member',

    'all_items' => 'All Members',

    'view_item' => 'View Member',

    'search_items' => 'Search Members',

    'not_found' =>  'No Members found',

    'not_found_in_trash' => 'No Members found in Trash', 

    'parent_item_colon' => '',

    'menu_name' => 'Members'

  );



  $args = array(

    'labels' => $labels,

    'public' => true,

    'publicly_queryable' => true,

    'show_ui' => true, 

    'show_in_menu' => true, 

    'query_var' => true,

    'rewrite' => array( 'slug' => 'member' ),

    'capability_type' => 'post',

    'has_archive' => true, 

    'hierarchical' => false,

    'menu_position' => null,

	'menu_position' => 5,

    'supports' => array( 'title', 'editor', 'thumbnail' )

  ); 



  register_post_type( 'member', $args );

}

add_action( 'init', 'codex_custom_init_members' );



/*=======================================================================

                    Custom Type Post For Achivements

=======================================================================*/

function codex_custom_init_achivements() {

  $labels = array(

    'name' => 'Achivements',

    'singular_name' => 'Achivement',

    'add_new' => 'Add New',

    'add_new_item' => 'Add New Achivement',

    'edit_item' => 'Edit Achivement',

    'new_item' => 'New Achivement',

    'all_items' => 'All Achivements',

    'view_item' => 'View Achivement',

    'search_items' => 'Search Achivements',

    'not_found' =>  'No Achivement found',

    'not_found_in_trash' => 'No Achivements found in Trash', 

    'parent_item_colon' => '',

    'menu_name' => 'Achivements'

  );



  $args = array(

    'labels' => $labels,

    'public' => true,

    'publicly_queryable' => true,

    'show_ui' => true, 

    'show_in_menu' => true, 

    'query_var' => true,

    'rewrite' => array( 'slug' => 'achivement' ),

    'capability_type' => 'post',

    'has_archive' => true, 

    'hierarchical' => false,

    'menu_position' => null,

	'menu_position' => 5,

    'supports' => array( 'title', 'editor', 'thumbnail' )

  ); 



  register_post_type( 'achivement', $args );

}

add_action( 'init', 'codex_custom_init_achivements' );



/*=======================================================================

                    Custom Type Post For Public Downloads

=======================================================================*/

function codex_custom_init_download() {

  $labels = array(

    'name' => 'Downloads',

    'singular_name' => 'Download',

    'add_new' => 'Add New',

    'add_new_item' => 'Add New Download',

    'edit_item' => 'Edit Download',

    'new_item' => 'New Download',

    'all_items' => 'All Downloads',

    'view_item' => 'View Download',

    'search_items' => 'Search Downloads',

    'not_found' =>  'No Downloads found',

    'not_found_in_trash' => 'No Downloads found in Trash', 

    'parent_item_colon' => '',

    'menu_name' => 'Downloads'

  );



  $args = array(

    'labels' => $labels,

    'public' => true,

    'publicly_queryable' => true,

    'show_ui' => true, 

    'show_in_menu' => true, 

    'query_var' => true,

    'rewrite' => array( 'slug' => 'download' ),

    'capability_type' => 'post',

    'has_archive' => true, 

    'hierarchical' => false,

    'menu_position' => null,

	'menu_position' => 5,

    'supports' => array( 'title' )

  ); 



  register_post_type( 'download', $args );

}

add_action( 'init', 'codex_custom_init_download' );




/*=======================================================================

                   Custom Type Post For Clients Cases

=======================================================================*/

function codex_custom_init_cases() {

  $labels = array(

    'name' => 'Cases',

    'singular_name' => 'Case',

    'add_new' => 'Add New',

    'add_new_item' => 'Add New Case',

    'edit_item' => 'Edit Case',

    'new_item' => 'New Case',

    'all_items' => 'All Cases',

    'view_item' => 'View Case',

    'search_items' => 'Search Cases',

    'not_found' =>  'No Cases found',

    'not_found_in_trash' => 'No Cases found in Trash', 

    'parent_item_colon' => '',

    'menu_name' => 'Cases'

  );



  $args = array(

    'labels' => $labels,

    'public' => true,

    'publicly_queryable' => true,

    'show_ui' => true, 

    'show_in_menu' => true, 

    'query_var' => true,

    'rewrite' => array( 'slug' => 'case' ),

    'capability_type' => 'post',

    'has_archive' => true, 

    'hierarchical' => false,

    'menu_position' => null,

	'menu_position' => 5,

    'supports' => array( 'title', 'editor')

  ); 



  register_post_type( 'case', $args );

}

add_action( 'init', 'codex_custom_init_cases' );



/*=======================================================================

                   Custom Type Post For Clients

=======================================================================*/

function codex_custom_init_clients() {

  $labels = array(

    'name' => 'Clients',

    'singular_name' => 'Client',

    'add_new' => 'Add New',

    'add_new_item' => 'Add New Client',

    'edit_item' => 'Edit Client',

    'new_item' => 'New Client',

    'all_items' => 'All Clients',

    'view_item' => 'View Client',

    'search_items' => 'Search Clients',

    'not_found' =>  'No Clients found',

    'not_found_in_trash' => 'No Clients found in Trash', 

    'parent_item_colon' => '',

    'menu_name' => 'Client'

  );



  $args = array(

    'labels' => $labels,

    'public' => true,

    'publicly_queryable' => true,

    'show_ui' => true, 

    'show_in_menu' => true, 

    'query_var' => true,

    'rewrite' => array( 'slug' => 'client' ),

    'capability_type' => 'post',

    'has_archive' => true, 

    'hierarchical' => false,

    'menu_position' => null,

	'menu_position' => 5,

    'supports' => array( 'title', 'thumbnail' )

  ); 



  register_post_type( 'client', $args );

}

add_action( 'init', 'codex_custom_init_clients' );


/*=======================================================================

                   Custom Type Post For Clients

=======================================================================*/

function codex_custom_init_news() {

  $labels = array(

    'name' => 'News',

    'singular_name' => 'News',

    'add_new' => 'Add New',

    'add_new_item' => 'Add New News',

    'edit_item' => 'Edit News',

    'new_item' => 'New News',

    'all_items' => 'All News',

    'view_item' => 'View News',

    'search_items' => 'Search News',

    'not_found' =>  'No News found',

    'not_found_in_trash' => 'No News found in Trash', 

    'parent_item_colon' => '',

    'menu_name' => 'News'

  );



  $args = array(

    'labels' => $labels,

    'public' => true,

    'publicly_queryable' => true,

    'show_ui' => true, 

    'show_in_menu' => true, 

    'query_var' => true,

    'rewrite' => array( 'slug' => 'my-news' ),

    'capability_type' => 'post',

    'has_archive' => true, 

    'hierarchical' => false,

    'menu_position' => null,

	'menu_position' => 5,

    'supports' => array( 'title','editor' )

  ); 



  register_post_type( 'my-news', $args );

}

add_action( 'init', 'codex_custom_init_news' );








/*=======================================================================

                   Custom Type Post For Practice-Area

=======================================================================*/

function codex_custom_init_practice_area() {

  $labels = array(

    'name' => 'Practice area',

    'singular_name' => 'Practice area',

    'add_new' => 'Add Practice area',

    'add_new_item' => 'Add New Practice area',

    'edit_item' => 'Edit Practice area',

    'new_item' => 'New Practice area',

    'all_items' => 'All Practice area',

    'view_item' => 'View Practice area',

    'search_items' => 'Search Practice area',

    'not_found' =>  'No Practice area found',

    'not_found_in_trash' => 'No Practice area found in Trash', 

    'parent_item_colon' => '',

    'menu_name' => 'Practice area'

  );



  $args = array(

    'labels' => $labels,

    'public' => true,

    'publicly_queryable' => true,

    'show_ui' => true, 

    'show_in_menu' => true, 

    'query_var' => true,

    'rewrite' => array( 'slug' => 'practice_area' ),

    'capability_type' => 'post',

    'has_archive' => true, 

    'hierarchical' => false,

    'menu_position' => null,

	'menu_position' => 5,

    'supports' => array( 'title','editor','thumbnail')

  ); 



  register_post_type( 'practice_area', $args );

}

add_action( 'init', 'codex_custom_init_practice_area' );





/*=======================================================================

                   Custom Type Post For client -Testimonail 

=======================================================================*/

function codex_custom_init_client_testimonial() {

  $labels = array(

    'name' => 'Client Testimonial',

    'singular_name' => 'Client Testimonial',

    'add_new' => 'Add Client Testimonial',

    'add_new_item' => 'Add New Client Testimonial',

    'edit_item' => 'Edit Client Testimonial',

    'new_item' => 'New Client Testimonial',

    'all_items' => 'All Client Testimonial',

    'view_item' => 'View Client Testimonial',

    'search_items' => 'Search Client Testimonial',

    'not_found' =>  'No Client Testimonial found',

    'not_found_in_trash' => 'No Client Testimonial found in Trash', 

    'parent_item_colon' => '',

    'menu_name' => 'Client Testimonial'

  );



  $args = array(

    'labels' => $labels,

    'public' => true,

    'publicly_queryable' => true,

    'show_ui' => true, 

    'show_in_menu' => true, 

    'query_var' => true,

    'rewrite' => array( 'slug' => 'client_testimonial' ),

    'capability_type' => 'post',

    'has_archive' => true, 

    'hierarchical' => false,

    'menu_position' => null,

	'menu_position' => 5,

    'supports' => array( 'title','editor','thumbnail')

  ); 



  register_post_type( 'client_testimonial', $args );

}

add_action( 'init', 'codex_custom_init_client_testimonial' );







/*=======================================================================

                 Show List of all users

=======================================================================*/

add_action('admin_head', 'wpse39084_replace_post_meta_author');

add_action('admin_menu', 'wpse50827_author_metabox_remove');

add_action('post_submitbox_misc_actions', 'wpse50827_author_metabox_move');



/* Show Subscribers in post author dropdowns - edit and quickEdit */

function wpse39084_replace_post_meta_author() {

  $screen = get_current_screen(); 

  if($screen->id == 'case' || $screen->id == 'edit-case') {

    add_filter('wp_dropdown_users', 'showme_dropdown_users');

    function showme_dropdown_users( $args = '' ) {

      $post = get_post();

      $selected = $post->post_author;

      $siteusers = get_users('orderby=nicename&order=ASC'); // you can pass filters and option

      $re = '';

      if (count($siteusers) > 0){

          $re = '<select name="post_author_override" id="post_author_override">';

          foreach ($siteusers as $user) {

              $re .= '<option value="' . $user->ID . '">'.$user->user_nicename . '</option>';

          }

          $re .= '</select>';

          $re = str_replace('value="' . $selected . '"','value="' . $selected . '" selected="selected"', $re );

      }

      echo $re;

    }

   }

}



/* Remove Author meta box from post editing */

function wpse50827_author_metabox_remove() {

    remove_meta_box('authordiv', 'case', 'normal');

}



/* Move Author meta box inside Publish Actions meta box */

function wpse50827_author_metabox_move() {

    global $post_ID;

    $post = get_post($post_ID);

    if($post->post_type != 'case') return;

    echo '<div id="author" class="misc-pub-section" style="border-top-style:solid; border-top-width:1px; border-top-color:#EEEEEE; border-bottom-width:0px;">Client: ';

    post_author_meta_box($post);

    echo '</div>';

}

// =============================== Footer Link ======================================
class flink extends WP_Widget {
	function flink() {
	//Constructor
		$widget_ops = array('classname' => 'Footer Link', 'description' => 'Footer Link widget' );		
		$this->WP_Widget('footer_link', 'Footer Link', $widget_ops);
	}
	function widget($args, $instance) {
	// prints the widget
		extract($args, EXTR_SKIP);
		$title = empty($instance['title']) ? '' : apply_filters('widget_title', $instance['title']);
		 ?>				
         
         <?php echo $before_widget;
		 if ( $title <> "" ) { echo $before_title . $title . $after_title; }?>
		 <?php get_links(6, '', '', '', TRUE, 'id', FALSE); ?>		 
		<?php echo $after_widget;?>
                
     
      
              
	<?php
	}
	function update($new_instance, $old_instance) {
	//save the widget
		$instance = $old_instance;		
		$instance['title'] = strip_tags($new_instance['title']);
		return $instance;
	}
	function form($instance) {
	//widgetform in backend
		$instance = wp_parse_args( (array) $instance, array( 'title' => '' ) );		
		$title = strip_tags($instance['title']);
		?>
		
		
<p><label for="<?php echo $this->get_field_id('title'); ?>">Widget Title: <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo attribute_escape($title); ?>" /></label></p>


<?php

	}}
register_widget('flink');
