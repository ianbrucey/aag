<?php
/**
 * The index template for our theme.
 *
 * This template is used to display posts. The content is displayed in post formats.
 *
 * @package GivingPress Lite
 * @since GivingPress Lite 1.0
 */

get_header(); ?>
<br><br><br>
<!-- BEGIN .post class -->
<div <?php post_class(); ?> id="page-<?php the_ID(); ?>">

    <div class="col-12 text-center bg-white d-md-none d-sm-block ">
        <br><br>
        <?php get_template_part('eval-button') ?>
        <h3 ><a class="text-theme-red" href="tel:8442554477"><b>Call us at 844.255.4477</b></a> </h3>
    </div>
</div>

	<!-- BEGIN .row -->
	<div class="row">

		<!-- BEGIN .content -->
		<div class="content no-bg clearfix">

			<?php if ( is_active_sidebar( 'sidebar-1' ) ) { ?>

				<!-- BEGIN .eleven columns -->
				<div class="eleven columns">

					<?php get_template_part( 'loop', 'blog' ); ?>

				<!-- END .eleven columns -->
				</div>

				<!-- BEGIN .five columns -->
				<div class="five columns p-2" id="evaluation">

                    <?php get_template_part( 'hubspot-form' ); ?>

				<!-- END .five columns -->
				</div>

			<?php } else { ?>

				<!-- BEGIN .sixteen columns -->
				<div class="sixteen columns bg-white">

					<?php get_template_part( 'loop', 'blog' ); ?>

				<!-- END .sixteen columns -->
				</div>

			<?php } ?>

		<!-- END .content -->
		</div>

	<!-- END .row -->
	</div>

<!-- END .post class -->
</div>
<script>
    $('.first-call').hide();
</script>
<style>
    ul.menu ul,
    div.menu ul ul {
        position: fixed !important;
    }
</style>
<?php get_footer(); ?>
