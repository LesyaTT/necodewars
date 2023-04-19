<?php

class Model_Journal extends Model{
    public function get_groups(): false|array|null
    {
        $result = $this -> get_conn("SELECT DISTINCT `group` FROM users");
        return(mysqli_fetch_all($result));
    }

    public function get_data()
    {
        $selected = $_POST['select_group'];
        if(isset($_POST['submit'])){
            $result = $this -> get_conn("SELECT * FROM users WHERE `group` = '$selected'");
            $list = mysqli_fetch_all($result);
        }
        return($list);
    }

    public function get_grades(){
        $result = $this -> get_conn("SELECT * FROM results");
        $arr = mysqli_fetch_all($result);
        return $arr;
    }

    public function change_grade(){
        $task_id = $_POST['task_id'];
        $newGrade = $_POST['grade'];

        if(isset($_POST['submit1'])){
            $this -> get_conn("UPDATE results SET `grade` = '$newGrade' WHERE `task_id` = '$task_id'");
        }

        return $task_id;
    }
}