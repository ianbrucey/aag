<div class="p-3">
    <button class="btn bg-theme-blue text-white hubspot-form-btn" style=" margin-bottom: 0px; text-transform: none">

        <h5 class="text-white mb-1">
            Request Your
                <b>FREE</b> Consultation</h5>
        <h6>We’ll help you get the benefits your family deserves.</h6>
    </button>

    <script>
        hbspt.forms.create({
            portalId: "3948946",
            formId: "a6425d5f-b1cb-4da1-8387-824fe1e3ad3a",
            onFormReady(){
                var iframes = window.document.getElementsByTagName('iframe');
                var iframeLength = iframes.length;
                for(var i = 0; i < iframeLength; i++) {
                    var hubspotForm = $(window.document.getElementsByTagName('iframe')[i]
                        .contentDocument);

                    hubspotForm.find('input[name=zip_code]')
                        .attr('maxlength',5);

                    hubspotForm.find('input[name=phone]')
                        .attr('maxlength',10);
                    hubspotForm.find('input').on('keyup', function(){
                        $('#wp-hubspot-popup').detach();
                    });
                }

            }
        });
    </script>
</div>