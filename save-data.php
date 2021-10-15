<?php
    if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' ):
        $success = true; // when you proccess data result will be ture or false
        if ($success === true)
            $response = ['error' => false, 'message' => 'Your registration successful message.'];
        else
            $response = ['error' => true, 'message' => 'Your error message.'];

        die(json_encode($response));
    else:
        die("Invalid request");
    endif;