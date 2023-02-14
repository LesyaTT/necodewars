<?php
class Model_Lkstudent extends Model{
    public function get_data()
    {
        return $_SESSION['user_id'];
    }

    public function logout(){
        session_start();
        unset($_SESSION['user_id']);
        session_destroy();
        session_unset();
        return header('Location: http://necodewars/login');
    }
}