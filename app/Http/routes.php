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

Route::group(['middleware' => 'auth'], function() {
  Route::get('/', 'NotesController@getNotebook');
  Route::post('/', 'NotesController@postNotebook');

  Route::get('/archive', 'NotesController@getArchive');

  Route::get('/edit/{id?}', 'NotesController@getEdit');
  Route::post('/edit', 'NotesController@postEdit');

  Route::get('/delete/{id?}', 'NotesController@getDelete');

  Route::get('/search', function () {
      return "Search";
  });
  Route::post('/search', function () {
      return "Search Post";
  });

  Route::get('/logout', 'Auth\AuthController@logout');
});


/*
* Authentication
*/
Route::get('/login', 'Auth\AuthController@getLogin');
Route::post('/login', 'Auth\AuthController@postLogin');

Route::get('/register', 'Auth\AuthController@getRegister');
Route::post('/register', 'Auth\AuthController@postRegister');









Route::get('/test', function () {
  if (!\Auth::check()) {
    return redirect('login');
  }

  $user = \Auth::user()->toArray();
  dump($user);
  $notes = \Idearium\Note::with('user')->where('user_id', $user['id'])->get();
  foreach($notes as $note) {
    echo $note->user->email . "<br>";
    echo $note->text . '<br>';
  }

  dump($notes->toArray());
});


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
