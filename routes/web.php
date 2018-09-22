<?php
use Illuminate\Support\Facades\DB;

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



Route::get("trainings", "TrainingsController@show");

Route::get("/", function (){
    return view("trainings.index");
});

//Route::get("/trainings/{training}", "TrainingsController@training");

Route::get("trainings/{training}", "TrainingsController@training");

Auth::routes();

Route::get('home', 'HomeController@index');
Route::get('/', 'TrainingsController@index');

Route::post("trainings/{id}", "TrainingsController@store");


