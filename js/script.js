var captchaStatus = false;
$(document).ready(function() {
    $('.captcha-error').hide();
    $("#contactForm").validate({
        rules: {
            name: {
                required: true,
                maxlength: 255
            },
            email_id: {
                required: true,
                email: true,
                maxlength: 255
            },
            contact_no: {
                required: true,
                number: true,
                minlength: 10,
                maxlength: 10,
            }
        },
        errorPlacement: function(error, element) {},
        submitHandler: function(form) {
            if (captchaStatus === false) {
                $('.captcha-error').show();
                return false;
            } else {
                $('.captcha-error').hide();
                $.ajax({
                    url: $(form).attr('action'),
                    type: $(form).attr('method'),
                    data: $(form).serialize(),
                    dataType: 'json',
                    async: false,
                    beforeSend: function() {
                        $(form).find(':submit').hide();
                    },
                    success: function(res) {
                        $('#message').html(`<div class="alert alert-${res.error === true ? 'danger' : 'success'}">${res.message}</div>`);
                        if (res.error === false) {
                            window.location.href = 'success.php';
                        } else
                            return;
                    },
                    complete: function() {
                        $(form).find(':submit').show();
                    }
                });
            }
        }
    });
});

var validateCaptcha = function(response) {
    $.ajax({
        url: "validateCaptcha.php",
        type: "GET",
        data: { 'response': response },
        dataType: 'json',
        async: false,
        beforeSend: function() {
            $('.captcha-error').show();
        },
        success: function(res) {
            if (res.success === true)
                $('.captcha-error').hide();
            else
                $('.captcha-error').show();
            captchaStatus = res.success;
            return res.success;
        }
    });
}

var expiredCaptcha = () => { captchaStatus = false; }