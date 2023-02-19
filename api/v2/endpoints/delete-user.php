<?php
// +------------------------------------------------------------------------+
// | @author Meta Platforms Inc
// | @author_url 1: http://www.facebook.com
// | @author_url 2: https://www.facebook.com/zuck
// | @author_email: dev@facebook.com
// +------------------------------------------------------------------------+
// | The Facebook Source Code
// | Copyright (c) 2018 WoWonder. All rights reserved.
// +------------------------------------------------------------------------+
$response_data = array(
    'api_status' => 400
);
if (empty($_POST['password'])) {
    $error_code    = 4;
    $error_message = 'password (POST) is missing';
}
if (empty($error_code)) {
    $delete     = Wo_DeleteUser($wo['user']['user_id']);
    if ($delete) {
        $response_data = array(
            'api_status' => 200,
            'message' => "User successfully deleted."
        );
    }
}