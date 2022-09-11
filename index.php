<?php
session_start();
if(isset($_SESSION['uname'])){

    header("location:profile.php");
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
</head>
<!-- CSS only -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<style type="text/css">
    #alert,
    #register-box{
        display: none;
    }
</style>
<body>
<div class="container mt-4">
    <div class="row">
        <div class="col-lg-4 offset-lg-4" id="alert">
            <div class="alert alert-success">
                <strong id="result"></strong>
            </div>
        </div>
    </div>

    <!--        вход-->

    <div class="row">
        <div class="col-lg-4 offset-lg-4" id="login-box">
            <h2 class="text-center mt-2">Вход</h2>
            <form action="" method="post" role="form" class="p-2" id="login-frm">
                <div class="form-group">
                    <input type="text" name="uname" class="form-control" placeholder="Логин" required
                           value="<?php if(isset($_COOKIE['uname'])) { echo $_COOKIE['uname']; } ?>"
                    >
                </div>
                <div class="form-group ">
                    <input type="password" name="pass" class="form-control" placeholder="Пароль" required
                           value="<?php if(isset($_COOKIE['pass'])) { echo $_COOKIE['pass']; } ?>"
                    >
                </div>
                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="rem" class="custom-control-input" id="customCheck"
                            <?php if(isset($_COOKIE['uname'])){ ?> checked <?php } ?>>
                        >
                        <label for="customCheck" class="custom-control-label"> Запомнить </label>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="login" id="login" value="Вход" class="btn btn-primary btn-block">

                    </div>
                    <div class="form-group">
                        <p class="text-center">Новый пользователь? <a href="#" id="register-btn">Регистрация</a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!--        регистрация-->

    <div class="row">
        <div class="col-lg-4 offset-lg-4" id="register-box">
            <h2 class="text-center mt-2">Регистрация</h2>
            <form action="" method="post"role="form" class="p-2" id="register-frm">
                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Имя пользователя"  required >
                </div>
                <div class="form-group ">
                    <input type="text" name="uname" class="form-control" placeholder="Логин" required>
                </div>
                <div class="form-group ">
                    <input type="text" name="email" class="form-control" placeholder="E-mail"required>
                </div>
                <div class="form-group ">
                    <input type="password" name="pass" id="pass" class="form-control" placeholder="Пароль" required>
                </div>
                <div class="form-group ">
                    <input type="password" name="cpass" id="cpass" class="form-control" placeholder="Подтвертите пароль" required>
                </div>
                <div class="form-group">
                    <input type="submit" name="register" id="register" value="Регистрация" class="btn btn-primary btn-block">
                </div>
                <div class="form-group">
                    <p class="text-center">Есть аккаунт? <a href="#" id="login-btn">Вход</a></p>
                </div>
            </form>
        </div>
    </div>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/additional-methods.js" integrity="sha512-n9HW9lIIxL1++t4PqOLyw1sTcqZhvaLBKQOBEwKR3lntF4nVULdfYrD+lklcoM8i0rqEeN522u7d4v7NhvdUWg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>

    <script src="validation.js"></script>
    <script src="reg_log.js"></script>
</body>
</html>










