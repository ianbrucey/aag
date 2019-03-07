<?php
/**
 * The footer for our theme.
 * This template is used to generate the footer for the theme.
 *
 * @package GivingPress Lite
 * @since GivingPress Lite 1.0
 */

?>

<!-- END .container -->
</div>

<!-- BEGIN .footer -->
<footer>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="flogo">
                    <img src="<?php bloginfo( 'template_url' ); ?>/images/ftr_logo.png" width="326" height="99" alt="Logo">

                    <div class="social-icon">

                        <ul>
                            <li><a href="https://www.facebook.com/americanadvocacy/"><img src="<?php bloginfo(template_url);?>/images/facebook.png"></a></li>
                            <li><a href="https://www.instagram.com/americanadvocacygroup/"><img src="<?php bloginfo(template_url);?>/images/ins.png"></a></li>
                            <li><a href="#"><img src="<?php bloginfo(template_url);?>/images/twitter.png"></a></li>
                        </ul>

                        <div class="follow">Follow us</div>
                    </div><!-- social-icon -->
                </div><!--flogo-->
            </div>
            <div class="col-md-6 text-white text-right">

                <br>
                <a class="text-white" href="<?php echo site_url(); ?>/terms/">Terms</a> |
                <a class="text-white"  href="<?php echo site_url(); ?>/privacy-policy/">Privacy Policy</a><br>
                <a ><span>American Advocacy Group© 2014 </span></a>
                <br>
            </div>


        </div><!--ftr_Lft-->

    </div><!--ftr_inr-->

</footer><!--End footer-->
</div><!--End cntr-->
</div><!--End wrapper-->

<?php get_template_part('hubspot-popup') ?>
<script>

    $(document).ready(function(){
//        $(".phone").mask("(999) 999-9999");
//        setTimeout(function () {
//            $('#wp-hubspot-popup').modal('show');
//        }, 15000);
    });
</script>
<?php wp_footer(); ?>
<script src="<?php bloginfo( 'template_url' ); ?>/js/slider.min.js"></script>
<link href="<?php bloginfo( 'template_url' ); ?>/css/slider.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('#demo2').skdslider({'delay':600000, 'animationSpeed': 1600,'showNextPrev':false,'showPlayButton':false,'autoSlide':true,'animationType':'fading'});

        jQuery('#responsive').change(function(){
            $('#responsive_wrapper').width(jQuery(this).val());
        });

    });
</script>


</body>
</html>
