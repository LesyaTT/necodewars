<?php
class Controller_taskResult extends Controller
{
    function __construct()
    {
        $this->model = new Model_taskResult();
        $this->view = new View();
    }

    function action_index()
    {
        $this -> model -> get_task_id();
        $this -> model -> get_student_id();
        $data = $this -> model -> get_data();
        $this -> model -> upgrade_grade();

        $this->view->generate('taskResult_view.php', 'templateLogged_view.php', $data);
    }
}