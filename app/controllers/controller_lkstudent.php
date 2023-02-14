<?php

class Controller_Lkstudent extends Controller{
    function __construct()
    {
        $this->model = new Model_Lkstudent();
        $this->view = new View();
    }
    function action_index()
    {
        $data = $this->model->get_data();
        $this->view->generate('lkstudent_view.php', 'template_view.php', $data);
    }

    function action_logout() {
        $this->model->logout();
    }

}