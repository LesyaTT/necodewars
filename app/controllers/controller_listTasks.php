<?php

class Controller_listTasks extends Controller
{
    function __construct()
    {
        $this->model = new Model_listTasks();
        $this->view = new View();
    }

    function action_index()
    {
        $data = $this->model->get_data();
        $more = $this -> model -> get_status();
        $this->view->generate('listTasks_view.php', 'templateLogged_view.php', $data, $more);
    }
}