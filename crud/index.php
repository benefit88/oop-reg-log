<?php
require 'crudUser.php';
$users = getUsers();

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
        <p>
            <a class="btn btn-success" href="create.php">Create new User</a>
        </p>

        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th>Логин</th>
                <th>Имя</th>
                <th>Email</th>
                <th>Пороль</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($users as $user):?>
            <?php

                ?>

                <tr>

                    <td><?php echo $user['uname'] ?></td>
                    <td><?php echo $user['name'] ?></td>
                    <td><?php echo $user['email'] ?></td>
                    <td><?php echo $user['pass'] ?></td>

                    <td>
                        <a href="view.php?id=<?php echo $user['id'] ?>" class="btn btn-sm btn-outline-info">View</a>
                        <a href="update.php?id=<?php echo $user['id'] ?>"
                           class="btn btn-sm btn-outline-secondary">Update</a>
                        <form method="POST" action="delete.php">
                            <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
                            <button class="btn btn-sm btn-outline-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach;; ?>
            </tbody>
        </table>
    </div>

</body>
