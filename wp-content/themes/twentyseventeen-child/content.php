


<?php
/**
*/
global $wpdb;

$exst_user = $wpdb->get_results( "SELECT * FROM zjlvz_posts Where post_type='practice_area' and post_status='publish' order by id desc limit 7");

//get_field('uploadpracticearea_background');
//$post_id_data = the_ID();

//$urlicon_data = get_field('uploadpracticearea_background', get_the_ID());

	?>
	
	

<?php if ( get_post_type( get_the_ID() ) == 'practice_area' ) { ?>



	
	<section id="inrPgBnr" class="practiceDtlSec">

	<?php the_post_thumbnail('full'); ?>
    <div class="inrPgBnrOverlay"></div>
    <div class="inrPgBnrCnt">
        <div class="container">
		<h1 class="entry-title"><?php the_title(); ?></h1>
        </div>
    </div>

</section>


	
			
	
        
<?php } ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


<div id="practice_areadetail" style="padding:0px;">
<div class="row">


<div class="col-md-12">


<?php if ( get_post_type( get_the_ID() ) == 'practice_area' ) { ?>
<?php /*	<header class="entry-header">
		<?php if ( has_post_thumbnail() && ! post_password_required() && ! is_attachment() ) : ?>
		<div class="entry-thumbnail">
			<?php //the_post_thumbnail(); ?>
		</div>
		<?php endif; ?>

		<?php if ( is_single() ) : ?>
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<?php else : ?>
		<h1 class="entry-title">
			<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h1>
		<?php endif; // is_single() ?>

		<div class="entry-meta">
			
			<?php edit_post_link( __( 'Edit', 'twentyseventeen-child' ), '<span class="edit-link">', '</span>' ); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header --> */ ?>

	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
		
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	

	<?php else : ?>


		
		<div class="container">
			
	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'twentyseventeen-child' ),
				the_title( '<span class="screen-reader-text">', '</span>', false )
			) );

			wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyseventeen-child' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) );
		?>
	</div><!-- .entry-content -->
			</div>
	<?php endif; ?>
	
	</div>
	
</div>
</div>
<section id="practiceAreaSec" class="pb-0">
    <div class="container">
		<hgroup class="siteHeading">
                <h2>Related Practice Area</h2>
            </hgroup>
        
            <div class="owl-carousel owl-theme owl-loaded practiceAreaOwl">
    <div class="owl-stage-outer">
        <div class="owl-stage">
        
            <?php
                global $post; // 🔥 Current post access
                $current_post_id = $post->ID; // 🔥 Get current post ID

                $args = array(
                    'post_type' => 'practice_area',
                    'posts_per_page' => -1,
                    'post_status' => 'publish',
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'post__not_in' => array($current_post_id), // ✅ Exclude current post
                );

                $client_qry = new WP_Query($args);
                while ($client_qry->have_posts()) : $client_qry->the_post();
            ?>

                 <div class="owl-item">
                <a href="<?php the_permalink(); ?>" class="practiceAreaBx">
                    <div>
                        <div class="practiceAreaImg wow fadeInUp">
                            <?php $url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>
                            <img src="<?php echo esc_url($url); ?>" alt="" />
                        </div>
                        <div class="practiceAreaCnt wow fadeInLeft">
                            <h6><?php echo mb_strimwidth(get_the_title(), 0, 25, '...'); ?></h6>
                            <p>
                                <?php 
                                    $content = get_the_content();
                                    echo mb_strimwidth(strip_tags($content), 0, 50, '...');
                                ?>
                            </p>
                        </div>
                    </div>
                </a>
            </div>

            <?php endwhile; wp_reset_postdata(); ?>
        </div>
		</div>
			</div>
    </div>
</section>


	<?php }else{ ?>
		
		
		<?php /*	<div class="entry-header">
		

		

		<div class="entry-meta">
			
			<?php edit_post_link( __( 'Edit', 'twentyseventeen-child' ), '<span class="edit-link">', '</span>' ); ?>
		</div><!-- .entry-meta -->
		</div><!-- .entry-header --> */ ?>

		<section id="inrPgBnr">
		<?php if ( has_post_thumbnail() && ! post_password_required() && ! is_attachment() ) : ?>
		<div class="entry-thumbnail">
			<?php the_post_thumbnail(); ?>
		</div>
		<?php endif; ?>
 
    <div class="inrPgBnrOverlay"></div>
    <div class="inrPgBnrCnt">
        <div class="container">
		<?php if ( is_single() ) : ?>
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<?php else : ?>
		<h1 class="entry-title">
			<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h1>
		<?php endif; // is_single() ?>
        </div>
    </div>
  
</section>

<section id="dtlPgCnt">
			<div class="container">

	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'twentyseventeen-child' ),
				the_title( '<span class="screen-reader-text">', '</span>', false )
			) );

			wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyseventeen-child' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) );
		?>
	</div><!-- .entry-content -->
	<?php endif; ?>
		
		
	
		<?php } ?>
		
		 <?php if($urlicon_data = get_field('article_author_image')) {
		// print_r($urlicon_data);
		 ?><p style="font-size:16px; margin-top: 20px !important; text-align: left;">
				 <img src="<?php echo $urlicon_data['url']; ?>" alt="recommonded_img" style="width:160px;"></p>
		<?php } ?>
	<p style="font-size:16px; margin-top: 20px !important; text-align: left;" class="auther-name">
	  <?php if(get_field('article_author_name')){ ?>
 <?php the_field('article_author_name'); ?></div><?php }?>
</p>
	  </div>
	  </section>
	
	

	<footer class="entry-meta">
		<?php if ( comments_open() && ! is_single() ) : ?>
			<div class="comments-link">
				<?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a comment', 'twentyseventeen-child' ) . '</span>', __( 'One comment so far', 'twentythirteen' ), __( 'View all % comments', 'twentyseventeen-child' ) ); ?>
			</div><!-- .comments-link -->
		<?php endif; // comments_open() ?>

		<?php if ( is_single() && get_the_author_meta( 'description' ) && is_multi_author() ) : ?>
			<?php get_template_part( 'author-bio' ); ?>
		<?php endif; ?>
	</footer><!-- .entry-meta -->
</article><!-- #post -->

<script>
$(document).ready(function(){
  $("#practice_areadetail .col-md-4 ul li a.view_lessa").click(function(){
	$(this).toggleClass('active');
    $("#practice_areadetail .col-md-4 ul li.pa_viewlessli").slideToggle();
  });
});
</script>

<script>
$('.practice_testiowl').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:1,
            nav:true
        },
        1000:{
            items:1,
            nav:true,
            loop:true
        }
    }
})
</script>


<script>
  jQuery.fn.capitalise = function() {

      return this.each(function() {
          var $this = $(this),
              text = $this.text(),
              split = text.split(" "),
              res = [],
              i,
              len,
              component;
          for (i = 0, len = split.length; i < len; i++) {
              component = split[i];
              res.push(component.substring(0, 1).toUpperCase());
              res.push(component.substring(1).toLowerCase());
              res.push(" "); // put space back in
          }
          $this.text(res.join(""));
      });
  };


  jQuery(document).ready(function() {
    jQuery("#dtlPgCnt p:first-child").capitalise();
	   jQuery("#inrPgBnr h1").capitalise();
  });
</script>