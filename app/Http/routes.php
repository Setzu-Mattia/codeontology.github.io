<?php

use App\Http\Controllers\Codeontology\StaticController as StaticController;

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return StaticController::home();
});

Route::get('/query', function() {
    return StaticController::query();
});

Route::get('/docs', function() {
    return StaticController::docs();
});

Route::get('/public/assets/css/bootstrap.min.css', function() {
    return "/public/assets/css/bootstrap.min.css";
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
