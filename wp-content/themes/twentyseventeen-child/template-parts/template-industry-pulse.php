<?php
/**
Template Name: Industry Pulse
 */

get_header(); ?> 

<section id="inrPgBnr">
<?php
             $arg=array(
            'post_type' => 'page' ,
            'orderby' => 'date' ,
            'order' => 'DESC' ,
            'posts_per_page' => -1,
            'post__in'=> ['10958'],
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


<section id="industryPulseSec">
    <div class="container">
       
        <div class="row">
        <?php
                            $args = array(
                            'post_type' => 'industry_pulse',
                            'posts_per_page'=>-1,
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
     
    </div>
</section>
<?php get_footer(); ?>