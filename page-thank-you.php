<?php
/**
 * This template displays the default page content.
 *
 * @package GivingPress Lite
 * @since GivingPress Lite 1.0
 */

get_header('noslider'); ?>

<?php $thumb = ( get_the_post_thumbnail() ) ? wp_get_attachment_image_src( get_post_thumbnail_id(), 'giving-featured-large' ) : false; ?>

<!-- BEGIN .post class -->
<div <?php post_class(); ?> id="page-<?php the_ID(); ?>">

    <?php if ( has_post_thumbnail() ) { ?>
        <div class="feature-img page-banner" <?php if ( ! empty( $thumb ) ) { ?> style="background-image: url(<?php echo esc_url( $thumb[0] ); ?>);" <?php } ?>>
            <h1 class="headline img-headline"><?php the_title(); ?></h1>
            <?php the_post_thumbnail( 'giving-featured-large' ); ?>
        </div>
    <?php } ?>

    <!-- BEGIN .row -->
    <div class="row">

        <!-- BEGIN .content -->
        <div class="content">

            <?php if ( is_active_sidebar( 'sidebar-1' ) ) { ?>

                <!--            <div class="sixteen columns text-center d-md-none d-lg-none d-xl-none">-->
                <div class="sixteen columns text-center">
                    <!-- Button trigger modal -->

                </div>
                <!-- BEGIN .eleven columns -->
                <div class="sixteen columns">

                    <!-- BEGIN .postarea -->
                    <div class="postarea">

                        <!--					--><?php //get_template_part( 'loop', 'page' ); ?>
                        <?php get_template_part( 'aag-content', 'page' ); ?>


                        <!-- END .postarea -->
                    </div>

                    <!-- END .eleven columns -->
                </div>

                <!-- BEGIN .five columns -->
                <div class="five columns ">
                    <!--				--><?php //get_sidebar(); ?>
<!--                    --><?php //get_template_part('hubspot-form') ?>
                    <!-- END .five columns -->
                </div>

            <?php } else { ?>

                <!-- BEGIN .sixteen columns -->
                <div class="sixteen columns">

                    <!-- BEGIN .postarea full -->
                    <div class="postarea full">

                        <?php get_template_part( 'loop', 'page' ); ?>

                        <!-- END .postarea full -->
                    </div>

                    <!-- END .sixteen columns -->
                </div>

            <?php } ?>

            <!-- END .content -->
        </div>

        <!-- END .row -->
    </div>

    <!-- END .post class -->
</div>
<!-- services menu fix -->
<style>
    ul.menu ul,
    div.menu ul ul {
        position: fixed !important;
    }
</style>
<!-- Modal -->
<script>
    $('.btn-warning, .call-us').hide();
    $(document).ready(function () {
        $('#wp-hubspot-popup').detach();
    });
</script>


<?php get_footer(); ?>
