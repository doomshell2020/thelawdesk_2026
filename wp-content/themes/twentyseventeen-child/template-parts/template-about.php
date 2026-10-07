<?php
/**
Template Name: About Us
 */

get_header(); ?> 

<section id="inrPgBnr">
<?php
             $arg=array(
            'post_type' => 'page' ,
            'orderby' => 'date' ,
            'order' => 'DESC' ,
            'posts_per_page' => -1,
            'post__in'=> ['5'],
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


<section id="aboutSec" class="about-pg">
    <div class="container">
        <div class="row">
        <?php
             $arg=array(
            'post_type' => 'page' ,
            'orderby' => 'date' ,
            'order' => 'DESC' ,
            'posts_per_page' => -1,
            'post__in'=> ['5'],
             );
            $service = new WP_Query($arg);
            while ( $service ->have_posts() ) : $service ->the_post();
           ?>
            <div class="col-lg-6">
                <div class="aboutImg">
                
                <div class="row">

                <div class="col-lg-6">
                    <div class="aboutImgSplit">
                        <div class="aboutImgPart aboutImgLeft">
                        <?php  $aboutus_img2 = get_field( "image_field_2"); 
	
	?>
                                           
        <img src="<?php echo $aboutus_img2; ?>" alt="" >
                        </div>
                    
                        <!--  -->
                    </div>
                    </div>
                    <!--  -->

                    <div class="col-lg-6 d-none d-lg-block">
                        <div class="aboutImgPart aboutImgRight">
                        <?php  $aboutus_img1 = get_field( "image_field_1"); 
                        // print_r($aboutus_img1);
	
	?>
                                           
        <img src="<?php echo $aboutus_img1; ?>" alt="" >
                        </div>
                    </div>
                    <!--  -->

                   
                </div>
         
                </div>
            </div>
            <!--  -->

            <div class="col-lg-6">
                <div class="aboutCnt">
<h2>Welcome to The Law Desk</h2>
<?php echo get_the_content(); ?>
                </div>
            </div>
            <!--  -->
            <?php endwhile; ?>

        </div>
<div class="about-cnt2">
       <?php  $aboutus_para = get_field( "about_para_field"); 
	
	?>
                                           
   <?php echo $aboutus_para; ?>
</div>

    </div>
</section>



<?php get_footer(); ?>