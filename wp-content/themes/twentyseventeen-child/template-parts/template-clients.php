<?php
/**
Template Name: Clients
 */

get_header(); ?>


<div id="primary" class="site-content">
    <div id="content" role="main">
        <header class="entry-header">
            <h1 class="entry-title"><?php the_title(); ?></h1>
        </header>

        <?php if(is_user_logged_in()){?>
        <?php $current_user = wp_get_current_user();?>
        <?php $the_query = new WP_Query( 'post_type=case&author_name='.$current_user->user_login ); ?>
        <?php if ( $the_query->have_posts() ){ ?>
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <div class="clients">

            <div class="clients-title"><?php echo get_the_title(); ?></div>
            <div>Published on: <?php the_date();?></div>
            <div class="clients-exc"><?php echo get_the_excerpt(); ?></div>
            <?php if(get_field('file1')){ ?><div class="clients-file1"><a
                    href="<?php echo 'http://'.$_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] ?>&don=fileone&action=<?php the_id();?>">Download
                    File</a></div><?php }?>
            <?php if(get_field('file2')){ ?><div class="clients-file1"><a
                    href="<?php echo 'http://'.$_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] ?>&don=filetwo&action=<?php the_id();?>">Download
                    File</a></div><?php }?>
            <div class="clients-read"><a href="<?php the_permalink();?>">Read More</a></div>
            <div class="cls"></div>
        </div>
        <?php endwhile; ?>
        <?php }else{ ?>
        <h1 class="entry-title">Sorry! No Post For You.</h1>
        <?php }} else {?>
        <?php $location = site_url().'/?page_id=55&action=login';?>
        <?php wp_redirect( $location );exit; }?>

    </div><!-- #content -->
</div><!-- #primary -->


<?php //get_sidebar(); ?>
<?php get_footer(); ?>