<?php

class Home extends Controller {
	public function index($name) {
		// passing the user parameter
		$user = $this->user;
		$user->name = $name;
		// calling the view (directory/file)
		$this->view('home/index', ['name' => $user->name]);
	}
	public function create($username, $email) {
		User::create([
				'username' => $username,
				'email' => $email
			]);
		header("Location: /");
	}

}