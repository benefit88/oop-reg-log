<?php
include "user.php";
$user = new user();

$data = json_decode(file_get_contents("php://input"));

if (
    !empty($data->name) &&
    !empty($data->uname) &&
    !empty($data->email) &&
    !empty($data->pass)

) {

    $user->name = $data->name;
    $user->uname = $data->uname;
    $user->email = $data->email;
    $user->pass = $data->pass;


    if ($user->nameExists() == true) {
        http_response_code(503);

        // сообщим пользователю
        echo json_encode(array("message" => "Пользаватель с таким логином существует."), JSON_UNESCAPED_UNICODE);
    } elseif ($user->emailExists() == true) {
        http_response_code(503);

        echo json_encode(array("message" => "Пользаватель с таким email существует."), JSON_UNESCAPED_UNICODE);
    } else {
        $user->newUser();
        http_response_code(201);

        echo json_encode(array("message" => "Пользователь зарегистрирован."), JSON_UNESCAPED_UNICODE);
    }
}



