<?php
/**
Template Name: download
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
		<header class="entry-header">
			<h1 class="entry-title"><?php the_title(); ?></h1>
		</header>
			<?php $the_query = new WP_Query( 'post_type=download'); ?>
			<?php if ( $the_query->have_posts() ){ ?>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<?php if(get_field('file_1')){ ?><div class="clientsfile"><a href="<?php echo 'http://'.$_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] ?>&doni=fileon&action=<?php the_id();?>"><?php echo get_the_title(); ?></a></div><?php }?>
				<div class="cls"></div>
			<?php endwhile;}?>

		</div><!-- #content -->
	</div><!-- #primary -->
    <?php $the_query = new WP_Query( 'post_type=download'); ?>
			<?php if ( $the_query->have_posts() ){ ?>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <?php $pid = get_the_id();?>
<?php if(($_REQUEST['action']!="") && ($_REQUEST['action']== $pid )){

      if($_REQUEST['doni']=="fileon")
	     {
	       $path = get_field('file_1');
		 }

$mm_type="application/force-download";
header("Pragma: public");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Cache-Control: public");
header("Content-Description: File Transfer");
header("Content-Type: ".$mm_type);
header("Content-Length: " .(string)(filesize($path)));
if($_REQUEST['doni']=="fileon"){header('Content-Disposition: attachment; filename='.$path);}
header("Content-Transfer-Encoding: binary");
ob_clean();
flush();
readfile($path);
exit();
}?>
<?php endwhile;}?>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>