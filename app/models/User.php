<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent {
	public $name;

	// if you don't want timestamps u can just make empty array
	//public $timestamps = [];

	// stopping the mass asignment
	protected $fillable = ['username', 'email'];
}