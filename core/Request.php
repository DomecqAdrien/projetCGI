<?php
class Request {

    public $url; 
    public $prefix = false;
    public $data = false;

    function __construct(){
        $this->url = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO']:'/';
        if(!empty($_POST)){
            $this->data = new stdClass();
            foreach ($_POST as $k => $v) {
                $this->data->$k=$v;
            }
        }
    }
}