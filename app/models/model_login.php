<?php
class Model_Login extends Model{
    public function get_data()
    {
        $conn = mysqli_connect('localhost', 'root', '', 'necodewars');

        $login = $_POST['login'];
        $password = $_POST['password'];

        $query = "SELECT * FROM users WHERE `login`='$login'";
        $result = mysqli_query($conn,$query);

        if(isset($_POST['submit'])){
            if(!$result){
                return 'Неверный логин';
            } else {
                $row = mysqli_fetch_assoc($result);
                if($password == $row['password']){
                    setcookie("user_id", $row['id']);
                    setcookie("user_group", $row['group']);
                    setcookie("admin_status", $row['admin_status']);
                    $this->redirect('/lk');
                } else {
                    return 'Неверный пароль';
                }
            }
        }
    }
}