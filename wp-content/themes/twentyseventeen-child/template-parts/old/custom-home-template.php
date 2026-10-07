<?php
/**
Template Name: custom Home
 */

get_header(); ?>

<script src="<?php echo get_template_directory_uri();?>/js/jquery-1.8.2.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri();?>/js/jquery.bxslider.min.js" type="text/javascript"></script>


<style type="text/css">
blockquote
{
    clear: both;
    font-style: italic;
    margin-left: 10px;
    margin-right: 10px;
    padding: 10px 10px 0 50px;
    position: relative;
    quotes: none;
  /* background: url(open-quote.png) 0 0 no-repeat;*/
    border: 0px;
    font-size: 120%;
    line-height: 200%;
}
</style>
<script type="text/javascript">
         $(document).ready(function () {           
             $('.bxslider').bxSlider({
                 mode: 'vertical',
                 slideMargin: 5,
                 auto:true
             });             
         });
    </script>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
		<!-- start about us div-->
		<div class="about-main"> 
<?php 
$blog_query = new WP_Query('page_id=5');
		
		while ( $blog_query->have_posts() ) : $blog_query->the_post();
		?>
		
        <div class="about-box">
		
	
        
		<div class="wrapper"><div class="bdr"><h2><?php echo get_the_title();?></h2></div>
	<p><?php echo substr(get_the_content(),0,450); ?></p>
	<a href="<?php the_permalink();?>">Read more</a>
	</div>
	<?php  endwhile;?></div>
	</div>

		
		
		<!-- End About Us Div-->
		
		
		<!--- Div Start for News--->
        
		<div class="pr-nw">
       <div class="wrapper">
        <div class="prat">
		<h2>Practice Area</h2><?php wp_nav_menu( array( 'theme_location' => 'Secondry', 'menu_class' => 'nav-menu', 'menu_id' => 'Secondry-menu' ) ); ?>
        
        </div>
				<div class="cnews">
		
               

	<h2 class="h-title">News  Feeds</h2>	
	
		<ul id="ticker_01" class="ticker">	

		
			<?php
		$args = array(
    'post_type' => 'my-news',
    'posts_per_page'=>8,
    'post_status'=>'publish',
    'orderby'=>'date',
    'order'=>'desc'
    
 );
		$blog_query = new WP_Query($args );
		
		while ( $blog_query->have_posts() ) : $blog_query->the_post();
		?>
		<li>
		
		<a class="news-t" href="<?php the_permalink(); ?>">
              <?php echo substr( get_the_title(),0,45); ?></a>
		 
		
		
	          
		
		 </li>
		<?php  endwhile;?>	
		</ul>
		
		
					

		
		
              
	
		
		
		
			
		</div>	</div>

		</div>
		<!--- end of News Div-->
		
		<!--- start Testimonials---->
		
		<div class="test" ><!-- testimonials div start-->
				
<?php 
$test_query = new WP_Query('page_id=28');
		
		while ( $test_query->have_posts() ) : $test_query->the_post();
		?>
		 <div class="test-box">
		
	
        
		<h2><?php echo get_the_title();?></h2>
	<p><?php echo substr(get_the_content(),0,600); ?><a href="<?php the_permalink();?>">Read more</a></p>
	
	</div>
	<?php  endwhile;?>
	</div>

                   <!-- testimonials Div ENd---->
		
<!--- Start Of Our Clients ------------->
<div class="client-box wrapper" ><!-- Our Clients div start-->

            	
            
	<h2 class="h-title">Our Clients</h2>
		
		
		<ul class="owl-carousel">
				
				
			
		 
		 <?php
		$args = array(
    'post_type' => 'client',
    'posts_per_page'=>-1,
    'post_status'=>'publish',
    'orderby'=>'date',
    'order'=>'Asc'
	
   
    
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


		
		
		
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
<script>

    


    function tick2(){
        $('#ticker_02 li:first').slideUp( function () { $(this).appendTo($('#ticker_02')).slideDown(); });
        $('#ticker_01 li:first').slideUp( function () { $(this).appendTo($('#ticker_01')).slideDown(); });
        $('#ticker_0 li:first').slideUp( function () { $(this).appendTo($('#ticker_0')).slideDown(); });
    }
    
    setInterval(function(){ tick2 () }, 3000);

    
    


    /**
     * USE TWITTER DATA
     */

    

</script>