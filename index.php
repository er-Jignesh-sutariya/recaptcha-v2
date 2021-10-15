<!DOCTYPE html>
<html > 
    <head>
        <meta charset="utf-8" />    
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container mt-5">
            <div class="row">
                <div class="col-sm-12" id="message"></div>
                <div class="col-sm-12">
                    <form method="POST" action="save-data.php" accept-charset="UTF-8" class="contact-form" name="contactForm" id="contactForm">
                    <div class="controls">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Name <sup>*</sup></label>                
                                    <input id="name" type="text" name="name" class="form-control" placeholder="Name *" maxlength="255" >
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email_id">Email ID <sup>*</sup></label>                
                                    <input id="email_id" type="email" name="email_id" class="form-control" placeholder="Email ID *" maxlength="255" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="contact_no">Contact Number <sup>*</sup></label>
                                    <input id="contact_no" type="text" name="contact_no" class="form-control" placeholder="Contact Number *" pattern="[0-9]{10}" maxlength="10" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="g-recaptcha" data-callback="validateCaptcha" data-expired-callback="expiredCaptcha" data-sitekey="Your site key"></div>
                                    <div class="captcha-error text-danger"><sup>Captcha is required</sup></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                </div>
                            </div>
                        </div>
                        <input type="submit" class="btnSecondary" value="Submit">
                    </form>
                </div>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
        <script src="js/script.js?v=1.0.1"></script>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    </body>
</html>