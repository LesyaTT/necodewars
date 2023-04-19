<?php

class Controller_Lk extends Controller{
    function __construct()
    {
        $this->model = new Model_Lk();
        $this->view = new View();
    }
    function action_index()
    {
        $data = $this->model->get_data();

        if($_COOKIE['admin_status']==1){
            $more = $this->model->get_groups();
            $this->view->generate('lkteacher_view.php', 'templateLogged_view.php', $data, $more);
        } else{
            $more = $this -> model -> get_readyTasks();
            $this->view->generate('lkstudent_view.php', 'templateLogged_view.php', $data, $more);
        }
    }

    function action_logout() {
        $this->logout();
    }

}