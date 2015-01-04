<?php

class View {

	public $title = 'Home';
	
    function __construct() {
    }

    public function render($name, $noInclude = false)
    {
        require PUBLIC_SITE . $name . '.php';    
    }

}