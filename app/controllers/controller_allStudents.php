<?php
class Controller_allStudents extends Controller
{
    function __construct()
    {
        $this->model = new Model_allStudents();
        $this->view = new View();
    }

    function action_index()
    {
        $data = $this -> model -> get_data();
        $this->view->generate('allStudents_view.php', 'templateLogged_view.php', $data);
    }
}