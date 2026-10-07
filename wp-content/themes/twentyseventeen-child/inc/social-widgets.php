<?php
// =============================== Social Media ======================================
class sociallink extends WP_Widget {

    // Proper constructor
    public function __construct() {
        $widget_ops = array(
            'classname'   => 'widget_social_media',
            'description' => 'Displays social media links.'
        );
        parent::__construct(
            'widget_sociallink',            // Base ID
            __('Social Media', 'text_domain'), // Name shown in admin
            $widget_ops
        );
    }

    // Front-end display
    public function widget($args, $instance) {
        extract($args, EXTR_SKIP);

        $title      = !empty($instance['title']) ? apply_filters('widget_title', $instance['title']) : '';
        $facebook   = !empty($instance['facebook']) ? $instance['facebook'] : '';
        $twitter    = !empty($instance['twitter']) ? $instance['twitter'] : '';
        $googleplus = !empty($instance['googleplus']) ? $instance['googleplus'] : '';

        echo $before_widget;

        if (!empty($title)) {
            echo '<h4>' . esc_html($title) . '</h4>';
        }
        ?>
        <ul class="social-links">
            <?php if ($facebook) : ?>
                <li><a href="<?php echo esc_url($facebook); ?>" target="_blank" title="LinkedIn" class="fab fa-linkedin-in"></a></li>
            <?php endif; ?>

            <?php if ($twitter) : ?>
                <li><a href="<?php echo esc_url($twitter); ?>" target="_blank" title="Twitter" class="fa fa-twitter"></a></li>
            <?php endif; ?>

            <?php if ($googleplus) : ?>
                <li><a href="<?php echo esc_url($googleplus); ?>" target="_blank" title="Google Plus" rel="publisher" class="fa fa-google-plus"></a></li>
            <?php endif; ?>
        </ul>
        <?php
        echo $after_widget;
    }

    // Save widget form values
    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title']      = sanitize_text_field($new_instance['title']);
        $instance['facebook']   = esc_url_raw($new_instance['facebook']);
        $instance['twitter']    = esc_url_raw($new_instance['twitter']);
        $instance['googleplus'] = esc_url_raw($new_instance['googleplus']);
        return $instance;
    }

    // Backend form
    public function form($instance) {
        $title      = !empty($instance['title']) ? esc_attr($instance['title']) : '';
        $facebook   = !empty($instance['facebook']) ? esc_attr($instance['facebook']) : '';
        $twitter    = !empty($instance['twitter']) ? esc_attr($instance['twitter']) : '';
        $googleplus = !empty($instance['googleplus']) ? esc_attr($instance['googleplus']) : '';
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>">Widget Title:</label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>"
                   name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text"
                   value="<?php echo esc_attr($title); ?>">
        </p>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id('facebook')); ?>">LinkedIn URL:</label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('facebook')); ?>"
                   name="<?php echo esc_attr($this->get_field_name('facebook')); ?>" type="text"
                   value="<?php echo esc_attr($facebook); ?>">
        </p>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id('twitter')); ?>">Twitter URL:</label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('twitter')); ?>"
                   name="<?php echo esc_attr($this->get_field_name('twitter')); ?>" type="text"
                   value="<?php echo esc_attr($twitter); ?>">
        </p>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id('googleplus')); ?>">Google Plus URL:</label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('googleplus')); ?>"
                   name="<?php echo esc_attr($this->get_field_name('googleplus')); ?>" type="text"
                   value="<?php echo esc_attr($googleplus); ?>">
        </p>
        <?php
    }
}

// Register the widget
function register_sociallink_widget() {
    register_widget('sociallink');
}
add_action('widgets_init', 'register_sociallink_widget');
?>
