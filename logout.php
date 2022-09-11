<?php

session_start();

if (session_destroy()) {
    setcookie("uname", "");
    setcookie("pass", "");
    header("location:index.php");

}