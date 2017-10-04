<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


use Horsefly\Task;
use Horsefly\UserController;
use Illuminate\Http\Request;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', 'UserController@index')->name('home');
Route::get('/session', 'SessionController@create');
Route::post('/session', 'SessionController@store');
Route::post('/login', 'SessionController@login');
Route::get('/AddTask', 'UserController@create');
Route::post('/StoreTask', 'UserController@store');
Route::get('/ShowTask', 'UserController@show');
Route::get('/EditTask/{id}', 'UserController@edit');
Route::post('/UpdateTask/{id}', 'UserController@update');
Route::get('/DeleteTask/{id}', 'UserController@delete');
Route::get('export', 'UserController@export');
Route::get('upload', 'UserController@upload');
Route::post('upload', ['as'=>'upload','uses'=>'UserController@upload']);
Route::get('/logout', function()
    {
        Auth::logout();
        Session::flush();
        return Redirect::to('/');
    });


// Route::get('/session', 'SessionController@create')->name('session');

// Route::get('/AddTask', function () {
//     return view('task.tasks');
// });
// Add A New Task
// Route::post('/task', ['uses' => 'UserController@task','as' => 'home'], function (Request $request) {
//      $validator = Validator::make($request->all(), [
//         'name' => 'required|max:255',
//     ]);

//     if ($validator->fails()) {
//         return redirect('/')
//             ->withInput()
//             ->withErrors($validator);
//     }
//     $task = new Task;
//     $task->name = $request->name;
//     $task->save();
//     return redirect('/');
// });
