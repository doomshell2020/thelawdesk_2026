<?php
/**
Template Name: achievement
 */

get_header(); ?>

<!--To explore the opportunity at the Firm for Internship, resume/applications shall be sent at <b>hr@thelawdesk.org.</b> The HR of the firm will scrutinize the applications and candidates found eligible/suitable will then be contacted for a telephonic interview, subsequent to which, the final decision will be communicated.-->

<section id="carier_pgsec">
<div class="container">
<div class="row">
		<?php $argspos=array(
			'post_type'=>'achivement',
			'post_status' => array('publish'),
			'posts_per_page'=>-1,
		//	'meta_key' =>'member_position',
		//	'orderby'=> 'meta_value_num',
			'order'=>'Asc'
			);
		?>
		
			<?php $the_query = new WP_Query($argspos); ?>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); //print_r($the_query);
			?>	
			     <?php echo get_the_title(); ?>
				<?php echo get_the_content(); ?>
				<?php the_post_thumbnail('medium'); ?>
			<?php endwhile; ?>
</div>
</div>
</section>

<?php get_footer(); ?>
