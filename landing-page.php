<?php
/**
 * Template Name: Landing Page
 * User: macbook
 * Date: 3/4/19
 * Time: 4:49 PM
 */
get_header('landing');
$url = get_the_post_thumbnail_url();
?>
<!--<img src="--><?php //echo get_the_post_thumbnail() ?><!--">-->
<?php // the_content(); ?>
<!---->
<div class="row">
    <div class="col-12 text-center bg-white d-md-none d-sm-block ">
        <h3 ><a class="text-theme-red" href="tel:8442554477"><b>Call us at 844.255.4477</b></a> </h3>
    </div>
    <div class="col-12" style="background-image: url(<?php the_post_thumbnail_url() ?>); background-size: cover; background-repeat: no-repeat; height: auto; padding: 0">

        <div class="container-fluid text-white text-center pt-5" style="background: rgba(0,0,0,.3); height: 100%; width: 100%">
            <div class="row">
                <div class="col-md-6 ">
                    <h1 class="mt-5">
                        <b>
                            <?php echo get_field('question') ?>
                        </b>
                        <br>
                        <?php echo get_field('answer') ?>
                    </h1>

                </div>
                <div class="col-md-6" id="evaluation">
                    <?php get_template_part('hubspot-form-landing') ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row " id="support-section">
    <div class="col-md-6 offset-md-1 col-sm-12 text-center page-content" style="background: white; ">
        <h1 class="mt-4 text-theme-blue"><?php echo get_field('support_title') ?></h1>
        <p><?php echo get_field('support_body') ?></p>

    </div>
    <div class="col-md-4 col-sm-12 text-center pt-5 pb-5" style="background: white; ">
        <img src="<?php echo get_field('support_image') ?>" class="mt-5" style="width: 80%">
    </div>
<!--    <br>-->
</div>

<div class="row bg-theme-blue " id="review-section">
    <div class="col-12 text-white text-center">
        <br><br>
        <h1 >What Our Community Has to Say</h1>
        <br><br>
    </div>
    <?php for($i = 1; $i <= 4; $i++): ?>
        <?php if(empty(get_field(sprintf("review_name_%s", $i)))) break; ?>
        <br>
    <div class="col-12 bg-theme-blue text-white text-center ">
        <h6 class=""><?php echo get_field(sprintf("review_name_%s", $i)) ?></h6>
        <h6 class=""><?php echo get_field(sprintf("location_%s", $i)) ?></h6>
    </div>
    <div class="col-md-6 offset-md-3 bg-theme-blue" style="">
        <div class="p-3 " style="background: white; border-radius: .4em !important;">
            <h3 class="text-theme-blue"><i>"<?php echo get_field(sprintf("large_quote_%s", $i)) ?>"</i></h3>
            <p style="color: black !important">"<?php echo get_field(sprintf("small_quote_%s", $i)) ?>"</p>
        </div>
    </div>
        <div class="col-12"><br></div>
    <?php endfor; ?>
</div>
<div class="row" id="final-section" style="background: white">
    <div class="col-md-6 offset-md-3 text-center p-5">
        <h4 class="text-theme-blue">Every child with special needs deserves full supervised care, and no family should be turned away.
            <hr class="bg-theme-blue">
        </h4>
        <h1 class="text-danger"><b>Contact Us Today!</b></h1>
    </div>
    <div class="col-md-6 offset-md-3">
        <img src="<?php echo get_field('closing_image') ?>" style="width: 100%" class="m-4">

    </div>
</div>

<?php get_footer() ?>