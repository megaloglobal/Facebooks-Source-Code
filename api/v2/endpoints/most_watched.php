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

$limit = (!empty($_POST['limit']) && is_numeric($_POST['limit']) && $_POST['limit'] > 0 && $_POST['limit'] <= 50 ? Wo_Secure($_POST['limit']) : 20);

$most_matched = Wo_GetMtwFilms($limit);
$response_data = array(
                    'api_status' => 200,
                    'data'         => $most_matched
                );