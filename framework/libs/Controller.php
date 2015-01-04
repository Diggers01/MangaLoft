<?php

class Controller {

    function __construct() {
        $this->view = new View();
    }
    
    /**
     * 
     * @param string $name Name of the model
     * @param string $path Location of the models
     */
    public function loadModel($name, $modelPath = null) {
        if (!isset($modelPath)) {
        	$modelPath = FRAMEWORK . 'models/';
        	$projectModelPath = PROJECT_CODE . PROJECT_MODELS . '_model.php';
        }
        else {
        	$projectModelPath = $modelPath;
        }
        $path = $modelPath . $name.'_model.php';
        
        if (file_exists($path) || file_exists($projectModelPath)) {
      		if (file_exists($path)) 
            	require $path;
       		else
       			require $projectModelPath;
            $modelName = $name . '_Model';
            $this->model = new $modelName();
        }   
    }

}