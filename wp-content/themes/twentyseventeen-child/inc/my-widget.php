

<?php
class wp_my_plugin extends WP_Widget {

	// constructor
    function wp_my_plugin() {
        parent::WP_Widget(false, $name = __('Contact Address Widget', 'wp_widget_plugin') );
    }
	// widget form creation
function form($instance) {

// Check values
if( $instance) {
     $title = esc_attr($instance['title']);
     $text = esc_attr($instance['text']);
	  $text1 = esc_attr($instance['text1']);
	  $fax=esc_attr($instance['fax']);
     $textarea = esc_textarea($instance['textarea']);
} else {
     $title = '';
     $text = '';
	  $text1 = '';
	  $fax='';
     $textarea = '';
}
?>


<p>
<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Widget Title', 'wp_widget_plugin'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id('textarea'); ?>"><?php _e('Address:', 'wp_widget_plugin'); ?></label>
<textarea class="widefat" id="<?php echo $this->get_field_id('textarea'); ?>" name="<?php echo $this->get_field_name('textarea'); ?>"><?php echo $textarea; ?></textarea>
</p>

<p>
<label for="<?php echo $this->get_field_id('text'); ?>"><?php _e('Phone:', 'wp_widget_plugin'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('text'); ?>" name="<?php echo $this->get_field_name('text'); ?>" type="text" value="<?php echo $text; ?>" />
</p>


<p>
<label for="<?php echo $this->get_field_id('fax'); ?>"><?php _e('Fax:', 'wp_widget_plugin'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('fax'); ?>" name="<?php echo $this->get_field_name('fax'); ?>" type="text" value="<?php echo $fax; ?>" />
</p>

<p>
<label for="<?php echo $this->get_field_id('text1'); ?>"><?php _e('Email:', 'wp_widget_plugin'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('text1'); ?>" name="<?php echo $this->get_field_name('text1'); ?>" type="text" value="<?php echo $text1; ?>" />
</p>


<?php
}
	// update widget
function update($new_instance, $old_instance) {
      $instance = $old_instance;
      // Fields
      $instance['title'] = strip_tags($new_instance['title']);
      $instance['text'] = strip_tags($new_instance['text']);
	   $instance['text1'] = strip_tags($new_instance['text1']);
	   $instance['fax'] = strip_tags($new_instance['fax']);
      $instance['textarea'] = strip_tags($new_instance['textarea']);
     return $instance;
}

	// display widget
function widget($args, $instance) {
   extract( $args );
   // these are the widget options
   $title = apply_filters('widget_title', $instance['title']);
   $text = $instance['text'];
    $text1 = $instance['text1'];
        $fax = $instance['fax'];
   $textarea = $instance['textarea'];
   //echo $before_widget;
   // Display the widget
  
   // Check if title is set
   if ( $title ) {
      echo '<h5>'.$title.'</h5>';
   }
echo '<ul class="list-unstyled">';
    // Check if text is set
   if( $text ) { ?> <?php 
      echo '
    <li><a href="tel:+91-141-4110610"><i class="fas fa-phone"></i>'.$text.'</a></li>';
   }
$url= site_url();

    if( $fax ) { ?> <?php
      echo '
    <li><a href="javascript:void(0);"><img src="'.$url.'/wp-content/themes/twentyseventeen-child/images/fax_icon.webp" alt="fax_icon">'.$fax.'</a></li>';
   }


    // Check if text is set
   if( $text1 ) {
      echo '<li><a href="mailto:law@thelawdesk.org"><i class="fas fa-envelope"></i>'.$text1.'</a></li>';
   }
   

   
    // Check if textarea is set
   if( $textarea ) {
     echo '<li><p><i class="fas fa-map-marker-alt"></i>'.$textarea.'</p></li>';
   }
  
  
  
   echo '</ul>';
  // echo $after_widget;
}
}

// register widget
add_action('widgets_init', create_function('', 'return register_widget("wp_my_plugin");'));





/*-------------------------------------------------------------*/
class wp_contact extends WP_Widget {

	// constructor
    function wp_contact() {
        parent::WP_Widget(false, $name = __('Contact Phone No Widget', 'wp_widget_plugin') );
    }
	// widget form creation
function form($instance) {

// Check values
if( $instance) {
     $title = esc_attr($instance['title']);
     $phone1 = esc_attr($instance['phone1']);
	  $phone2 = esc_attr($instance['phone2']);
	
} else {
     $title = '';
     $phone1 = '';
	  $phone2 = '';
	
}
?>



<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Contact No Title', 'wp_widget_plugin'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
</p>

<p>
<label for="<?php echo $this->get_field_id('phone1'); ?>"><?php _e('Phone1:', 'wp_widget_plugin'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('phone1'); ?>" name="<?php echo $this->get_field_name('phone1'); ?>" type="text" value="<?php echo $phone1; ?>" />
</p>


<p>
<label for="<?php echo $this->get_field_id('phone2'); ?>"><?php _e('Phone2:', 'wp_widget_plugin'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('phone2'); ?>" name="<?php echo $this->get_field_name('phone2'); ?>" type="text" value="<?php echo $phone2; ?>" />
</p>



<?php
}
	// update widget
function update($new_instance, $old_instance) {
      $instance = $old_instance;
      // Fields
      $instance['title'] = strip_tags($new_instance['title']);
      $instance['phone1'] = strip_tags($new_instance['phone1']);
	   $instance['phone2'] = strip_tags($new_instance['phone2']);
	  
      
     return $instance;
}

	// display widget
function widget($args, $instance) {
   extract( $args );
   // these are the widget options
   $title = apply_filters('widget_title', $instance['title']);
   $phone1 = $instance['phone1'];
    $phone2 = $instance['phone2'];
       
   echo $before_widget;
   // Display the widget
   echo '<div class="widget-text wp_widget_plugin_box reserv-side">';

   // Check if title is set
   if ( $title ) {
      echo $before_title . $title . $after_title;
   }

   
    // Check if textarea is set
   if( $phone1 ) {
     echo '<p class="wp_widget_plugin_textarea worn-text">'.$phone1.'</p>';
   }
   // Check if text is set
   if( $phone2 ) { ?> <?php 
      echo '
	  <p class="wp_widget_plugin_text number-r">'.$phone2.'</p>';
   }
   
   
   
  
   echo '</div>';
   echo $after_widget;
}
}

// register widget
add_action('widgets_init', create_function('', 'return register_widget("wp_contact");'));




