<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/model', function (){
    // $vacancies = \App\Vacancy::all();

    $provider = new \App\Provider();
    $provider->name = 'Provider teste';
    $provider->email = 'email@teste.com';
    $provider->password = bcrypt('12345678');

    //return $provider->save();
    return \App\Provider::all();
});

Route::get('/model/user', function (){
   return \App\User::paginate(10);
});
