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
		return "
		<html>
		<head>
			<title></title>
		</head>
		<body>
			<h1>Yooooo What's up!</h1>
			<h3>YOLO, SWAG</h3>
		</body>
		</html>";
	}
);

Route::get('param/{param}', function($param)
{
    return 'This is the param: '.$param;
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
