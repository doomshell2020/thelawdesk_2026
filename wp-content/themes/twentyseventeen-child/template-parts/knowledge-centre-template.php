<?php

/*
 Template Name: Knowledge Center
*/
get_header(); ?>



 

<section id="inrPgBnr">
<?php
             $arg=array(
            'post_type' => 'page' ,
            'orderby' => 'date' ,
            'order' => 'DESC' ,
            'posts_per_page' => -1,
            'post__in'=> ['1516'],
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


<section id="knowledgeCntrSec">

<ul class="text-center knowledgeCenterUl list-unstyled">
    <li>
        <a href="javascript:void(0);" class="knowledgeBtn active">Knowledge Center</a>
    </li>

    <li>
        <a href="javascript:void(0);" class="articlesBtn">Articles</a>
    </li>
</ul>


<div class="articlesDvShow">
    <div class="container">


<div class="row">
    
 <?php
                         $args = array(
    'post_type' => 'knowledge_center',
    'posts_per_page' => -1,
    'post_status' => 'publish',
    'orderby' => 'date',
    'order' => 'DESC',
    'tax_query' => array(
        array(
            'taxonomy' => 'knowledge_center_category', // your custom taxonomy
            'field'    => 'slug',
            'terms'    => 'articles', // your category slug
        ),
    ),
);
                            $client_qry = new WP_Query($args );
                            while ( $client_qry->have_posts()) : $client_qry->the_post();
                        ?>
<div class="col-lg-4 col-sm-6 col-12">
               <h6><?php echo get_the_title(); ?></h6>
               <?php echo get_the_content(); ?>
               <div class="knowledgeBx">
                   <div class="knowledgeBxinner">
                      <?php  $knowledge_pdf = get_field( "knowledge_center_pdf"); 
	
	?>
                                           
    
                       <iframe width="100%"  src="<?php echo $knowledge_pdf; ?>" title="Corporate Social Responsibility Newsletter" frameborder="0" ></iframe>
                       </div>
                       <div class="knowledgeBxDv">
                  <a href="<?php echo $knowledge_pdf; ?>" target="_blank"> View PDF </a>
                  </div>
                   </div>
                   </div>
           <!---->
<?php  endwhile;?>

</div>
    </div>
</div>

<!--  -->

<div class="knowledgeCenterDvShow">




    <div class="container">
        <div class="row">

 <?php
                         $args = array(
    'post_type' => 'knowledge_center',
    'posts_per_page' => -1,
    'post_status' => 'publish',
    'orderby' => 'date',
    'order' => 'DESC',
    'tax_query' => array(
        array(
            'taxonomy' => 'knowledge_center_category', // your custom taxonomy
            'field'    => 'slug',
            'terms'    => 'knowledge-center', // your category slug
        ),
    ),
);
                            $client_qry = new WP_Query($args );
                            while ( $client_qry->have_posts()) : $client_qry->the_post();
                        ?>
<div class="col-lg-4 col-sm-6 col-12">
               <h6><?php echo get_the_title(); ?></h6>
               <?php echo get_the_content(); ?>
               <div class="knowledgeBx">
                   <div class="knowledgeBxinner">
                      <?php  $knowledge_pdf = get_field( "knowledge_center_pdf"); 
	
	?>
                                           
    
                       <iframe width="100%"  src="<?php echo $knowledge_pdf; ?>" title="Corporate Social Responsibility Newsletter" frameborder="0" ></iframe>
                       </div>
                       <div class="knowledgeBxDv">
                  <a href="<?php echo $knowledge_pdf; ?>" target="_blank"> View PDF </a>
                  </div>
                   </div>
                   </div>
           <!---->
<?php  endwhile;?>
           <!---->

           
      </div>
        
    </div>
    </div>
</section>

<?php get_footer(); ?>


