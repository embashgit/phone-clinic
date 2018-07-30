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

Route::get('/welcome', function () {
    return view('welcome');
});

//Route::get('/', 'HomeController@home')->name('home.dashboard');
Route::group(['middleware'=>'auth', 'prefix'=>'admin'],
function()
{

Route::get('/', function () {

    return view('admin.phones.create');

})->name('admin.dashboard');

Route::resource('/phones', 'PhoneController');
Route::resource('/models', 'ModelController');
Route::resource('problems', 'ProblemController');
Route::resource('solutions', 'SolutionController');
Route::post('problem/solutions/{id}','SolutionController@delete')->name('solution.remove');
});
Auth::routes();

Route::get('/', function () {
    return view('banner');
});


Route::get('/home', 'HomeController@index');
Route::get('/phone/{id}/models', 'ModelController@phone_model')->name('phone.models');
Route::get('/model/{id}/problems', 'ProblemController@model_problem')->name('model.problems');
Route::get('/problem/{id}/solutions', 'SolutionController@problem_solution')->name('problem.solutions');
Route::get('/solution/', 'SolutionController@probsolution')->name('problem.solution');
Route::Post('solution/{id}/comment', 'SolutionController@comment')->name('solution.comment');



