<?php

include "user.php";
$user = new user();

$user->uname= $_POST['uname'];
$user->pass= $_POST['pass'];
$response = array(
    "status" => 0,
    "message" => "failed",
    "result"=>0
);
$errorEmpty = false;

if(isset($_POST['uname']) || isset($_POST['pass'])) {
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];

    session_start();
    if ($user->checkLoginPass() == true) {
        $user->asd();

        $response['status'] = "1";

//             $response['message'] = "<script>window.location='profile.php';</script>";
        $response['result'] = $pass;
        $response['result'] = array($uname,$pass);


    }
    else
    {
        $response['message'] = "Не верный логил или пароль.";
    }

}
echo  json_encode($response,JSON_UNESCAPED_UNICODE);
