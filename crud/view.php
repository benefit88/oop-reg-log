<?php
require 'crudUser.php';


$userId = $_GET['id'];

$user = getUserById($userId);


?>


<!doctype html>

<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Выбраный пользователь :  <b><?php echo $user['name'] ?></b></h3>
            </div>
            <div class="card-body">
                <a class="btn btn-secondary" href="update.php?id=<?php echo $user['id'] ?>">Редактировать</a>
                <form style="display: inline-block" method="POST" action="delete.php">
                    <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
                    <button class="btn btn-danger">Удалить</button>
                </form>
            </div>
            <table class="table">
                <tbody>
                <tr>
                    <th>Логин:</th>
                    <td><?php echo $user['uname'] ?></td>
                </tr>
                <tr>
                    <th>Имя:</th>
                    <td><?php echo $user['name'] ?></td>
                </tr>
                <tr>
                    <th>Email:</th>
                    <td><?php echo $user['email'] ?></td>
                </tr>
                <tr>
                    <th>Пороль:</th>
                    <td><?php echo $user['pass'] ?></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>

