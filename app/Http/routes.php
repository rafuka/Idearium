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


Route::get('/', 'LoginController@getIndex');
Route::post('/', 'LoginController@postIndex');


Route::get('/register', 'LoginController@getRegister');
Route::post('/register', 'LoginController@postRegister');

Route::get('/archive', 'NotesController@getArchive');


Route::get('/search', function () {
    return "Search";
});
Route::post('/search', function () {
    return "Search Post";
});



if (App::environment('local')) {
  Route::get('/debug', function (){
    echo '<pre>';
    echo '<h1>environment:';
    echo App::environment().'</h1>';

    echo '<h1>Test database connection</h1>';
    try {
      $results = DB::select('SHOW DATABASES;');
      echo '<strong style="background-color:green; padding:5px;">Connection confirmed!</strong>';
      echo '<br><br>Your databases:<br><br>';
      print_r($results);
    }
    catch (Exception $e) {
      echo '<strong style="background-color:crimson; padding:5px;"></strong>';
    }
  });
}
