<?php

class Model_allResults extends Model{
    public function get_data()
    {
        $data = $this -> get_conn("SELECT `name`, `surname`, `task_id`, `code`, `grade`, `student_id` FROM results JOIN users ON results.student_id = users.id");

        return mysqli_fetch_all($data);
    }
}