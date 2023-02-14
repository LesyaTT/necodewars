<?php
class Model_Login extends Model{
    public function get_data()
    {
        $conn = mysqli_connect('localhost', 'root', '', 'necodewars');

        $login = $_POST['login'];
        $password = $_POST['password'];

        $query = "SELECT * FROM users WHERE login='$login'";
        $result = mysqli_query($conn,$query);

        if(!$result){
            return 'Неверный логин';
        } else {
            $row = mysqli_fetch_assoc($result);
            if($password == $row['password']){
                session_start();
                $_SESSION['user_id'] = $row['id'];
                if($row['admin_status'] == 1) {
                    return $this->redirect('/lkteacher');
                } else {
                    return $this->redirect('/lkstudent');
                }
            } else {
                return 'Неверный пароль';
            }
        }
    }
}