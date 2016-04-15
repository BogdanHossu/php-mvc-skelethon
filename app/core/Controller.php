<?php

// The base controller class
class Controller {
	// loading the model
	public function model($model) {
		require_once '../app/models/' . $model . '.php';
		// return the model as an object
		return new $model();
	}
	// creating the view
	public function view($view, $data = []) {
		require_once '../app/views/' . $view . '.php';
	}
}