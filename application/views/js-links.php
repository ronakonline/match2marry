<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA0C5etf1GVmL_ldVAichWwFFVcDfa1y_c"></script>
<!-- inject:js-->
<script src="<?php echo base_url();?>assets/js/plugins.min.js"></script>
<script src="<?php echo base_url();?>assets/js/script.min.js"></script>

<!-- endinject-->
</body>

<script>
    $(document).ready(function(){
        $("#zipcode").change(function(){
            var zipcode = $("#zipcode").val();

            if(zipcode != '')
            {
                $.ajax({
                    url:"<?php echo base_url(); ?>home/fetch_city",
                    method:"POST",
                    data:{zipcode:zipcode},
                    success:function(data)
                    {
                        $("#city").val(data)
                    }
                });
            }
        });
        $("#city").change(function(){
            var city = $("#city").val();
            if(city != '')
            {
                $.ajax({
                    url:"<?php echo base_url(); ?>home/fetch_zipcode",
                    method:"POST",
                    data:{city:city},
                    success:function(data)
                    {

                        $("#zipcode").val(data)
                    }
                });
            }
        });
    });
</script>
<script src="<?php echo base_url(); ?>/assets/intl-tel-input-master/build/js/intlTelInput.js"></script>
<script>
    var input = document.querySelector("#phoneno");
    window.intlTelInput(input, {
        // allowDropdown: false,
        // autoHideDialCode: false,
        // autoPlaceholder: "off",
        // dropdownContainer: document.body,
        // excludeCountries: ["us"],
        // formatOnDisplay: false,
        // geoIpLookup: function(callback) {
        //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
        //     var countryCode = (resp && resp.country) ? resp.country : "";
        //     callback(countryCode);
        //   });
        // },
        hiddenInput: "full_number",
        // initialCountry: "auto",
        // localizedCountries: { 'de': 'Deutschland' },
        // nationalMode: false,
        // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
        // placeholderNumberType: "MOBILE",
        // preferredCountries: ['cn', 'jp'],
        // separateDialCode: true,
        utilsScript: "<?php echo base_url(); ?>/assets/intl-tel-input-master/build/js/utils.js",
    });
</script>
</html>