<?php

class Controller_Journal extends Controller
{
    function __construct()
    {
        $this->model = new Model_Journal();
        $this->view = new View();
    }

    function action_index()
    {
        $data = $this->model->get_groups();
        $more = $this->model->get_data();
        $grades = $this->model->get_grades();
        $results = $this -> model -> change_grade();

        if($_COOKIE['admin_status'] == 0){
            $this->view->generate('journal_view.php', 'templateLogged_view.php', $data, $more, $grades);
        } else {
            $this -> view -> generate('journalTeacher_view.php', 'templateLogged_view.php', $data, $more, $grades, $results);
        }
    }
}