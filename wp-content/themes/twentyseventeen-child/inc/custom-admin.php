<?php
/* ============================================================
   CUSTOM POST TYPES
   ============================================================ */

/* ---------- Members ---------- */
function codex_custom_init_members() {
	$labels = [
		'name'               => 'Members',
		'singular_name'      => 'Member',
		'add_new'            => 'Add New',
		'add_new_item'       => 'Add New Member',
		'edit_item'          => 'Edit Member',
		'new_item'           => 'New Member',
		'all_items'          => 'All Members',
		'view_item'          => 'View Member',
		'search_items'       => 'Search Members',
		'not_found'          => 'No Members found',
		'not_found_in_trash' => 'No Members found in Trash',
		'menu_name'          => 'Members'
	];
	$args = [
		'labels'             => $labels,
		'public'             => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'has_archive'        => true,
		'rewrite'            => ['slug' => 'member'],
		'menu_position'      => 5,
		'supports'           => ['title', 'editor', 'thumbnail']
	];
	register_post_type('member', $args);
}
add_action('init', 'codex_custom_init_members');

/* ---------- Achievements ---------- */
function codex_custom_init_achievements() {
	$labels = [
		'name'               => 'Achievements',
		'singular_name'      => 'Achievement',
		'add_new'            => 'Add New',
		'add_new_item'       => 'Add New Achievement',
		'edit_item'          => 'Edit Achievement',
		'new_item'           => 'New Achievement',
		'all_items'          => 'All Achievements',
		'view_item'          => 'View Achievement',
		'search_items'       => 'Search Achievements',
		'not_found'          => 'No Achievement found',
		'not_found_in_trash' => 'No Achievements found in Trash',
		'menu_name'          => 'Achievements'
	];
	$args = [
		'labels'        => $labels,
		'public'        => true,
		'show_ui'       => true,
		'has_archive'   => true,
		'rewrite'       => ['slug' => 'achievement'],
		'menu_position' => 5,
		'supports'      => ['title', 'editor', 'thumbnail']
	];
	register_post_type('achievement', $args);
}
add_action('init', 'codex_custom_init_achievements');

/* ---------- Downloads ---------- */
function codex_custom_init_download() {
	$labels = [
		'name'               => 'Downloads',
		'singular_name'      => 'Download',
		'add_new'            => 'Add New',
		'add_new_item'       => 'Add New Download',
		'edit_item'          => 'Edit Download',
		'new_item'           => 'New Download',
		'all_items'          => 'All Downloads',
		'view_item'          => 'View Download',
		'search_items'       => 'Search Downloads',
		'not_found'          => 'No Downloads found',
		'not_found_in_trash' => 'No Downloads found in Trash',
		'menu_name'          => 'Downloads'
	];
	$args = [
		'labels'        => $labels,
		'public'        => true,
		'show_ui'       => true,
		'has_archive'   => true,
		'rewrite'       => ['slug' => 'download'],
		'menu_position' => 5,
		'supports'      => ['title']
	];
	register_post_type('download', $args);
}
add_action('init', 'codex_custom_init_download');

/* ---------- Cases ---------- */
function codex_custom_init_cases() {
	$labels = [
		'name'               => 'Cases',
		'singular_name'      => 'Case',
		'add_new'            => 'Add New',
		'add_new_item'       => 'Add New Case',
		'edit_item'          => 'Edit Case',
		'new_item'           => 'New Case',
		'all_items'          => 'All Cases',
		'view_item'          => 'View Case',
		'search_items'       => 'Search Cases',
		'not_found'          => 'No Cases found',
		'not_found_in_trash' => 'No Cases found in Trash',
		'menu_name'          => 'Cases'
	];
	$args = [
		'labels'        => $labels,
		'public'        => true,
		'show_ui'       => true,
		'has_archive'   => true,
		'rewrite'       => ['slug' => 'case'],
		'menu_position' => 5,
		'supports'      => ['title', 'editor']
	];
	register_post_type('case', $args);
}
add_action('init', 'codex_custom_init_cases');

/* ---------- Clients ---------- */
function codex_custom_init_clients() {
	$labels = [
		'name'               => 'Clients',
		'singular_name'      => 'Client',
		'add_new'            => 'Add New',
		'add_new_item'       => 'Add New Client',
		'edit_item'          => 'Edit Client',
		'new_item'           => 'New Client',
		'all_items'          => 'All Clients',
		'view_item'          => 'View Client',
		'search_items'       => 'Search Clients',
		'not_found'          => 'No Clients found',
		'not_found_in_trash' => 'No Clients found in Trash',
		'menu_name'          => 'Clients'
	];
	$args = [
		'labels'        => $labels,
		'public'        => true,
		'show_ui'       => true,
		'has_archive'   => true,
		'rewrite'       => ['slug' => 'client'],
		'menu_position' => 5,
		'supports'      => ['title', 'thumbnail']
	];
	register_post_type('client', $args);
}
add_action('init', 'codex_custom_init_clients');

/* ---------- News ---------- */
function codex_custom_init_news() {
	$labels = [
		'name'          => 'News',
		'singular_name' => 'News',
		'menu_name'     => 'News'
	];
	$args = [
		'labels'        => $labels,
		'public'        => true,
		'show_ui'       => true,
		'has_archive'   => true,
		'rewrite'       => ['slug' => 'my-news'],
		'menu_position' => 5,
		'supports'      => ['title', 'editor']
	];
	register_post_type('my-news', $args);
}
add_action('init', 'codex_custom_init_news');

/* ---------- Practice Area ---------- */
function codex_custom_init_practice_area() {
	$labels = [
		'name'          => 'Practice Area',
		'singular_name' => 'Practice Area',
		'menu_name'     => 'Practice Area'
	];
	$args = [
		'labels'        => $labels,
		'public'        => true,
		'show_ui'       => true,
		'has_archive'   => true,
		'rewrite'       => ['slug' => 'practice_area'],
		'menu_position' => 5,
		'supports'      => ['title', 'editor', 'thumbnail']
	];
	register_post_type('practice_area', $args);
}
add_action('init', 'codex_custom_init_practice_area');

/* ---------- Client Testimonial ---------- */
function codex_custom_init_client_testimonial() {
	$labels = [
		'name'          => 'Client Testimonial',
		'singular_name' => 'Client Testimonial',
		'menu_name'     => 'Client Testimonial'
	];
	$args = [
		'labels'        => $labels,
		'public'        => true,
		'show_ui'       => true,
		'has_archive'   => true,
		'rewrite'       => ['slug' => 'client_testimonial'],
		'menu_position' => 5,
		'supports'      => ['title', 'editor', 'thumbnail']
	];
	register_post_type('client_testimonial', $args);
}
add_action('init', 'codex_custom_init_client_testimonial');

/* ============================================================
   CASE POST TYPE AUTHOR DROPDOWN MODS
   ============================================================ */
add_action('admin_head', 'wpse39084_replace_post_meta_author');
add_action('admin_menu', 'wpse50827_author_metabox_remove');
add_action('post_submitbox_misc_actions', 'wpse50827_author_metabox_move');

function wpse39084_replace_post_meta_author() {
	$screen = get_current_screen();
	if ($screen->id === 'case' || $screen->id === 'edit-case') {
		add_filter('wp_dropdown_users', function ($args = '') {
			$post = get_post();
			$selected = $post->post_author;
			$siteusers = get_users(['orderby' => 'nicename', 'order' => 'ASC']);
			$output = '<select name="post_author_override" id="post_author_override">';
			foreach ($siteusers as $user) {
				$sel = selected($selected, $user->ID, false);
				$output .= '<option value="' . esc_attr($user->ID) . '"' . $sel . '>' . esc_html($user->user_nicename) . '</option>';
			}
			$output .= '</select>';
			return $output;
		});
	}
}
function wpse50827_author_metabox_remove() {
	remove_meta_box('authordiv', 'case', 'normal');
}
function wpse50827_author_metabox_move() {
	global $post_ID;
	$post = get_post($post_ID);
	if ($post->post_type !== 'case') return;
	echo '<div id="author" class="misc-pub-section">Client: ';
	post_author_meta_box($post);
	echo '</div>';
}

/* ============================================================
   UPDATED FOOTER LINK WIDGET  (PHP 8 Compatible)
   ============================================================ */
class flink extends WP_Widget {
	public function __construct() {
		parent::__construct(
			'footer_link',
			__('Footer Link', 'text_domain'),
			['description' => __('Footer Link widget', 'text_domain')]
		);
	}

	public function widget($args, $instance) {
		echo $args['before_widget'];
		$title = !empty($instance['title']) ? apply_filters('widget_title', $instance['title']) : '';
		if ($title) {
			echo $args['before_title'] . esc_html($title) . $args['after_title'];
		}

		echo '<ul class="footer-links">';
		// category 6 = link category ID; adjust as needed
		wp_list_bookmarks([
			'category'   => 6,
			'title_li'   => '',
			'categorize' => false,
			'orderby'    => 'id'
		]);
		echo '</ul>';

		echo $args['after_widget'];
	}

	public function form($instance) {
		$title = !empty($instance['title']) ? esc_attr($instance['title']) : '';
		?>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('title')); ?>">
				<?php _e('Widget Title:', 'text_domain'); ?>
			</label>
			<input class="widefat"
				   id="<?php echo esc_attr($this->get_field_id('title')); ?>"
				   name="<?php echo esc_attr($this->get_field_name('title')); ?>"
				   type="text"
				   value="<?php echo $title; ?>" />
		</p>
		<?php
	}

	public function update($new_instance, $old_instance) {
		$instance = [];
		$instance['title'] = sanitize_text_field($new_instance['title']);
		return $instance;
	}
}

function register_custom_widgets() {
	register_widget('flink');
}
add_action('widgets_init', 'register_custom_widgets');
