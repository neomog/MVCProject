<?php
    /**
     * App Core Class
     * Creates URL & loads core controller
     * URL FORMAT - /controller/method/params
     **/
    class Core {
        //Class needs to be modified when virtual domain is created
        //to avoid seo friendly url error
        protected $currentController = 'Pages';
        protected $currentMethod = 'index';
        protected $params = [];

        public function __construct()
        {
            $url = $this->getUrl();
            // Look in controllers for first value
            if(file_exists('../app/controllers/' . ucwords($url[2]). '.php')){
                $this->currentController = ucwords($url[2]);
                // Unset 0 Index
                unset($url[2]);
            }

            // Require the controller
            require_once '../app/controllers/'. $this->currentController . '.php';

            // Instantiate controller class
            $this->currentController = new $this->currentController;

            // Check for second index of url for method
            if(isset($url[3])) {

                // Check to see if method exists in current controller
                if(method_exists($this->currentController, $url[3])) {
                    $this->currentMethod = $url[3];
                    // unset current index
                    unset($url[3]);
                    //check possibility of unsetting when set with live server
                    unset($url[0]);
                    unset($url[1]);
                }
            }
            // Get params
            $this->params = $url ? array_values($url) : [];
            // Call a callback with array of parameters
            call_user_func([$this->currentController, $this->currentMethod], $this->params[0]);
        }

        public function getUrl()
        {
            if(isset($_SERVER['REQUEST_URI'])) {
                $url = rtrim($_SERVER['REQUEST_URI'], '/');
                $url = $_SERVER['REQUEST_URI'];
                $url = filter_var($url, FILTER_SANITIZE_URL);
                return explode('/', $url);
            }
        }
    }