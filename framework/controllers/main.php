<?php

class Index extends Controller {
	
    function __construct() {
        parent::__construct();
    }
    
    function index() {
        $this->view->errorMsg = '';
        $this->view->render('public');
    }
    
    function SetPageTitle($PageTitle) {
    	$this->view->title = ucfirst($PageTitle);
    }
    
}