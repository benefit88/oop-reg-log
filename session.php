<?php
session_start();

if(empty($_SESSION['uname']))
{
    header('Location:index.php');;
}

$user=$_SESSION['uname'];





