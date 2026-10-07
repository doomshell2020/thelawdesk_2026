<?php
/**
 * The main template file
 */

get_header(); ?>

<!-- <script src="<?php //echo get_stylesheet_directory_uri();?>/js/jquery-1.8.2.min.js" type="text/javascript"></script>
<script src="<?php //echo get_stylesheet_directory_uri();?>/js/jquery.bxslider.min.js" type="text/javascript"></script> -->

<style type="text/css">
blockquote {
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
<!-- <script type="text/javascript">
$(document).ready(function() {
    $('.bxslider').bxSlider({
        mode: 'vertical',
        slideMargin: 5,
        auto: true 
    });
});
</script> -->

<!-- <h1 class="hiddenTg">The Law Desk</h1> -->

<!--- Start Of Our Clients ------------->
<section id="slider">


    <?php
                            $args = array(
                            'post_type' => 'slider',
                            'posts_per_page'=>1,
                            'post_status'=>'publish',
                            'orderby'=>'date',
                            'order'=>'ASC'
                            );
                            $client_qry = new WP_Query($args );
                            while ( $client_qry->have_posts()) : $client_qry->the_post();
                        ?>

<?php $url=wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
<img src="<?php echo $url; ?>" alt="" />

<?php  endwhile;?>

<div class="sliderCntOverlay"></div>
    <div class="slider-cntnt">
    <div class="container">
  <h1>Welcome <strong>The Law Desk</strong></h1>
  <div class="text-center">
    <a href="<?php echo site_url(); ?>/about-us/" class="siteBtn siteBtnSlider">About Us</a>
  </div>
  </div>
</div>
</section>



<section id="industryPulseSec" class="industryPulse-home">
    <div class="container">
        <hgroup class="siteHeading">
            <h2>Industry Pulse</h2>
        </hgroup>
        <div class="row">
        <?php
                            $args = array(
                            'post_type' => 'industry_pulse',
                            'posts_per_page'=>4,
                            'post_status'=>'publish',
                            'orderby'=>'date',
                            'order'=>'ASC'
                            );
                            $client_qry = new WP_Query($args );
                            while ( $client_qry->have_posts()) : $client_qry->the_post();
                        ?>
<div class="col-lg-3 col-md-4 col-sm-6 col-12">
    <a class="indusPulsBx wow fadeInUp" href="<?php echo get_stylesheet_directory_uri(); ?>/images/Online-Gaming-Abridged-Compendium.pdf" target="_blank">
        <div class="indusPulsBxImg">
    <?php $url=wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
    <img src="<?php echo $url; ?>" alt="" />
    </div>
    <div class="indusPulsBxcNT"> 
<H6><?php echo get_the_date(); ?></H6>    
<H4><?php echo get_the_title(); ?></H4>    
</div>
                        </a>
    <!--  -->
</div>

<?php  endwhile;?>
        </div>
        <div class="text-center mt-4">
            <a href="<?php echo site_url(); ?>/industry-pulse/" class="siteBtn BtnBlck">View More</a>
        </div>
    </div>
</section>


<div id="our_clientsec">
    <div class="container">
        <div class="client-box">
            <hgroup class="siteHeading">
            <h2>Our Clients</h2>
            </hgroup>

            <div class="owl-carousel owl-theme owl-loaded clientLogoOwl">
    <div class="owl-stage-outer">
        <div class="owl-stage">
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
            <div class="owl-item">
               
            <?php $url=wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
            	<div class="clientLogoDv">
            <img src="<?php echo $url; ?>" alt="" />
            </div>
            </div>
            <?php  endwhile;?>
          
        </div>
    </div>
                        </div>
           
        <?php /*    <?php  echo do_shortcode('[wpaft_logo_slider]');  ?> */ ?>
        </div>
    </div>
</div>

<section id="practiceAreaSec">

    <div class="container">
    
            <hgroup class="siteHeading">
                <h2>Practice Area</h2>
            </hgroup>
       
  


            <div class="row">
             
                        <?php
                            $args = array(
                            'post_type' => 'practice_area',
                            'posts_per_page'=>-1,
                            'post_status'=>'publish',
                            'orderby'=>'date',
                            'posts_per_page' => 6,
                            'order'=>'Desc'
                            );
                            $client_qry = new WP_Query($args );
                            while ( $client_qry->have_posts()) : $client_qry->the_post();
                        ?>



                        <div class="col-lg-4 col-sm-6 col-12">
                            <a href="<?php the_permalink();?>" class="practiceAreaBx">
                                <div>
                                    <div class="practiceAreaImg wow fadeInUp">
                                  
                                    
                                    <?php
    $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');
    if ($image) {
        echo '<img src="' . esc_url($image[0]) . '" alt="' . esc_attr(get_the_title()) . '">';
    }
    ?>


    
                                       
                                    </div>
                                    <div class="practiceAreaCnt wow fadeInLeft">
                                    <h6><?php echo mb_strimwidth(get_the_title(), 0, 25, '...'); ?></h6>
                                    <p>
                                        <?php 
                                            $content = get_the_content();
                                            echo mb_strimwidth($content, 0, 45, '...');
                                        ?>
                                    </p></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php  endwhile;?>
                   
            </div>
    <div class="text-center">
    <a href="<?php echo site_url(); ?>/practise-area/" class="siteBtn BtnBlck">View More</a>
    </div>
    </div>
</section>


<section id="greenGroundSec">
<div class="greenGroundMn">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 order-2 order-md-1">
                <div class="greenGroundLeft wow fadeInLeft">
<hgroup class="siteHeading text-center">
    <h2>Green and Grounded</h2>
</hgroup>

<div class="text-center">
<a href="<?php echo site_url(); ?>/green-and-grounded/" class="siteBtn BtnBlckOutline">Click Here</a>
</div>
                </div>
            </div>
            <!--  -->

<div class="col-md-6 order-1 order-md-2">
    <div class="greenGroundRight wow fadeInRight">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/greenAndGround.png" alt="">
    </div>
</div>

        </div>
    </div>
</div>
</section>


<!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

<script>
function tick2() {
    $('#ticker_02 li:first').slideUp(function() {
        $(this).appendTo($('#ticker_02')).slideDown();
    });
    $('#ticker_01 li:first').slideUp(function() {
        $(this).appendTo($('#ticker_01')).slideDown();
    });
    $('#ticker_0 li:first').slideUp(function() {
        $(this).appendTo($('#ticker_0')).slideDown();
    });
}

setInterval(function() {
    tick2()
}, 3000);
</script>

<script>
$('.recommonded_owl').owlCarousel({
    loop: true,
    responsiveClass: true,
    nav: false,
    autoplay: true,
    responsive: {
        0: {
            items: 1,
            nav: false
        },
        480: {
            items: 2,
            nav: false
        },
        643: {
            items: 3,
            nav: false
        },
        1000: {
            items: 4,
            nav: false,
            loop: true
        }
    }
})
</script>

<script>
$(document).ready(function() {
    $('.contact_form input, .contact_form textarea').each(function() {
        $(this).on('focus', function() {
            $(this).parent('.f-style').addClass('active');
        });

        $(this).on('blur', function() {
            if ($(this).val().length == 0) {
                $(this).parent('.f-style').removeClass('active');
            }
        });

        if ($(this).val() != '') $(this).parent('.f-style').addClass('active');
    });
});
</script>