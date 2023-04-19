<?php

class Model_Lk extends Model{
    public function get_data()
    {
        $result = $this -> get_conn("SELECT * FROM users WHERE `id` = '$_COOKIE[user_id]'");
        return mysqli_fetch_assoc($result);
    }

    public function add_task() {
        $task_title = $_POST['title'];
        $task_desc = $_POST['desc'];
        $task_video = $_POST['video'];
        $test_input = $_POST['input'];
        $test_output = $_POST['output'];
        $groups = $_POST['groups'];
        $timestamp = $_POST['date'];

        if(isset($groups)){
            $str = implode(',', $groups);
        }

        if(isset($_POST['submit'])) {
            $this -> get_conn("INSERT INTO tasks (`title`, `description`, `video`, `input`, `output`, `groups`, `timestamp`) VALUES ('$task_title', '$task_desc', '$task_video', '$test_input', '$test_output', '$str', '$timestamp')");
        }
    }

    public function get_groups(): false|array|null
    {
        $result = $this -> get_conn("SELECT DISTINCT `group` FROM users");
        return(mysqli_fetch_all($result));
    }

    public function get_readyTasks(){
        $user_id = $_COOKIE['user_id'];
        $result = $this->get_conn("SELECT tasks.id, `title`, `description` FROM tasks JOIN results ON tasks.id = results.task_id WHERE results.status = '1' AND `student_id` = '$user_id'");
        return mysqli_fetch_all($result);
    }
}