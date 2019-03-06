<?php
/**
 * The Header for our theme.
 * Displays all of the <head> section and everything up till <div id="wrap">
 *
 * @package GivingPress Lite
 * @since GivingPress Lite 1.0
 */
$count = 0;
$sliderArray= [];
$isBlogPage = !is_front_page() && is_home();
?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo('charset'); ?>">

    <!-- IE Compatibility Off -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <!-- Mobile View -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php echo esc_url(bloginfo('pingback_url')); ?>">
    <!--    <link rel="stylesheet" href="http://localhost:8888/wp-content/themes/givingpress-lite/css/main.css">-->

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<?php get_template_part('hubspot-modal'); ?>
<!-- BEGIN #wrapper -->
<div id="wrapper">

    <!-- BEGIN #top-info -->
    <div id="top-info">

        <?php if (get_theme_mod('givingpress_lite_contact_email', 'info@givingpress.com') || get_theme_mod('givingpress_lite_contact_phone', '808.123.4567') || get_theme_mod('givingpress_lite_contact_address', '231 Front Street, Lahaina, HI 96761')) { ?>

            <!-- BEGIN #contact-info -->
            <div id="contact-info">

                <!-- BEGIN .row -->
                <div class="row">

                    <!-- BEGIN .content -->
                    <div class="content">

                        <div class="align-right" style="color: steelblue">

                            <?php if (get_theme_mod('givingpress_lite_contact_address', '231 Front Street, Lahaina, HI 96761')) { ?>
                                <span class="contact-address"><i
                                            class="fa fa-map-marker"></i> <?php echo esc_html(get_theme_mod('givingpress_lite_contact_address', '231 Front Street, Lahaina, HI 96761')); ?></span>
                            <?php } ?>

                            <?php if (get_theme_mod('givingpress_lite_contact_email', 'info@givingpress.com')) { ?>
                                <span class="contact-email text-right"><i class="fa fa-envelope"></i> <a
                                            class="link-email"
                                            href="mailto:<?php echo esc_html(get_theme_mod('givingpress_lite_contact_email', 'info@givingpress.com')); ?>"
                                            target="_blank"><?php echo esc_html(get_theme_mod('givingpress_lite_contact_email', 'info@givingpress.com')); ?></a></span>
                            <?php } ?>

                            <?php if (get_theme_mod('givingpress_lite_contact_phone', '808.123.4567')) { ?>
                                <span class="contact-phone">Call us for a free consultation</span>
                                <span class="contact-phone text-right"><i
                                            class="fa fa-phone"></i> <?php echo esc_html(get_theme_mod('givingpress_lite_contact_phone', '808.123.4567')); ?></span>
                            <?php } ?>

                        </div>

                        <?php if ('1' == get_theme_mod('givingpress_lite_display_header_search', '1')) { ?>

                            <div class="align-right">

                                <div class="header-search clearfix"><?php get_template_part('searchform'); ?></div>

                            </div>

                        <?php } ?>

                        <!-- END .content -->
                    </div>

                    <!-- END .row -->
                </div>

                <!-- END #contact-info -->
            </div>

        <?php } ?>

        <!-- BEGIN #top-nav -->
        <div id="top-nav">

            <!-- BEGIN .row -->
            <div class="row">

                <!-- BEGIN .content -->
                <div class="content no-bg">

                    <!-- BEGIN #nav-bar -->
                    <div id="nav-bar">

                        <?php if (has_nav_menu('main-menu')) { ?>

                        <div class="toggle-holder">

                            <?php } ?>

                            <?php givingpress_lite_custom_logo(); ?>

                            <?php if (has_nav_menu('main-menu')) { ?>

                            <button class="menu-toggle"><i class="fa fa-bars"></i></button>

                        </div>

                    <!-- BEGIN #navigation -->
                        <nav id="navigation" class="navigation-main">

                            <?php wp_nav_menu(array(
                                    'theme_location' => 'main-menu',
                                    'title_li' => '',
                                    'depth' => 4,
                                    'fallback_cb' => 'wp_page_menu',
                                    'container_class' => '',
                                    'menu_class' => 'menu',
                                )
                            ); ?>

                            <!-- END #navigation -->
                        </nav>

                    <?php } elseif (current_user_can('publish_posts')) { ?>

                        <!-- BEGIN #navigation -->
                        <nav id="navigation" class="navigation-main">

                            <p class="instruction"><?php printf(wp_kses(__('Create a Custom Navigation Menu <a href="%1$s">here</a>.', 'givingpress-lite'), array('a' => array('href' => array()))), esc_url(admin_url('nav-menus.php'))); ?></p>

                            <!-- END #navigation -->
                        </nav>

                    <?php } ?>

                        <!-- END #nav-bar -->
                    </div>

                    <!-- END .content -->
                </div>

                <!-- END .row -->
            </div>

            <!-- END #top-nav -->
        </div>

        <!-- END #top-info -->
    </div>

    <?php $header_image = get_header_image(); ?>

    <?php if (!is_page() || is_home() || is_page() && !has_post_thumbnail()) { ?>
    <?php if ('blank' != get_theme_mod('header_textcolor') || !empty($header_image)) { ?>

    <!-- BEGIN #header -->
    <div id="header">
        <div id="site-info" style="max-height: 400px" class="<?php echo $isBlogPage ? 'd-none' : '' ?>">
            <?php query_posts('post_type=slider&posts_per_page=1'); ?>

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php if (get_field('banner_slider')) {
                    while (has_sub_field('banner_slider')) {
                        $sliderArray[$count]['image'] = get_sub_field('image');
                        $sliderArray[$count]['top'] = get_sub_field('banner_text(top)');
                        $sliderArray[$count]['bottom'] = get_sub_field('banner_text(bottom)');
                        $sliderArray[$count]['title'] = get_sub_field('title');
                        $sliderArray[$count]['text'] = get_sub_field('text');
                        $sliderArray[$count]['learn'] = get_sub_field('learn_more');
                        ++$count;
                        ?>


                    <?php }
                } ?>
            <?php endwhile; endif; ?>
            <?php wp_reset_query(); ?>
            <div id="mainCarousel" class="carousel slide" data-ride="carousel" data-interval="9000">
                <div class="carousel-inner">
                    <?php for ($i = 0; $i < count($sliderArray); $i++): ?>
                        <div class="carousel-item <?php echo $i == 0 ? 'active' : '' ?>" style="">
                            <img class="d-block w-100" src="<?php echo $sliderArray[$i]['image']; ?>">
                            <div class="carousel-caption d-md-none d-sm-block text-white"
                                 style="width: 80%; margin-left: 10%; background-image: linear-gradient(to right, transparent, rgba(0,0,0,.5), transparent ); position: absolute; top: 0; left: 0; padding-top: 20px">
                                <div class="col-8 offset-2 text-center">
<!--                                    <h4>Call us for a free consultation</h4>-->

<!--                                    <a class="btn bg-theme-blue" href="tel:--><?php //echo esc_html(get_theme_mod('givingpress_lite_contact_phone', '808.123.4567')); ?><!--">--><?php //echo esc_html(get_theme_mod('givingpress_lite_contact_phone', '808.123.4567')); ?><!--</a>-->
                                </div>

                            </div>
                            <div class="carousel-caption d-none d-md-block text-white"
                                 style="width: 80%; margin-left: 10%; background-image: linear-gradient(to right, transparent, rgba(0,0,0,.5), transparent ); position: absolute; top: 0; left: 0; padding-top: 100px">
                                <div class="col-8 offset-2 text-center">
                                    <h1></h1>
                                    <h2 class=""><?php echo $sliderArray[$i]['title'] ?></h2>
                                    <h6 class=""><?php echo $sliderArray[$i]['text'] ?></h6>
                                    <a class="btn btn-lg bg-theme-blue text-white" href="<?php echo $sliderArray[$i]['learn'] ?>">Learn
                                        More</a>
                                    <!--                            </div>-->
                                    <!--                            <div class="col-6 pull-left">-->


                                </div>

                            </div>
                        </div>
                    <?php endfor; ?>
                </div>
                <a class="carousel-control-prev" href="#mainCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#mainCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>

        <?php if (!empty($header_image)) { ?>

        <!-- BEGIN .custom-header -->
    </div>

<?php } ?>

    <!-- END #header -->
</div>
<?php } ?>
<?php } ?>

<!-- BEGIN .container -->
<div class="container">
    <div class="row first-call call-us">
        <div class="col-12 text-center bg-white d-md-none d-sm-block ">
            <h3 ><a class="text-theme-red" href="tel:8442554477"><b>Call us at 844.255.4477</b></a> </h3>
        </div>
    </div>
