<?php
    $captcha_response = trim($_GET['response']);

    if($captcha_response != '')
    {
        $keySecret = 'Your secret key';

        $check = array(
            'secret'   => $keySecret,
            'response' => $captcha_response
        );

        $startProcess = curl_init();

        curl_setopt($startProcess, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");

        curl_setopt($startProcess, CURLOPT_POST, true);

        curl_setopt($startProcess, CURLOPT_POSTFIELDS, http_build_query($check));

        curl_setopt($startProcess, CURLOPT_SSL_VERIFYPEER, false);

        curl_setopt($startProcess, CURLOPT_RETURNTRANSFER, true);

        $receiveData = curl_exec($startProcess);
    }
    else
        $receiveData = json_encode(['success' => false, 'error-codes' => ['Validation Fail. Try Again']]);

    die($receiveData);