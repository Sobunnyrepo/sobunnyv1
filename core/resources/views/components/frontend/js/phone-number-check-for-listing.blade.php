@php
    $countries = \Modules\CountryManage\app\Models\Country::all_countries();
    $restricted_countries = $countries->pluck('country_code')->toJson();
@endphp

<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/js/intlTelInput.min.js"></script>


<script type="text/javascript">
    (function($) {
        "use strict";

        $(document).ready(function() {
            const input = document.querySelector("#phone");
            const hiddenInput = document.querySelector("#country-code");
            const errorMsg = document.querySelector("#error-msg");
            const errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];
            const allowedCountryCodes = {!! $restricted_countries !!}.map(countryCode => countryCode.toLowerCase());

            const iti = window.intlTelInput(input, {
                hiddenInput: "full_number",
                nationalMode: false,
                formatOnDisplay: true,
                separateDialCode: true,
                autoHideDialCode: true,
                autoPlaceholder: "aggressive",
                initialCountry: {!! $restricted_countries !!}[0],
                placeholderNumberType: "MOBILE",
                preferredCountries: {!! $restricted_countries !!}[0],
                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/18.1.1/js/utils.js",
                allowDropdown: true,
                searchCountryFlag: true
            });

            $('.iti__country').each(function() {
                const countryDataCode = $(this).attr('data-country-code').toLowerCase();
                if (countryDataCode && !allowedCountryCodes.includes(countryDataCode)) {
                    $(this).hide();
                }
            });

            input.addEventListener('input', validatePhoneNumber);

            function validatePhoneNumber() {
                reset();
                const isValid = iti.isValidNumber();
                $(input).toggleClass('form-control is-invalid', !isValid).toggleClass('form-control is-valid', isValid);
                if (!isValid) {
                    const errorCode = iti.getValidationError();
                    errorMsg.innerHTML = errorMap[errorCode];
                    $(errorMsg).toggle(!!errorCode);
                } else {
                    const fullNumber = iti.getNumber();
                    hiddenInput.value = fullNumber; // Set full formatted phone number
                }
            }

            function reset() {
                $(input).removeClass('form-control is-invalid is-valid');
                errorMsg.innerHTML = "";
                $(errorMsg).hide();
            }
        });

    })(jQuery);
</script>



<script type="text/javascript">
    (function($) {
        "use strict";

        $(document).on('keyup', '#phone', function() {
            $(document).on('keyup', '#phone', function() {
                let phone = $(this).val();
                let phoneRegex = /([0-9]{4})|(\([0-9]{3}\)\s+[0-9]{3}\-[0-9]{4})/;
                let expectedLength = 30; // Expected length of the phone number

                if (phoneRegex.test(phone) && phone.length === expectedLength) {
                    $("#phone_availability").html("<span style='color: green;'>{{ __('Great! Your phone number is valid') }}</span>");
                } else if (phone.length < minLength || phone.length > maxLength) {
                    $("#phone_availability").html("<span style='color: red;'>{{ __('Enter valid phone number') }}</span>");
                } else if (phone.length === 0) {
                    $("#phone_availability").html("<span style='color: red;'>{{ __('Phone number cannot be empty') }}</span>");
                } else {
                    $("#phone_availability").html("<span style='color: red;'>{{ __('Invalid phone number format') }}</span>");
                }
            });
        });

    })(jQuery);
</script>
