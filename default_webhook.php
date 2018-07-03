<?php
date_default_timezone_set('UTC');
$data = array();
$userId=isset($_REQUEST["UserId"]) ? $_REQUEST["UserId"] : "";
if (filter_var($userId, FILTER_VALIDATE_EMAIL)) 

{ $message = "Password for '$userId' is reset successfully. Click on Forgot password and create a new password."; }
else 

{ $message = "Sorry! This doesn't look like a User ID. User ID should be an email address"; }
$data['status'] = "success";
$data['chatbot_response'] = $message;
echo json_encode($data);
?>
