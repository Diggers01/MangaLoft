<?php

class Error extends Controller {

    function __construct() {
        parent::__construct(); 
    }
    
    function index() {
        $this->view->title = '404 Error';
        $this->view->errorMsg = 'This page doesnt exist';
        $this->view->render('public');
    }

}