<?php
require 'crudUser.php';


$userId = $_GET['id'];

$user = getUserById($userId);





if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = array_merge($user, $_POST);

        $user = updateUser($_POST, $userId);
        header("Location: index.php");

}

?>
<?php include 'form.php' ?>