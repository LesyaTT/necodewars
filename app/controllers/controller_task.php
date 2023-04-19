<?php

class Controller_Task extends Controller{
    function __construct()
    {
        $this->model = new Model_Task();
        $this->view = new View();
    }
    function action_index()
    {
        $data = $this->model->get_data();
        $task = $this->model->get_task_id();
        $this -> model -> send_data();
        $results = $this -> model -> check_output();
        $grades = $this->model->check_plagearism();
        $gradeScore = $this -> model -> score_grade();
        $this->view->generate('task_view.php', 'templateLogged_view.php', $data, $task,$grades, $results, $gradeScore);
    }
}