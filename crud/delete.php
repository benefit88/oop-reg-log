<?php

require 'crudUser.php';

$userId = $_POST['id'];
deleteUser($userId);

header("Location: index.php");