<?php
class Model_taskResult extends Model{
    public function get_task_id()
    {
        $getParams = explode('?', $_SERVER['REQUEST_URI']);
        $taskSeparator = explode('=', $getParams[1]);
        $ampersand = explode('&', $taskSeparator[1]);

        return $ampersand[0];
    }

    public function get_student_id()
    {
        $getParams = explode('?', $_SERVER['REQUEST_URI']);
        $taskSeparator = explode('=', $getParams[1]);

        return $taskSeparator[2];
    }

    public function get_data()
    {
        $task_id = $this -> get_task_id();
        $student_name = $this -> get_student_id();
        $result = $this -> get_conn("SELECT tasks.title, tasks.description, `task_id`, `autotest_result`, `plagearism_result`, `code`, `grade` FROM results JOIN tasks ON results.task_id = tasks.id WHERE `task_id` = '$task_id' AND `student_id` = '$student_name'");

        return mysqli_fetch_assoc($result);
    }

    public function upgrade_grade(){
        $newGrade = $_POST['newGrade'];
        $task_id = $this -> get_task_id();
        $student_id = $this -> get_student_id();

        if(isset($_POST['submit'])){
            $this -> get_conn("UPDATE results SET `grade` = '$newGrade' WHERE `task_id` = '$task_id' AND `student_id` = '$student_id'");
        }
    }
}