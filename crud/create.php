<?php
require 'crudUser.php';


$user = [
    'id' => '',
    'uname' => '',
    'name' => '',
    'email' => '',
    'pass' => '',
];



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = array_merge($user, $_POST);
    $user = createUser($_POST);



    header("Location: index.php");
    }


?>

<?php include 'form.php' ?>