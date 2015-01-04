<?php

	require 'site_settings.php';

// var_dump redoing.
	function var_dump_pre($item){
		echo '<pre>'; // This is for correct handling of newlines
		ob_start();
		var_dump($item);
		$a=ob_get_contents();
		ob_end_clean();
		echo htmlspecialchars($a,ENT_QUOTES); // Escape every HTML special chars (especially > and < )
		echo '</pre>';
	}
	
// Load Libaries.
	function __autoload($class) {
		$file = $class .".php";
	// We check if the lib exists.	
		if (file_exists(LIBS . $file)) {	
	    	require LIBS . $file;
	    }
 	// Check if it is a class in the project.
	    elseif (file_exists(PROJECT_CODE . 'Class' . $file)) {
	    	require PROJECT_CODE . 'Class' . $file;
     	}
 	// Check if it is a form class that we are looking for.
     	elseif (file_exists(LIBS . 'Form/Class' . $file)){
 			 require LIBS . 'Form/Class' . $file;   		
     	}
  	// At this point this class does not exist. 
	   else {	   
	   } 
	}
	
	define('SMARTY_SPL_AUTOLOAD',1);
    require_once(LIBS . 'Smarty/Smarty.class.php');
    spl_autoload_register('__autoload');
    
    session_start();
    if(!isset($_SESSION['lang'])) {
    	$_SESSION['lang'] = 'FR_fr';
    }
    
// Load the Bootstrap!
	$bootstrap = new Bootstrap();

	$bootstrap->init();