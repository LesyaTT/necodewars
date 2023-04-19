<?php

class Model_listTasks extends Model
{
    public function get_data()
    {
        $user_group = $_COOKIE['user_group'];

        $result = $this->get_conn("SELECT * FROM tasks WHERE `groups` LIKE '%$user_group%'");
        if ($result->num_rows > 0) {
            return mysqli_fetch_all($result);
        } else {
            return 'Для вашей группы нет заданий';
        }
    }

    public function get_status(){
        $user_id = $_COOKIE['user_id'];
        $result = $this->get_conn("SELECT `task_id` FROM results WHERE `student_id` = '$user_id'");
        return mysqli_fetch_all($result);
    }
}