<?php

/*
 Template Name: Our Clients
*/
get_header(); ?>



<section id="inrPgBnr">
<?php
             $arg=array(
            'post_type' => 'page' ,
            'orderby' => 'date' ,
            'order' => 'DESC' ,
            'posts_per_page' => -1,
            'post__in'=> ['10'],
             );
            $service = new WP_Query($arg);
            while ( $service ->have_posts() ) : $service ->the_post();
           ?>
  <?php $url=wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
  <img src="<?php echo $url; ?>" alt="<?php echo get_the_title(); ?>" />
    <div class="inrPgBnrOverlay"></div>
    <div class="inrPgBnrCnt">
        <div class="container">
<h1><?php echo get_the_title(); ?></h1>
        </div>
    </div>
    <?php endwhile; ?>
</section>



          
		<section id="our_clientsec" class="our_clientsecPg">
			<div class="container">

		
		
		
		<ul class="clientsLogoUl">
				
				
		<?php
                            $args = array(
                            'post_type' => 'client',
                            'posts_per_page'=>-1,
                            'post_status'=>'publish',
                            'orderby'=>'date',
                            'order'=>'ASC'
                            );
                            $client_qry = new WP_Query($args );
                            while ( $client_qry->have_posts()) : $client_qry->the_post();
                        ?>
<li>
	<div class="clientLogoDv">
	<?php $url=wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
	<img src="<?php echo $url; ?>" alt="" />
	</div>
</li>

<?php  endwhile;?>


</ul>	
		</div>
		</section>
		 
	<?php /*	 <?php
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
	    <?php  endwhile;?> */ ?>
        
		


	
<?php get_sidebar(); ?>
<?php get_footer(); ?>