<?php
class Model_Lkstudent extends Model{
    public function get_data()
    {
        $user_id = $_SESSION['user_id'];

        $conn = mysqli_connect('localhost', 'root', '', 'necodewars');
        $query = "SELECT * FROM users WHERE id = 1";
        $result = mysqli_query($conn,$query);

        return mysqli_fetch_assoc($result);
    }

    public function logout(){
        session_start();
        unset($_SESSION['user_id']);
        session_destroy();
        session_unset();
        return header('Location: http://necodewars/login');
    }
}