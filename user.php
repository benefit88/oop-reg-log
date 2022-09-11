<?php
class user
{
    public $name;
    public $uname;
    public $email;
    public $pass;


    function newUser()
    {
        $current_data = file_get_contents('data.json');
        $array_data = json_decode($current_data, true);
        $salt = "Jfdjdjfm74774hfbd7f8";
        $pass = sha1($salt . $this->pass);
        $idList = array_column($array_data, 'id');
        $auto_increment_id = max($idList) + 1;


        $extra = array(
            'name' => $this->name,
            'uname' => $this->uname,
            'email' => $this->email,
            'pass' => $pass,
            'id'=> $auto_increment_id

        );
        $array_data[] = $extra;
        $final_data = json_encode($array_data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        file_put_contents('data.json', $final_data);
        return true;
    }



    public function nameExists()
    {
        $current_data = file_get_contents('data.json');
        $array_data = json_decode($current_data, true);
        foreach ($array_data as $key => $value) {
            if ($value['uname'] == $this->uname) {

                return true;
            }
        }
        return false;
    }

    public function emailExists()
    {
        $current_data = file_get_contents('data.json');
        $array_data = json_decode($current_data, true);
        foreach ($array_data as $key => $value) {
            if (($value['email'] == $this->email)) {
                return true;
            }
        }
        return false;
    }

    public function checkLoginPass()
    {
        $salt = "Jfdjdjfm74774hfbd7f8";
        $pass = sha1($salt . $this->pass);
        $current_data = file_get_contents('data.json');
        $array_data = json_decode($current_data, true);
        foreach ($array_data as $key => $value) {
            if ($value['uname'] == $this->uname && $value['pass'] == $pass) {
                return true;

            }

        }

        return false;


    }

    public function asd()
    {
        $_SESSION['uname'] = $this->uname;
        if (!empty($_POST['rem'])) {
            setcookie("uname", $this->uname, time() + (10 * 365 * 24 * 60 * 60));
            setcookie("pass", $this->pass, time() + (10 * 365 * 24 * 60 * 60));
            return true;
        } else {
            if (isset($_COOKIE['username'])) {
                setcookie("username", "");
            }
            if (isset($_COOKIE['password'])) {
                setcookie("password", "");
            }
        }
    }






}




