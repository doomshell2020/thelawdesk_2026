<?php
/**
Template Name: Internship
 */

get_header(); ?> 

<section id="inrPgBnr">
<?php
             $arg=array(
            'post_type' => 'page' ,
            'orderby' => 'date' ,
            'order' => 'DESC' ,
            'posts_per_page' => -1,
            'post__in'=> ['155'],
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
            'post__in'=> ['155'],
             );
            $service = new WP_Query($arg);
            while ( $service ->have_posts() ) : $service ->the_post();
           ?>
           <div class="col-md-6">
           <div class="internshipBx">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dots.png" alt="" class="dotsImg animationTpBtm">
                        <div class="internshipImg">
                        <?php  $internship_img = get_field( "internship_image_field"); 
	
	?>
                                           
        <img src="<?php echo $internship_img; ?>" alt="" >
      
                        </div>
                   
                        <!--  -->
                    </div>
           </div>
<!--  -->

            <div class="col-md-6">
                <div class="internshipCnt">
                <?php  $internship_subheading = get_field( "internship_sub_heading"); 
	
	?>
                                           
       <hgroup class="secHeading">
<h2><?php echo $internship_subheading; ?></h2>
</hgroup>
<p><?php echo get_the_content(); ?></p>

<h6 class="internshipQuote">
"Where passion meets profession — begin your legal journey with us."
            </h6>
                </div>
            </div>
            <!--  -->
            <?php endwhile; ?>

        </div>
    </div>
</section>

<section id="internshipFrm">
    <div class="container">
        <hgroup class="secHeading">
            <h2>Internship</h2>
            <p>Any candidate interested in interning with The Law Desk may fill this form</p>
        </hgroup>
        <div class="internshipFrmBx">
        <?php echo do_shortcode('[contact-form-7 id="977" title="inter form" do_not_autop="true"]'); ?>
        </div>
    </div>
</section>



<?php get_footer(); ?>