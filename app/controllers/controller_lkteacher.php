<?php

class Controller_Lkteacher extends Controller{
    function __construct()
    {
        $this->model = new Model_Lkteacher();
        $this->view = new View();
    }
    function action_index()
    {
        $data = $this->model->get_data();
        $this->view->generate('lkteacher_view.php', 'template_view.php', $data);
    }

    function action_logout() {
        session_start();
        session_destroy();
        header('Location: http://necodewars/login');
        exit();
    }

}