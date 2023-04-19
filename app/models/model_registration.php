<?php

class Model_Registration extends Model{
    public function get_data()
    {
        $conn = mysqli_connect('localhost', 'root', '', 'necodewars');

        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $login = $_POST['login'];
        $password = $_POST['password'];
        $repeat_password = $_POST['repeat_password'];
        $teacher = $_POST['teacher_code'];
        $group = $_POST['group'];

        if($teacher == 123){
            $sql = "INSERT INTO users
            (`name`,`surname`,`group`,`login`,`password`,`admin_status`)
            VALUES 
            ('$name', '$surname', NULL, '$login', '$password', '1')";
        } else {
            $sql = "INSERT INTO users
            (`name`,`surname`,`group`,`login`,`password`,`admin_status`)
            VALUES 
            ('$name', '$surname', '$group', '$login', '$password', '0')";
        }
        
        if(!empty($name && $surname && $login && $password && $repeat_password && $teacher && $group)){
            if($password == $repeat_password){
                mysqli_query($conn, $sql);
                return 'Success';
            } else {
                return 'Неправильный повторный ввод пароля';
            }
        }
    }
}