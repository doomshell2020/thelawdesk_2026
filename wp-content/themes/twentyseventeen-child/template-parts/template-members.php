<?php
/**
Template Name: Members
 */
get_header(); ?>

<section id="inrPgBnr">
<?php
             $arg=array(
            'post_type' => 'page' ,
            'orderby' => 'date' ,
            'order' => 'DESC' ,
            'posts_per_page' => -1,
            'post__in'=> ['8'],
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


      
   <?php $argspos=array(
			'post_type'=>'member',
			'post_status' => array('publish'),
			'posts_per_page'=>-1,
			'meta_key' =>'member_position',
			'orderby'=> 'meta_value_num',
			'order'=>'Asc'
			);
		?>
         <?php $the_query = new WP_Query($argspos); ?>
 <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
<!-- Modal -->
<div class="modal fade our-teammodal" id="modal-<?php echo get_the_ID(); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="team-modal-cnt">
            <div class="team-img">
                <?php $url=wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
<img src="<?php echo $url; ?>" alt="" />
            </div>
<h4><?php echo get_the_title(); ?></h4>
<?php  $member_des = get_field( "member_designation");  ?>
                  <h5>  <?php echo $member_des; ?></h5>
 <?php  $member_email = get_field( "e-mail");  ?>
                 <h6><strong>E-mail: </strong>
                    <a href="mailto:<?php echo $member_email; ?>"><?php echo $member_email; ?></a> </h6>

<div class="teamDtlCnt">
    <ul>
        <li>
           <p>
            <strong>Qualifications</strong>
            <?php  $member_qualifi = get_field( "degrees");  ?>
           <?php echo $member_qualifi; ?>
           </p>

        </li>

        <li>
           <p>
            <strong>AREAS OF EXPERIENCE</strong>
            <?php  $member_practicearea = get_field( "practice_areas");  ?>
            
           <?php echo $member_practicearea; ?>
           </p>

        </li>
    </ul>

</div>

        </div>
       
      </div>
     
    </div>
  </div>
</div>
<!--  -->
 <?php  endwhile;?>
     <?php /*   <?php the_content();?> */ ?>


<section id="outTeamSec">
    <div class="container">
        <div class="row">
        <?php $argspos=array(
			'post_type'=>'member',
			'post_status' => array('publish'),
			'posts_per_page'=>-1,
			'meta_key' =>'member_position',
			'orderby'=> 'meta_value_num',
			'order'=>'Asc'
			);
		?>
 <?php $the_query = new WP_Query($argspos); ?>
 <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="ourTeamBx" data-toggle="modal" data-target="#modal-<?php echo get_the_ID(); ?>">
                    <div class="ourTeamBxInr">
<div class="ourTeamImg">
<?php $url=wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
<img src="<?php echo $url; ?>" alt="" />

</div>
<!--  -->

<div class="teamCntDv">
<div class="ourTemBsicCnt">
<h4><?php echo get_the_title(); ?></h4>
                <?php  $member_des = get_field( "member_designation");  ?>
                  <h5>  <?php echo $member_des; ?></h5>
               
                  <?php  $member_email = get_field( "e-mail");  ?>
                <?php /*  <h6><strong>E-mail: </strong>
                    <a href="mailto:<?php echo $member_email; ?>"><?php echo $member_email; ?></a> </h6> */ ?>
</div>

<?php /*
<div class="teamDtlCnt">
    <ul>
        <li>
           <p>
            <strong>Qualifications</strong>
            <?php  $member_qualifi = get_field( "degrees");  ?>
           <?php echo $member_qualifi; ?>
           </p>

        </li>

        <li>
           <p>
            <strong>AREAS OF EXPERIENCE</strong>
            <?php  $member_practicearea = get_field( "practice_areas");  ?>
            
           <?php echo $member_practicearea; ?>
           </p>

        </li>
    </ul>

</div>
*/ ?>
<!--  -->
</div>
<!--  -->

                </div>
            </div>
        </div>
            <!--  -->
            <?php  endwhile;?>
        </div>
    </div>
</section>

<?php /*
        <?php $argspos=array(
			'post_type'=>'member',
			'post_status' => array('publish'),
			'posts_per_page'=>-1,
			'meta_key' =>'member_position',
			'orderby'=> 'meta_value_num',
			'order'=>'Asc'
			);
		?>

        <?php $the_query = new WP_Query($argspos); ?>
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <div class="member">

            <div class="member-img"><?php //the_post_thumbnail( array(100,100) ); ?>
                <?php the_post_thumbnail('medium'); ?></div>
            <div class="member-info">
                <div class="member-title"><?php echo get_the_title(); ?></div>
                <?php  $member_des = get_field( "member_designation", $service->ID);  ?>
                  <h6>  <?php echo $member_des; ?></h6>
                <?php if(get_field('e-mail')){ ?><div class="member-mail"><strong>E-mail: </strong>
                    <a href="mailto:<?php the_field('e-mail');?>"><?php the_field('e-mail'); ?></a>
                </div><?php }?>
                <?php if(get_field('degrees')){ ?><div class="member-deg">
                    <h2>Qualification:</h2> &nbsp;
                    <?php the_field('degrees'); ?>
                </div><?php }?>



                <?php if(get_field('practice_areas')){ ?><div class="member-pra">
                    <h2>AREAS OF EXPERIENCE:</h2> &nbsp;
                    <?php the_field('practice_areas'); ?>
                </div><?php }?>
            </div>

        </div>
        <?php endwhile; ?> */ ?>

 
<?php /*
<?php get_sidebar(); ?>
*/ ?>


<?php get_footer(); ?>