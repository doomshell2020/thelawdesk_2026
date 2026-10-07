<?php
/**
Template Name: Associateship
 */

get_header(); ?> 

<section id="inrPgBnr">
<?php
             $arg=array(
            'post_type' => 'page' ,
            'orderby' => 'date' ,
            'order' => 'DESC' ,
            'posts_per_page' => -1,
            'post__in'=> ['161'],
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


<section id="internshipSec">
    <div class="container">
        <div class="row">
        <?php
             $arg=array(
            'post_type' => 'page' ,
            'orderby' => 'date' ,
            'order' => 'DESC' ,
            'posts_per_page' => -1,
            'post__in'=> ['161'],
             );
            $service = new WP_Query($arg);
            while ( $service ->have_posts() ) : $service ->the_post();
           ?>
           <div class="col-md-6">
           <div class="internshipBx">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dots.png" alt="" class="dotsImg animationTpBtm">
                        <div class="internshipImg">
                        <?php  $associat_img = get_field( "associateship_image_field"); 
	
	?>
                                           
        <img src="<?php echo $associat_img; ?>" alt="" >
      
                        </div>
                    
                        <!--  -->
                    </div>
           </div>
<!--  -->

            <div class="col-md-6">
                <div class="internshipCnt">
                <?php  $associat_subheading = get_field( "associateship_section_heading"); 
	
	?>
                                           
       <hgroup class="secHeading">
<h2><?php echo $associat_subheading; ?></h2>
</hgroup>
<p><?php echo get_the_content(); ?></p>

<h6 class="internshipQuote">
Your career in law starts with us at The Law Desk.
            </h6>
                </div>
            </div>
            <!--  -->
            <?php endwhile; ?>

        </div>
    </div>
</section>




<?php get_footer(); ?>