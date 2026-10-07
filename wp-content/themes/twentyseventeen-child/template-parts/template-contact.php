<?php
/**
Template Name: Contact Us
 */

get_header(); ?> 

<section id="inrPgBnr">
<?php
             $arg=array(
            'post_type' => 'page' ,
            'orderby' => 'date' ,
            'order' => 'DESC' ,
            'posts_per_page' => -1,
            'post__in'=> ['12'],
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


<section id="contactPgInfo">
    <div class="container">
      
        <?php
                $args=array(
                  'post_type' => 'contact_info',
                  'post_status' => 'publish',
                  'posts_per_page' => 1,
                  'order' => 'ASC',
                );
                $my_query = new WP_Query($args);
                if( $my_query->have_posts() ) {
                  while ($my_query->have_posts()) : $my_query->the_post(); ?>

<?php  $contact_address = get_field( "address", $service->ID); ?>
                                        <?php  $contact_address_url = get_field( "address_url", $service->ID); ?>

                                        <?php  $contact_phone = get_field( "phone", $service->ID); ?>
                                        <?php  $contact_fax = get_field( "fax", $service->ID); ?>
                                        <?php  $contact_email = get_field( "email", $service->ID); ?>

<div class="row">
<div class="col-md-4 col-sm-6">
    <div class="contctBx">
    <i class="fa fa-phone" aria-hidden="true"></i>
    <h4>Phone</h4> <a href="tel:<?php echo $contact_phone; ?>">
                                                <?php echo $contact_phone; ?>
                                            </a>
    </div> 
</div>
<!--  -->

<div class="col-md-4 col-sm-6">
    <div class="contctBx">
    <i class="fa fa-envelope" aria-hidden="true"></i>

    <h4>Email</h4> <a href="tel:<?php echo $contact_email; ?>">
                                                <?php echo $contact_email; ?>
                                            </a>
    </div>
</div>
<!--  -->

<div class="col-md-4 col-12">
    <div class="contctBx">
    <i class="fa fa-map-marker" aria-hidden="true"></i>
    <h4>Address</h4> <a href="tel:<?php echo $contact_address_url; ?>">
                                                <?php echo $contact_address; ?>
                                            </a>
    </div>
</div>
<!--  -->
</div>


<?php
                  endwhile;
                }
                wp_reset_query(); 
              ?>
    
    </div>
</section>


<section id="letsTlk" class="contctUsLetsTlkSec">
    <div class="container">
        
    <div class="letsTalkMdlDv">
            <div class="row">
                <div class="col-md-5">
                    <div class="letsTalkMdlLeft">
<h3>Let's Talk</h3>


<div class="letsTalkMdImg">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/letsTalkImg.png" alt="">
</div>
                    </div>
                </div>


                <div class="col-md-7">
                    <div class="letsTalkMdlRight">
<!--                         
<form action="">
    <div class="form-group">
        <div class="letsTlkInput letsTlkInputName">
        <i class="fi fi-rr-user"></i>
            <input type="text" name="name" placeholder="Your Name" class="form-control">
        </div>
    </div>


    <div class="form-group">
        <div class="letsTlkInput letsTlkInputEmail">
        <i class="fi fi-rr-envelope"></i>
            <input type="email" name="email" placeholder="Email" class="form-control">
        </div>
    </div>


    <div class="form-group"> 
        <div class="letsTlkInput letsTlkInputPhone">
        <i class="fi fi-rr-phone-flip"></i>
            <input type="text" name="phone" placeholder="Mobile" class="form-control">
        </div>
    </div>


    <div class="form-group">
        <div class="letsTlkInput letsTlkInputSubject">
        <i class="fi fi-rr-comment-alt"></i>
            <textarea  name="subject" placeholder="Subject" class="form-control"></textarea>
        </div>
    </div>


    <div class="form-group">
      
            <input type="submit" value="Submit" >
       
    </div>

</form> -->
<?php echo do_shortcode('[contact-form-7 id="11139" title="Contact"]'); ?>

                    </div>
                </div>
                <!--  -->
            </div>
        </div>
        <!-- close -->
    </div>
</section>
<style>
    #letsTlk p{
        color: black !important;
    }
</style>

<?php get_footer(); ?>