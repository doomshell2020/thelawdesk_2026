<?php

/*
 Template Name: Our Clients
*/
get_header(); ?>

<div id="primary" class="content-area">
	<div id="content" class="site-content " role="main">
 <header class="entry-header ">
					<h1 class="entry-title"><?php echo get_the_title(); ?></h1>
					
					</header>
<div class="client-box" ><!-- Our Clients div start-->

          
		
		
		
		<ul class="">
				
				
			
		 
		 <?php
		$args = array(
    'post_type' => 'client',
    'posts_per_page'=>-1,
    'post_status'=>'publish',
    'orderby'=>'date',
    'order'=>'Desc'
	
   
    
 );

		$client_qry = new WP_Query($args );
		
		
		while ( $client_qry->have_posts()) : $client_qry->the_post();
		?>
		<li class="article">
		<?php	$url=wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
		<div class="">
		
      <?php echo the_post_thumbnail('full');?>

            
		
	      </div>
    	</li>
	    <?php  endwhile;?>
        
		</ul>	
		</div><!-- Our Clients Div ENd---->
        </div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>