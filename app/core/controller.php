<?php

class Controller {
	
	public $model;
	public $view;
	
	function __construct()
	{
		$this->view = new View();
	}
	
	function action_index()
	{
	}

    function logout() {
        session_destroy();
        setcookie('user_id', '', -2147483647, '/');
        setcookie('admin_status', '', -2147483647, '/');
        return header('Location: http://necodewars/login');
    }
}