<?php

class Controller_allResults extends Controller
{
    function __construct()
    {
        $this->model = new Model_allResults();
        $this->view = new View();
    }

    function action_index()
    {
        $data = $this -> model -> get_data();
        $this->view->generate('allResults_view.php', 'templateLogged_view.php', $data);
    }
}