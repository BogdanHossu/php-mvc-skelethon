<?php

// the app class
class App {
	// defining the default controller
	protected $controller = 'home';
	// defining the default method
	protected $method = 'index';
	// defining the parameters array
	protected $params = [];

	public function __construct() {
		$url = $this->parseUrl();

		//check if the controller requested exists
		if(file_exists('../app/controllers/'. $url[0] .'.php')) {
			// set the controller
			$this->controller = $url[0];
			// than we remove the url from the array
			unset($url[0]);
		}
		// than we require the controller
		require_once '../app/controllers/' . $this->controller . '.php';

		// creating an object of the controller
		$this->controller = new $this->controller;

		// check if the method is set
		if(isset($url[1])) {
			if(method_exists($this->controller, $url[1])) {
				// we are setting the method if exists
				$this->method = $url[1];
				// than we are unseting it from the url
				unset($url[1]);
			}

		}
		// if the url has content than add in array or set it to an empty array
		$this->params = $url ? array_values($url) : [];

		// calling the controller and method
		call_user_func_array([$this->controller, $this->method], $this->params);

	}
	public function parseUrl() {
		// we are getting the url and than we setting the .htaccess to it
		if(isset($_GET['url'])) {
			// sanitizing the url to not add new '/' route and put in array
			return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
		}
	}
}