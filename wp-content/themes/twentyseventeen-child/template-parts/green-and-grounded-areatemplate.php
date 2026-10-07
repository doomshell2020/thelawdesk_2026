<?php
   /**Template Name: Green and Grounded*/
   get_header(); ?>

<section id="inrPgBnr">
<?php
             $arg=array(
            'post_type' => 'page' ,
            'orderby' => 'date' ,
            'order' => 'DESC' ,
            'posts_per_page' => -1,
            'post__in'=> ['11147'],
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

<section id="green-ground-pg">
    <div class="container">
         <?php  $green_content = get_field( "content_field"); 
	
	?>
                                           
   <?php echo $green_content; ?>
    </div>
</section>

<?php /*<?php get_sidebar(); ?>*/ ?>
<?php get_footer(); ?>