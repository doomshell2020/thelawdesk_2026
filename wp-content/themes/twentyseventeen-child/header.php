<?php ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
<meta name="google-site-verification" content="SJQ9PR4_fDArMIRBwlScL2HsR6vTYVeMDkwGYFn9sF4" />
    <link rel="preconnect" href="https://www.google.com">
    <link rel="preconnect" href="https://www.googleapis.com">
    <link rel="preconnect" href="https://cse.google.com">
    <link rel="preconnect" href="https://stats.g.doubleclick.net">
    <link rel="preconnect" href="https://www.google.co.in">
    <link rel="preconnect" href="https://clients1.google.com">
    <link rel="preconnect" href="https://cse.google.com">

    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?php echo esc_url( home_url( '/' ) ); ?>">
    <meta property="twitter:title" content="<?php wp_title( '|', true, 'right' ); ?>">
    <meta property="twitter:image" content="<?php echo esc_url( home_url( '/' ) ); ?>/images/lawdesk-logo.png">

    <!-- FB Admins -->
    <meta property="fb:admins" content="USER_ID" />
    <!-- <link href="<?php //echo esc_url( home_url( '/' ) ); ?>" rel="canonical"> -->
    <!-- <link href="<?php //echo esc_url( home_url( '/' ) ); ?>" rel="alternate" hreflang="en-us"> -->

    <!-- <title><?php // wp_title( '|', true, 'right' ); ?></title> -->
    <?php if ( is_front_page() ) { ?>
    <title>Best Law Firm In Jaipur & Delhi - The Law Desk</title>
    <meta name="description" content="Looking for the best law firm in Jaipur & Delhi? The Law Desk provides trusted legal solutions with experienced advocates and personalized service.">
<?php } else { ?>
    <title><?php wp_title('|', true, 'right'); ?></title>
<?php } ?>


    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <!-- <link rel="stylesheet" type="text/css" media="all" href="<?php //bloginfo( 'stylesheet_url' ); ?>" /> -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/lightgallery.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/component.css" />
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>

    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/responsive.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<!-- ✅ Bootstrap 4.6.0 JS (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="<?php //echo get_stylesheet_directory_uri(); ?>/js/jquery.min.js"></script> -->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/wow.min.js" type="text/javascript"></script>
<script>
     wow = new WOW(
                      {
                      boxClass:     'wow',      // default
                      animateClass: 'animated', // default
                      offset:       0,          // default
                      mobile:       true,       // default
                      live:         true        // default
                    }
                    )
                    wow.init();
</script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/owl.carousel.js?v=beta.1.9"></script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WT3DRZ5H');</script>
<!-- End Google Tag Manager -->

    <!-- <script>
    $(document).ready(function() {
        $("#menu-item-746").click(function(event) {
            $(".sub-menu").slideToggle();
            event.stopPropagation();
        });
    });
    </script> -->
    <script>
    $(document).ready(function() {
        $(".menu-toggle").click(function(event) {
            $("#primary-menu").slideToggle();

            event.stopPropagation();
        });
    });
    </script>

    <script>
    jQuery(document).ready(function($) {

        $("#nav_menu-2.widget ul li#menu-item-633 a, #nav_menu-2.widget ul li#menu-item-636 a, #nav_menu-2.widget ul li#menu-item-635 a, #nav_menu-2.widget ul li#menu-item-634 a, #nav_menu-2.widget ul li#menu-item-637 a")
            .attr('target', '_blank');
    });
    </script>

    <script>
    jQuery(document).ready(function($) {
        jQuery('#close').click(function() {
            jQuery('.md-show ').hide();
            jQuery('.md-overlay').hide();
        });
    });
    </script>

<!-- <script>
  window.addEventListener('load', function () {
    var myModal = new bootstrap.Modal(document.getElementById('agrementMdl'));
    myModal.show();
  });
</script> -->

<!-- <script>
  window.addEventListener('load', function () {
    // Check if modal has been shown before
    if (!localStorage.getItem('modalShown')) {
      // Show the modal
      var myModal = new bootstrap.Modal(document.getElementById('agrementMdl'));
      myModal.show();

      // Set a flag so it doesn't show again
      localStorage.setItem('modalShown', 'true');
    }
  });
</script> -->


<script>

 $(document).ready(function () {

    // Check if user has already agreed
    if (localStorage.getItem('userAgreed') !== 'true') {
      $('#agrementMdl').modal({
      backdrop: 'static',
      keyboard: false
    }).modal('show');
    }

    // When "I Agree" is clicked
    $('.agreeBtn').click(function () {
      localStorage.setItem('userAgreed', 'true');
      $('#agrementMdl').modal('hide');
    });

  });





</script>



    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    <?php if(is_home() ) : ?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WT3DRZ5H"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
         <!-- Modal -->
<div class="modal fade" data-backdrop="static" data-keyboard="false" tabindex="-1" id="agrementMdl"  aria-labelledby="exampleModalLabel" aria-hidden="false">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      
      <div class="modal-body">
  <?php /*    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> */ ?>
         
       <div class="headingMdl">
       <h2>Disclaimer</h2>
       </div>

<div class="mdlCnt">


                        <div class="cntTxtDv">
                        <?php $the_query = new WP_Query( 'page_id=42' );    
						while ( $the_query->have_posts() ) :	$the_query->the_post();?>
                        <?php the_content();?>
                        <?php endwhile;?>
                        <div class="text-center" style="display: flex; justify-content: center;">

                        <button class="siteBtn agreementbtn agreeBtn" type="button">I Agree</button>

                        <!-- <button id="close" type="button" data-dismiss="modal" aria-label="Close" class="close" style="cursor: pointer;" class="agreeBtn">I Agree</button> -->
                  
                        </div>
                        </div>
                        <!--  -->
</div>
<!--  -->

      </div>
      
    </div>
  </div>
</div>
<?php endif; ?>
<!-- modal -->
<?php /*
    <div class="md-modal md-effect-1 md-show" id="modal-1">
        <div class="md-content">
            <h2>Disclaimer</h2>
            <div>
                <div id="box">
                    <div class="left-banner"></div>
                    <div class="right-panel">
                        <?php $the_query = new WP_Query( 'page_id=42' );    
						while ( $the_query->have_posts() ) :	$the_query->the_post();?>
                        <div class="cls"></div>
                    </div>
                    <div class="cls"></div>
                    <div class="cs-excerpt"><?php the_content();?></div>
                    <?php endwhile;?>
                    <?php wp_reset_postdata();?>
                </div>
                <button id="close" class="md-close" style="cursor: pointer;">I Agree</button>
            </div>
        </div>
    </div>
 */ ?>


    <div class="md-overlay"></div>



    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/classie.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/modalEffects.js"></script>

    <div id="page" class="hfeed site">
        <header id="masthead" class="site-header" role="banner">
           
                <div class="container">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="logo">
                            <a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>"
                                title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                                <img src="https://thelawdesk.org/wp-content/uploads/2025/10/logo-lawdesk.png"
                                    alt="thelawdesk-logo" />
                            </a>
                        </div>
                        <!--  -->
<div class="headMenu">
    <div class="headLft">
<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu head-mainmenu', 'menu_id' => 'primary-menu' ) ); ?>
                    <?php // get_search_form(); ?>

                    <div class="headToggle">
                        <a href="javascript:void(0);" class="toggleMenuAnch">
                        <i class="fas fa-bars"></i>
                        </a>
                    </div>
</div>
</div>
                       
                    </div>
                </div>
            

            <a href="https://thelawdesk.org/wp-content/themes/twentyseventeen-child/images/Online-Gaming-Abridged-Compendium.pdf"
                target="_blank" class="onlineGamingPdf">
                <i class="fas fa-file-pdf"></i> Online Gaming- Abridged Compendium
            </a>

            <style>
            .onlineGamingPdf {
                background: #d01d33;
                color: #fff !important;
                padding: 10px 20px;
                position: fixed;
                bottom: 0px;
                z-index: 999;
                font-size: 18px;
            }
            </style>

        </header><!-- #masthead -->

<div class="letsTalkMdl">
    <a href="javascript:void(0);" class="letsTalkBtn" data-toggle="modal" data-target="#letsTlk">Let's Talk</a>
</div>

<!-- modal -->

 <!-- Modal -->
<div class="modal fade"  id="letsTlk" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" >
    <div class="modal-content">
      
      <div class="modal-body">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        
        <div class="letsTalkMdlDv">
            <div class="row">
                <div class="col-md-5">
                    <div class="letsTalkMdlLeft">
<h3>Let's Talk</h3>

<div class="letsTalkMdImg">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/letsTalkImg.png" alt="">
</div>
                    </div>
                </div>
                <!--  -->

                <div class="col-md-7">
                    <div class="letsTalkMdlRight">
    <?php echo do_shortcode('[contact-form-7 id="11139" title="Contact"]'); ?>

                    </div>
                </div>
                <!--  -->
            </div>
        </div>
      </div>
      
    </div>
  </div>
</div>
<!-- modal -->

<div class="menubackDrop"></div>
        <div class="menuRightSidebar">
            <div class="rightMenuSideDv">
                <h4>The Law Desk</h4>
                <div class="rightMenuClose">
                    <a href="javascript:void(0);" class="menuClosBtn"><i class="fas fa-times"></i></a>
                </div>
            </div>
        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu' ) ); ?>
        </div>

        <div id="main" class="site-main">