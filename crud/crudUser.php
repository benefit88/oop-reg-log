<?php


function getUsers()
{
return json_decode(file_get_contents('../data.json'), true);
}

function getUserById($id)
{
    $users = getUsers();
    foreach ($users as $user) {
        if ($user['id'] == $id) {
            return $user;
        }
    }
    return null;
}

function createUser($data)
{
    $current_data = file_get_contents('../data.json');
    $array_data = json_decode($current_data, true);
    $idList = array_column($array_data, 'id');
    $auto_increment_id = max($idList) + 1;
    $salt = "Jfdjdjfm74774hfbd7f8";
    $pass = sha1($salt . $_POST['pass']);
    $users = getUsers();
    $data['id'] = $auto_increment_id;
    $data['pass']= $pass;
    $users[] = $data;
    putJson($users);
    return $data;
}

function updateUser($data, $id)
{
    $updateUser = [];
    $users = getUsers();
    foreach ($users as $i => $user) {
        if ($user['id'] == $id) {
            $users[$i] = $updateUser = array_merge($user, $data);
        }
    }

    putJson($users);

    return $updateUser;
}

function deleteUser($id)
{
    $users = getUsers();

    foreach ($users as $i => $user) {
        if ($user['id'] == $id) {
            array_splice($users, $i, 1);
        }
    }

    putJson($users);
}


function putJson($users)
{
    file_put_contents( '../data.json', json_encode($users, JSON_PRETTY_PRINT));
}