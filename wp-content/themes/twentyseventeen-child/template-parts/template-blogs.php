<?php
/**
Template Name: Blogs
 */

get_header(); ?>


<section id="inrPgBnr">
<?php
             $arg=array(
            'post_type' => 'page' ,
            'orderby' => 'date' ,
            'order' => 'DESC' ,
            'posts_per_page' => -1,
            'post__in'=> ['1096'],
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


<section class="blog_pg">
	
	<div class="container">
		  
            <div class="row">
		      <?php $argspos=array(
                'post_type'=>'post',
			    'post_status' => array('publish'),
			    'posts_per_page'=>-1,
			    'orderby'=> 'meta_value_num',
			    'order'=>'DESC'
			    );
		      ?>
		
			<?php $the_query = new WP_Query($argspos); ?>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<article class="col-xs-6 col-sm-6 col-md-4">
                <div class="blg-cntnt">
                    <a href="<?php the_permalink();?>">
                        <div class="blog_img"> <?php the_post_thumbnail() ?>
                            <div class="blog-date">
                               <span><?php echo get_the_date('F d, Y');?></span>
                            </div>
                        </div>
                        <div class="blog_cnt">
                            <h4><?php echo get_the_title(); ?></h4>
						<p>	<?php
$content = strip_tags(get_the_content());
$trimmed = mb_substr($content, 0, 150, 'UTF-8');
echo $trimmed . (mb_strlen($content, 'UTF-8') > 150 ? '...' : '');
?> </p>
                        </div>
                    </a> 
                </div>    
            </article>
			<?php endwhile; ?>
			</div>
	
</div>
			</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>


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
    jQuery(".blog_cnt p").capitalise();
     jQuery(".blog_cnt h4").capitalise();
  });
</script>