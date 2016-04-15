<?php

use Illuminate\Database\Capsule\Manager as Capsule;

// creating a new capsule
$capsule = new Capsule();

// adding the connection to database
$capsule->addConnection([
		'driver' => 'mysql',
		'host' => 'localhost',
		'username' => 'root',
		'password' => 'root',
		'database' => 'php-mvc-skelethon',
		'charset' => 'utf8',
		'collation' => 'utf8_unicode_ci',
		'prefix' => ''
	]);
// bootstrap eloquent
$capsule->bootEloquent();