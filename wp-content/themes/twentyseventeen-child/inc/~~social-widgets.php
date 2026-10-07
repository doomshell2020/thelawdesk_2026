<?php
// =============================== Social Media ======================================
class sociallink extends WP_Widget {
	function sociallink() {
	//Constructor
		$widget_ops = array('classname' => 'widget Social Media', 'description' => 'social Media widget' );		
		$this->WP_Widget('widget_sociallink', 'Social Media', $widget_ops);
	}
	function widget($args, $instance) {
	// prints the widget
		extract($args, EXTR_SKIP);
		$title = empty($instance['title']) ? '' : apply_filters('widget_title', $instance['title']);
		$facebook = empty($instance['facebook']) ? '' : apply_filters('widget_facebook', $instance['facebook']);
		$twitter = empty($instance['twitter']) ? '' : apply_filters('widget_twitter', $instance['twitter']);
		$googleplus = empty($instance['googleplus']) ? '' : apply_filters('widget_googleplus', $instance['googleplus']);
		
		 ?>				
         <?php if ( $title <> "" ) { ?><?php echo '<h4>'. $title.'</h4>'; ?><?php } ?>		
<ul>
                <li><?php if ( $facebook <> "" ) { ?><a href="<?php echo $facebook; ?>" target="_blank" title="Linkedin" class="fab fa-linkedin-in"></a><?php } ?></li>
				 <li><?php if ( $twitter <> "" ) { ?> <a href="<?php echo $twitter; ?>" target="_blank" title="Twitter" class="fa fa-twitter"></a><?php } ?></li>
            
              <li>  <?php if ( $googleplus <> "" ) { ?><a href="<?php echo $googleplus; ?>" target="_blank" title="googleplus" rel="publisher" class="fa fa-google-plus"></a><?php } ?></li>
             
              
  </ul>          
	<?php
	}
	function update($new_instance, $old_instance) {
	//save the widget
		$instance = $old_instance;		
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['facebook'] = ($new_instance['facebook']);
		$instance['twitter'] = ($new_instance['twitter']);
		$instance['googleplus'] = ($new_instance['googleplus']);
		
		return $instance;
	}
	function form($instance) {
	//widgetform in backend
		$instance = wp_parse_args( (array) $instance, array( 'title' => '' ) );		
		$title = strip_tags($instance['title']);
		$facebook = ($instance['facebook']);
		$twitter = ($instance['twitter']);
		$googleplus = ($instance['googleplus']);	
				
?>
<p><label for="<?php echo $this->get_field_id('title'); ?>">Widget Title: <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo attribute_escape($title); ?>" /></label></p>

<p><label for="<?php echo $this->get_field_id('facebook'); ?>">Linked IN URL: <input class="widefat" id="<?php echo $this->get_field_id('facebook'); ?>" name="<?php echo $this->get_field_name('facebook'); ?>" type="text" value="<?php echo attribute_escape($facebook); ?>" /></label></p>

<p><label for="<?php echo $this->get_field_id('twitter'); ?>">Twitter URL: <input class="widefat" id="<?php echo $this->get_field_id('twitter'); ?>" name="<?php echo $this->get_field_name('twitter'); ?>" type="text" value="<?php echo attribute_escape($twitter); ?>" /></label></p>

<p><label for="<?php echo $this->get_field_id('googleplus'); ?>">Google Plus URL : <input class="widefat" id="<?php echo $this->get_field_id('googleplus'); ?>" name="<?php echo $this->get_field_name('googleplus'); ?>" type="text" value="<?php echo attribute_escape($googleplus); ?>" /></label></p>


 
<?php
	}}
register_widget('sociallink');


?>