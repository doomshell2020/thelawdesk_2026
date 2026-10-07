<?php
/**
Template Name: Practice 
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
		<div class="bnr-img-pg2"><?php $url= wp_get_attachment_url(get_post_thumbnail_id($post->ID));?>
				<!--<img src="<?php //echo $url?>">-->	
                <?php echo the_post_thumbnail('full'); ?>	</div>
        <header class="entry-header">
			<h1 class="entry-title"><?php the_title(); ?></h1>
		</header>
<?php $the_query = new WP_Query( 'page_id=6' );
      while ( $the_query->have_posts() ) :	$the_query->the_post();
	  ?>
<div class="entry-content">
<p style="text-align:justify">
	  <?php
	  echo get_the_content(); ?> </p></div> <?php
	  endwhile;
	  wp_reset_postdata();?>
	  <div class="clear"></div>
	    <div class="prat praticeinner">
		<?php wp_nav_menu( array( 'theme_location' => 'Secondry', 'menu_class' => 'nav-menu', 'menu_id' => 'Secondry-menu' ) ); ?>
        
        </div>
        
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
