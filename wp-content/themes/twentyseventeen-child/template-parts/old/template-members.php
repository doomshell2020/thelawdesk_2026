<?php
/**
Template Name: Members
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
<?php
		
//$author_posts = get_posts($argspos);


		
		 $the_query = new WP_Query( 'page_id=8' );?>
			<?php while ( $the_query->have_posts() ) :	$the_query->the_post();?>	
<div class="bnr-img-pg2"><?php $url= wp_get_attachment_url(get_post_thumbnail_id($post->ID));?>
				<!--<img src="<?php //echo $url?>">-->	<?php //echo the_post_thumbnail('full');?>	</div>
<header class="entry-header">
			<h1 class="entry-title"><?php the_title(); ?></h1>
		</header>				
			<div class="mem-con"><?php the_content();?></div>
			<?php endwhile;?>
			<?php $argspos=array(


'post_type'=>'member',
'post_status' => array('publish'),
'posts_per_page'=>-1,
  'meta_key' =>'member_position',
'orderby'=> 'meta_value_num',
 'order'=>'Asc'



);
?>
		
			<?php $the_query = new WP_Query($argspos); ?>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<div class="member">
				
				<div class="member-img"><?php //the_post_thumbnail( array(100,100) ); ?> <?php the_post_thumbnail('medium'); ?></div>
                <div class="member-info">
                <div class="member-title"><?php echo get_the_title(); ?></div>
                <?php if(get_field('e-mail')){ ?><div class="member-mail"><strong>E-mail: </strong>
                 <a href="mailto:<?php the_field('e-mail');?>"><?php the_field('e-mail'); ?></a></div><?php }?>
                <?php if(get_field('degrees')){ ?><div class="member-deg"><h2>Qualification:</h2> &nbsp;
 <?php the_field('degrees'); ?></div><?php }?>

						
				
			<?php if(get_field('practice_areas')){ ?><div class="member-pra"><h2>Area of Expertise:</h2> &nbsp;
 <?php the_field('practice_areas'); ?></div><?php }?>
				</div> 
				
				</div>
			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
