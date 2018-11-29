<?php

class AdminController extends Controller{

    function index(){
    	$this->loadModel('User');

    	$d['users'] = User::getAll('object');

    	$this->set($d);
    }

    function update($id){
    	$this->loadModel('User');
    	$this->loadModel('Adherent');

    	$d['user'] = new User($id);
    	var_dump($d);

    	$this->set($d);


    }


}