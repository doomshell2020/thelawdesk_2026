<?php
/**
Template Name: Career
 */

get_header(); ?> 

<section id="inrPgBnr">
<?php
             $arg=array(
            'post_type' => 'page' ,
            'orderby' => 'date' ,
            'order' => 'DESC' ,
            'posts_per_page' => -1,
            'post__in'=> ['180'],
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



<section id="careerSec">
    <div class="container">
        <div class="row">
        <?php
             $arg=array(
            'post_type' => 'page' ,
            'orderby' => 'date' ,
            'order' => 'DESC' ,
            'posts_per_page' => -1,
            'post__in'=> ['180'],
             );
            $service = new WP_Query($arg);
            while ( $service ->have_posts() ) : $service ->the_post();
           ?>
            <div class="col-md-5">
                <div class="careereSecImg">
                <?php  $careerImg = get_field( "career_image", $service->ID); ?>


  
       <img src=" <?php echo $careerImg; ?>" alt="">
                </div>
            </div>
            <!--  -->

            <div class="col-md-7">
                <div class="careerCnt">
                <?php echo get_the_content(); ?>
                </div>
            </div>
            <!--  -->

            <?php endwhile; ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>