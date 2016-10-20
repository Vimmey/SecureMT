<?php
require_once(DIRNAME(__FILE__) . "/../model/accountDetails.php");

$success = true;

$data = json_decode(file_get_contents('php://input'), true);
// $data = array("userid" => 2505);

if (!empty($data["username"]) && !empty($data["username"])) {
    $userId = $data["userid"];
    $password = $data["password"];
} else {
    $userId = "invalid-user-id";
    $response = "Invalid Parameters Sent in request.";
    header('INVALID PARAMETERS', true, 400);
    $success = false;
}

if ($success) {

