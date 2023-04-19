<?php

class Model {
    public function redirect($url){
        header('Location: http://necodewars'.$url);
        die;
    }

    public function get_conn($query){
        $conn = mysqli_connect('localhost', 'root', '', 'necodewars');
        $result = mysqli_query($conn, $query);
        return $result;
        mysqli_close($conn);
    }

    public function get_data(){

    }
}