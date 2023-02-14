<?php

class Model {
    public function redirect($url){
        header('Location: http://necodewars'.$url);
        die();
    }
    public function get_data(){
    }
}