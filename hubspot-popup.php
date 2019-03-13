

<!-- Modal -->

<div class="modal fade" id="wp-hubspot-popup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            <div class="modal-body">
                <!--content-->
                <aside class="ryt_con" style="max-height: 400px; position: static; overflow: hidden; overflow-y: scroll">
                    <div class="text-white p-2 popup-info-container" >
                        <h5 class="text-center"><b>Get the financial benefits you deserve!</b></h5>
                        <p class="p-3">if you are struggling financially to take care of your child with special needs, we can help. Disability benefits such as In-Home Supportive Services (IHSS) are crucial in assisting you to pay the bills every month.<br>

                            To find out if you qualify, just fill out the information and we’ll contact you to schedule your FREE consultation</p>
                        <br>
                        <button type="button" class="btn btn-warning text-theme-blue w-100 go-to-eval-form" data-dismiss="modal" aria-label="Close">
                            <b>Get your free evaluation</b>
                        </button>
                    </div>
                    <div class="ryt_inr popup-form-container" style="display: none; -webkit-overflow-scrolling: touch !important; overflow-y: scroll !important;">
                        <div class="clear"></div>
                        <div class="evl_fm" style="-webkit-overflow-scrolling: touch !important; overflow-y: scroll !important;">
                            <h3 class="text-center text-white"> Fill in the form below</h3>
                            <?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]');?>
                        </div>
                    </div>
                </aside>
                <!--content-->
            </div>
        </div>
    </div>
</div>