<div class="p-3">
    <button class="btn bg-theme-blue text-white hubspot-form-btn" style=" margin-bottom: 0px; text-transform: none">

        <h5 class="text-white mb-1">
            Request Your
                <b>FREE</b> Consultation</h5>
        <h6>We’ll help you get the benefits your family deserves.</h6>
    </button>
<!--    <div class="ryt_inr popup-form-container" style="display: ; -webkit-overflow-scrolling: touch !important; overflow-y: scroll !important;">-->
<!--        <div class="clear"></div>-->
<!--        <div class="evl_fm" style="-webkit-overflow-scrolling: touch !important; overflow-y: scroll !important;">-->
<!--            <h3 class="text-center text-white"> Fill in the form below</h3>-->
<!--            --><?php //echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]');?>
<!--        </div>-->
<!--    </div>-->

    <script>
        hbspt.forms.create({
            portalId: "3948946",
            formId: "696d88cf-b0af-49c6-a40b-090317f5c138",
            onFormReady(){
                var iframes = window.document.getElementsByTagName('iframe');
                var iframeLength = iframes.length;
                for(var i = 0; i < iframeLength; i++) {
                    var hubspotForm = $(window.document.getElementsByTagName('iframe')[i]
                        .contentDocument);

                    hubspotForm.find('input[name=zip_code]')
                        .attr('maxlength',5);

                    hubspotForm.find('input[name=phone]')
                        .attr('maxlength',14);
                    hubspotForm.find('input[name=phone]')
                        .on('input',function () {
                            if($(this).val().length === 10) {
                                $(this).val(formatPhoneNumber($(this).val()));
                            }
                        });
                    hubspotForm.find('input').on('input', function(){
                        $('#wp-hubspot-popup').detach();
                    });

                    setTimeout(function () {
                        $($(window.document.getElementsByTagName('iframe')[0].contentDocument).find('input')).val('');
                        $($(window.document.getElementsByTagName('iframe')[0].contentDocument).find('input[type=submit]')).val('submit');
                    },1000);
                }

            }
        });


    </script>
</div>