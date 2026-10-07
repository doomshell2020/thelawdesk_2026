<?php
/**
Template Name: History and Insights
 */

get_header(); ?> 

<section id="inrPgBnr">
<?php
             $arg=array(
            'post_type' => 'page' ,
            'orderby' => 'date' ,
            'order' => 'DESC' ,
            'posts_per_page' => -1,
            'post__in'=> ['1234'],
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


<section id="historyInsightSec">
    <div class="container">
       
        <div class="row">
        <?php
                            $args = array(
                            'post_type' => 'history_and_insights',
                            'posts_per_page'=>-1,
                            'post_status'=>'publish',
                            'orderby'=>'date',
                            'order'=>'ASC'
                            );
                            $client_qry = new WP_Query($args );
                            while ( $client_qry->have_posts()) : $client_qry->the_post();
                        ?>
<div class="col-lg-4 col-md-6">
  <div class="historyBx">
    <?php /*
    <div class="historyBxImg">
    <?php  $history_imgs = get_field( "history_and_insights_code_field"); ?>
    <?php echo $history_imgs; ?>
    </div> */ ?>

    <div class="historyBxCnt">
      <h4><?php echo get_the_title(); ?></h4>
    <?php echo get_the_content(); ?>
    </div>
  </div>
    <!--  -->
</div>

<?php  endwhile;?>
        </div>
     
    </div>
</section>
<?php get_footer(); ?>