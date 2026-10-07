<?php

/**

 * The template for displaying the footer

 */

?>



</div><!-- #main -->



<footer>

    <div class="footerMn">

        <div class="container">

            <div class="row">

                <div class="col-md-6">

                    <div class="footerLeft">

                        <div class="footerDv">

                            <h5>Quick Links</h5>

                            <?php wp_nav_menu( array( 'theme_location' => 'Footer' ) ); ?>



                        </div>

                        <!-- footDv -->



                        <div class="footerDv">

                            <h5>Subscribe to our newsletter.</h5>

                            <div class="nwesLetterFrm">

                                <?php echo do_shortcode('[newsletter_form]'); ?>

                            </div>



                            <ul class="socilaMediUl">

                                <?php

                $args=array(

                  'post_type' => 'social_links',

                  'post_status' => 'publish',

                  'posts_per_page' => -1,

                  'order' => 'ASC',

                );

                $my_query = new WP_Query($args);

                if( $my_query->have_posts() ) {

                  while ($my_query->have_posts()) : $my_query->the_post(); ?>



                                <li>
<?php  $social_urladdress = get_field( "social_url", $service->ID); ?>
                                    <a href="<?php echo $social_urladdress; ?>" target="_blank">

                                        <?php $url=wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>

                                      <div class="social-ico">  <img src="<?php echo $url; ?>" alt="<?php echo get_the_title(); ?>" /></div>

                                        <span><?php echo get_the_title(); ?></span>

                                    </a>

                                </li>

                                <?php

                  endwhile;

                }

                wp_reset_query(); 

              ?>

                            </ul>



                        </div>

                        <!-- footDv -->

                    </div>

                </div>

                <!--  -->

                <div class="col-md-1"></div>



                <div class="col-md-5">

                    <div class="footerRight">

                        <div class="contactInfoDv">

                            <?php

                $args=array(

                  'post_type' => 'contact_info',

                  'post_status' => 'publish',

                  'posts_per_page' => -1,

                  'order' => 'ASC',

                );

                $my_query = new WP_Query($args);

                if( $my_query->have_posts() ) {

                  while ($my_query->have_posts()) : $my_query->the_post(); ?>

                            <div class="contactInfoSingle">

                                <div class="contactInfoLft">

                                    <?php $url=wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>

                                    <img src="<?php echo $url; ?>" alt="<?php echo get_the_title(); ?>" />

                                </div>

                                <!--  -->



                                <div class="contactInfoRight <?php
$title = get_the_title();
$lowercase_title = strtolower( $title );
$class_slug = str_replace( ' ', '-', $lowercase_title );
echo esc_attr( $class_slug );
?>">

                                    <h6><?php echo get_the_title(); ?></h6>

                                    <ul>

                                        <?php  $contact_address = get_field( "address", $service->ID); ?>

                                        <?php  $contact_address_url = get_field( "address_url", $service->ID); ?>


                                        <?php  $contact_address_second = get_field( "second_address", $service->ID); ?>

                                        <?php  $contact_address_url_second = get_field( "second_address_url", $service->ID); ?>



                                        <?php  $contact_phone = get_field( "phone", $service->ID); ?>

                                        <?php  $contact_fax = get_field( "fax", $service->ID); ?>

                                        <?php  $contact_email = get_field( "email", $service->ID); ?>



                                        <li class="address-field">
<i class="fas fa-map-marker-alt"></i>
                                            <a href="<?php echo $contact_address_url; ?>" target="_blank">

                                                <?php echo $contact_address; ?>

                                            </a>

                                        </li>

                                          <li class="address-field">
<i class="fas fa-map-marker-alt"></i>
                                            <a href="<?php echo $contact_address_url_second; ?>" target="_blank">

                                                <?php echo $contact_address_second; ?>

                                            </a>

                                        </li>



                                        <li>

                                            <strong>Phone</strong> <a href="tel:<?php echo $contact_phone; ?>">

                                                <?php echo $contact_phone; ?>

                                            </a>

                                        </li>



                                        <li>

                                            <strong>Fax</strong> <a href="javascript:void(0);">

                                                <?php echo $contact_fax; ?>

                                            </a>

                                        </li>



                                        <li>

                                            <strong>Email</strong> <a href="mailto:<?php echo $contact_email; ?>">

                                                <?php echo $contact_email; ?>

                                            </a>

                                        </li>

                                    </ul>

                                </div>

                                <!--  -->

                            </div>



                            <?php

                  endwhile;

                }

                wp_reset_query(); 

              ?>

                        </div>

                        <!--  -->

                    </div>

                </div>

                <!--  -->



            </div>



<div class="copyrightDv">

    <p>Copyright © <?php echo date('Y'); ?> <span>thelawdesk.org</span> <br> Website Designed and Developed by  <a href="https://www.doomshell.com/" target="_blank">Doomshell.com</a> </p>

</div>





        </div>

    </div>

</footer>





</div>

<!--page-->



<script>

$(document).ready(function() {

    $(".bottom_header #primary-menu").addClass("d-flex");

    $(".bottom_header #primary-menu").addClass("justify-content-between");

});

</script>



<script>

$(document).ready(function() {

    $(document).delegate('.open', 'click', function(event) {

        $(this).addClass('oppenned');

        event.stopPropagation();

    })

    $(document).delegate('body', 'click', function(event) {

        $('.open').removeClass('oppenned');

    })

    $(document).delegate('.open.oppenned', 'click', function(event) {

        $('.open').removeClass('oppenned');

        event.stopPropagation();

    });

});

</script>



<script>

// Example starter JavaScript for disabling form submissions if there are invalid fields

(function() {

    'use strict';

    window.addEventListener('load', function() {

        // Fetch all the forms we want to apply custom Bootstrap validation styles to

        var forms = document.getElementsByClassName('needs-validation');

        // Loop over them and prevent submission

        var validation = Array.prototype.filter.call(forms, function(form) {

            form.addEventListener('submit', function(event) {

                if (form.checkValidity() === false) {

                    event.preventDefault();

                    event.stopPropagation();

                }

                form.classList.add('was-validated');

            }, false);

        });

    }, false);

})();

</script>



<script>

// Add the following code if you want the name of the file appear on select

$(".custom-file-input").on("change", function() {

    var fileName = $(this).val().split("\\").pop();

    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);

});



$("#InternshipStartDate").attr('type', 'text');

$("#InternshipEndDate").attr('type', 'text');



$("#InternshipStartDate").blur(function() {

    this.type = 'date';

});



$("#InternshipStartDate").focus(function() {

    this.type = 'date';

});



$("#InternshipEndDate").blur(function() {

    this.type = 'date';

});



$("#InternshipEndDate").focus(function() {

    this.type = 'date';

});

</script>





<!-- <script type="text/javascript">

$(document).ready(function() {

    $("#lightgallery").lightGallery();

});

</script> -->



<script>

$('#customFiles').on('change', function() {

    //get the file name

    var fileName = $(this).val();

    //replace the "Choose a file" label

    $(this).next('.custom-file-label').html(fileName);

})

</script>



<script>

$(document).ready(function() {

    $(".knowledgeBtn").click(function() {

        $(".articlesBtn").removeClass("active");

        $(this).addClass("active");

        $(".articlesDvShow").fadeOut();

        $(".knowledgeCenterDvShow").fadeIn();

    });

});

</script>



<script>

$(document).ready(function() {

    $(".articlesBtn").click(function() {

        $(".knowledgeBtn").removeClass("active");

        $(this).addClass("active");



        $(".knowledgeCenterDvShow").fadeOut();

        $(".articlesDvShow").fadeIn();

    });

});

</script>



<!-- <script src="<?php //echo get_stylesheet_directory_uri(); ?>/js/lightgallery-all.min.js"></script> -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>



<?php wp_footer(); ?>



<!-- <script>

   

$(document).ready(function(){

  $(".menuRightSidebar .menu-item-has-children>a").click(function(){

    $(this).toggleClass("active");

    $(".menuRightSidebar .menu-item-has-children .sub-menu").slideToggle();

  });

});

</script> -->



<script>

$(document).ready(function(){

  $(".menuRightSidebar .menu-item-has-children > a").click(function(e){

    e.preventDefault(); // link click default action prevent kare

    $(this).toggleClass("active");

    $(this).next(".sub-menu").stop(true, true).slideToggle(300);

  });

});

</script>





<script>

   

$(document).ready(function(){

  $(".toggleMenuAnch").click(function(){

    $("body").addClass("openMenu");

      });



      $(".menuClosBtn").click(function(){

    $("body").removeClass("openMenu");

      });



      $(".menubackDrop").click(function(){

    $("body").removeClass("openMenu");

      });

     

});

</script> 



<!-- <script>

   

$(document).ready(function(){

  $("header .menu-item-has-children").hover(function(){

    $("header .menu-item-has-children .sub-menu").show();

  });

});

</script> -->



<script>

  $(document).ready(function(){

    $('header .menu-item-has-children').hover(

      function() {

        $(this).find('.sub-menu').stop(true, true).slideDown(200);

      },

      function() {

        $(this).find('.sub-menu').stop(true, true).slideUp(200);

      }

    );

  });

</script>



<script>

    var counted = 0;

$(window).scroll(function() {



  var oTop = $('#counter').offset().top - window.innerHeight;

  if (counted == 0 && $(window).scrollTop() > oTop) {

    $('.count').each(function() {

      var $this = $(this),

        countTo = $this.attr('data-count');

      $({

        countNum: $this.text()

      }).animate({

          countNum: countTo

        },



        {



          duration: 2000,

          easing: 'swing',

          step: function() {

            $this.text(Math.floor(this.countNum));

          },

          complete: function() {

            $this.text(this.countNum);

            //alert('finished');

          }



        });

    });

    counted = 1;

  }



});

</script>



<script>

    $('.clientLogoOwl').owlCarousel({

    loop:true,

    margin:10,

    responsiveClass:true,

    smartSpeed:1000,

    autoplayTimeout:2000,

    lazyLoad:true,

    autoplay:true,

    dots:false,

    responsive:{

        0:{

            items:2,

            nav:false

        },

         400:{

            items:3,

            nav:false

        },

        576:{

            items:4,

            nav:false

        },

        992:{

            items:5,

            nav:false,

            loop:true

        }

    }

})

</script>





<script>

    $('.practiceAreaOwl').owlCarousel({

    loop:true,

    margin:30,

    responsiveClass:true,

    smartSpeed:1000,

    autoplayTimeout:2000,

    lazyLoad:true,

    autoplay:true,

    dots:false,

    responsive:{

        0:{

            items:1,

            nav:false

        },

    

        576:{

            items:2,

            nav:false

        },

        992:{

            items:3,

            nav:false,

            loop:true

        }

    }

})

</script>



<script>

  window.addEventListener('scroll', function() {

    const header = document.querySelector('header');

    if (window.scrollY > 0) {

      header.classList.add('header-active');

    } else {

      header.classList.remove('header-active');

    }

  });

</script>



<!-- <script>

  document.addEventListener("DOMContentLoaded", function () {

    const container = document.querySelector(".blog_cnt");

    if (!container) return;



    const capitalizeWords = (text) => {

      return text

        .toLowerCase()

        .split(/\s+/)

        .map(word => word.charAt(0).toUpperCase() + word.slice(1))

        .join(" ");

    };



    const processNode = (node) => {

      node.childNodes.forEach(child => {

        if (child.nodeType === Node.TEXT_NODE && child.textContent.trim() !== "") {

          child.textContent = capitalizeWords(child.textContent);

        } else if (child.nodeType === Node.ELEMENT_NODE) {

          processNode(child);

        }

      });

    };



    processNode(container);

  });

</script> -->







</body>



</html>