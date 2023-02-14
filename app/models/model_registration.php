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
        $admin = $_POST['admin'];

        $sql = "INSERT INTO users
        (name,surname,login,password,admin_status)
        VALUES 
        ('$name', '$surname', '$login', '$password', '$admin')";

        if($password == $repeat_password){
            mysqli_query($conn, $sql);
            return 'Success';
        } else {
            return 'Неправильный повторный ввод пароля';
        }
    }
}