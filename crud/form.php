<?php

if (!$user) {
    header("Location: index.php");

    exit;
}
?>

<!doctype html>

<html lang="en">
<head>

    <meta charset="UTF-8">
    <title></title>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<body>



<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>
                <?php if ($user['id']): ?>
                    Редактирование пользователя <b><?php echo $user['uname'] ?></b>
                <?php else: ?>
                    Create new User
                <?php endif ?>
            </h3>
        </div>
        <div class="card-body">

            <form method="POST" enctype="multipart/form-data"
                  action="">
                <div class="form-group">
                    <label>Логин</label>
                    <input name="uname" value="<?php echo $user['uname'] ?>"

                </div>
                <div class="form-group">
                    <label>Имя</label>
                    <input name="name" value="<?php echo $user['name'] ?>"

                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input name="email" value="<?php echo $user['email'] ?>"

                </div>
                <div class="form-group">
                    <label>Пороль</label>
                    <input name="pass" value="<?php echo $user['pass'] ?>"

                </div>
                <p>
                <button class="btn btn-success">Submit</button>
                </p>
            </form>
        </div>
    </div>
</div>
</body>