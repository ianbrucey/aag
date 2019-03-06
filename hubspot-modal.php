

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">PLEASE FILL IN THE FORM BELOW</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <!--content-->
                <aside class="ryt_con">
                    <div class="ryt_inr">
                        <div class="clear"></div>
                        <div class="evl_fm">
                            <?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]');?>
                        </div>
                    </div><!--End ryt_inr-->
                </aside><!--End ryt_con-->
            <!--content-->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>