<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function(){
		# you can even create a JSON response!
		return '{	"hello": "hola",
					"bye": "adios"}';
	}
);

Route::get('params/{class}/{id}', function($id, $class)
{
	# you can even create a JSON response!
	# kids, please, don't do that!!

	return '{	"id": "'.$id.'",
				"class": "'.$class.'"}';
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
