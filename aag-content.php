<div class="row">
    <div class="col-12 page-content">
        <?php // the_title(); ?>
        <?php the_content(); ?>
        <?php if(get_field('heading_in_bold')){
            while(has_sub_field('heading_in_bold')){

                ?>
                <h3 class="kill-bold"><span class="text-theme-blue"><?php echo get_sub_field('box_1'); ?></span> <span class="text-danger"><?php echo get_sub_field('box_2_red'); ?></span> <?php echo get_sub_field('box_3'); ?></h3>
            <?php }} ?>
        <?php echo get_field('editor'); ?>
        <div class="clear"></div>

    </div>
    <?php if(get_field('content_part_2')) { ?>
        <?php $count = 1; ?>
        <?php while(has_sub_field('content_part_2')){ ?>

            <div class="<?php echo $count < 3 ? 'col-md-6 ' : 'col-12 ' ?> page-content">
                <h4><?php echo get_sub_field('sub_title'); ?></h4>
                <?php echo get_sub_field('text'); ?>
                <div class="clear"></div>
            </div>
            <?php ++$count; ?>
        <?php } ?>

    <?php } ?>
</div> <!-- end row -->