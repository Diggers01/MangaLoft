<?php

class Bootstrap {

    private $_url = null;
    private $_controller = null;
    
    /**
     * Starts the Bootstrap
     * 
     * @return boolean
     */
    public function init()
    {
    // Sets the protected $_url and paths.
        $this->_getUrl();
        $this->setModelPath(FRAMEWORK . 'models/');
        $this->setControllerPath(FRAMEWORK . 'controllers/');
        $this->setDefaultFile('main.php');
        $this->setErrorFile('error.php');

	// Load Language.
		$this->_loadLanguage();
	// Load the default controller if no URL is set
    // eg: Visit http://localhost it loads Default Controller
        if (empty($this->_url[0])) {
            $this->_loadDefaultController();
            return false;
        }

        $this->_loadExistingController();
        $this->_callControllerMethod();
    }
    
    /**
     * (Optional) Set a custom path to controllers
     * @param string $path
     */
    public function setControllerPath($path)
    {
        $this->_controllerPath = trim($path, '/') . '/';
    }
    
    /**
     * (Optional) Set a custom path to models
     * @param string $path
     */
    public function setModelPath($path)
    {
        $this->_modelPath = trim($path, '/') . '/';
    }
    
    /**
     * (Optional) Set a custom path to the error file
     * @param string $path Use the file name of your controller, eg: error.php
     */
    public function setErrorFile($path)
    {
        $this->_errorFile = trim($path, '/');
    }
    
    /**
     * (Optional) Set a custom path to the error file
     * @param string $path Use the file name of your controller, eg: index.php
     */
    public function setDefaultFile($path)
    {
        $this->_defaultFile = trim($path, '/');
    }
    
    /**
     * Fetches the $_GET from 'url'
     */
    private function _getUrl()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $this->_url = explode('/', $url);
    }
    
    /**
     * This loads if there is no GET parameter passed
     */
    private function _loadDefaultController()
    {
        require $this->_controllerPath . $this->_defaultFile;
        $this->_controller = new Index();
        $this->_controller->index();
    }
    
    /**
     * Load an existing controller if there IS a GET parameter passed
     * 
     * @return boolean|string
     */
    private function _loadExistingController()
    {
        $file = PROJECT_CODE . PROJECT_PAGES . $this->_url[0] . '/' . $this->_url[0] . '.php';
        if (file_exists($file)) {
            require $this->_controllerPath . $this->_defaultFile;
            $this->_controller = new Index();
            $this->_controller->SetPageTitle($this->_url[0]);
        	$this->_controller->index();
        }
		else {
      		$this->_error();
            return false;
        }
    }
    
    /**
     * If a method is passed in the GET url paremter
     * 
     *  http://localhost/controller/method/(param)/(param)/(param)
     *  url[0] = Controller
     *  url[1] = Method
     *  url[2] = Param
     *  url[3] = Param
     *  url[4] = Param
     */
    private function _callControllerMethod()
    {
        $length = count($this->_url);
        
        // Make sure the model we are calling exists
        if ($length > 1) {
            if (!file_exists(PROJECT_CODE . PROJECT_MODELS. $this->_url[0] . '_model.php')) {
                $this->_error();
            }
        }
        require PROJECT_CODE . PROJECT_MODELS. $this->_url[0] . '_model.php';
        $className = ucfirst($this->_url[0]) . '_Model';
        // Determine what to load
        switch ($length) {
            case 5:
                //Controller->Method(Param1, Param2, Param3)
                new $className($this->_url[2], $this->_url[3], $this->_url[4]);
                break;
            
            case 4:
                new $className($this->_url[2], $this->_url[3]);
                break;
            
            case 3:
                new $className($this->_url[2]);
                break;
            
            case 2:
                new $className();
                break;
        }
    }
    
    /**
     * Load the Language.
     * 
     */
    private function _loadLanguage()
    {
        $file = PROJECT_CODE . PROJECT_PAGES . '/lang/' . $_SESSION['lang'] . '.php';

        if (file_exists($file)) {
            require $file;
        } else {
      		$this->_error();
            return false;
        }
    }
    
    /**
     * Display an error page if nothing exists
     * 
     * @return boolean
     */
    private function _error() {
        require $this->_controllerPath . $this->_errorFile;
        $this->_controller = new Error();
        $this->_controller->index();
        exit;
    }

}