<?php
   /**Template Name: Practice*/
   get_header(); ?>

<section id="inrPgBnr">
<?php
             $arg=array(
            'post_type' => 'page' ,
            'orderby' => 'date' ,
            'order' => 'DESC' ,
            'posts_per_page' => -1,
            'post__in'=> ['6'],
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


<section id="practiceAreaSec">

    <div class="container">
    <?php /*    <?php
             $arg=array(
            'post_type' => 'page' ,
            'orderby' => 'date' ,
            'order' => 'DESC' ,
            'posts_per_page' => -1,
            'post__in'=> ['6'],
             );
            $service = new WP_Query($arg);
            while ( $service ->have_posts() ) : $service ->the_post();
           ?>
<p><?php echo get_the_content(); ?></p>
               <?php endwhile; ?>
*/ ?>
       
  


            <div class="row">
             
                        <?php
                            $args = array(
                            'post_type' => 'practice_area',
                            'posts_per_page'=>-1,
                            'post_status'=>'publish',
                            'orderby'=>'date',
                            'posts_per_page' => -1,
                            'order'=>'Desc'
                            );
                            $client_qry = new WP_Query($args );
                            while ( $client_qry->have_posts()) : $client_qry->the_post();
                        ?>



                        <div class="col-lg-4 col-sm-6 col-12">
                            <a href="<?php the_permalink();?>" class="practiceAreaBx">
                                <div>
                                    <div class="practiceAreaImg wow fadeInUp">
                                    <?php $url=wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
                                    <img src="<?php echo $url; ?>" alt="" />
                                       
                                    </div>
                                    <div class="practiceAreaCnt wow fadeInLeft">
                                    <h6><?php echo mb_strimwidth(get_the_title(), 0, 25, '...'); ?></h6>
                                    <p>
                                        <?php 
                                            $content = get_the_content();
                                            echo mb_strimwidth($content, 0, 50, '...');
                                        ?>
                                    </p></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php  endwhile;?>
                   
            </div>
  
    </div>
</section>

<?php /*<?php get_sidebar(); ?>*/ ?>
<?php get_footer(); ?>