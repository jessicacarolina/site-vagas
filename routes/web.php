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

Route::get('/','Admin\\VacancyController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function () {

    Route::get('admin/create', 'Admin\\VacancyController@create');
    Route::get('admin/vacancies/{vacancy}/edit', 'Admin\\VacancyController@edit');
    Route::get('admin/vacancies/update/{vacancy}', 'Admin\\VacancyController@update');
    Route::get('admin/vacancies/destroy/{vacancy}', 'Admin\\VacancyController@destroy');
});

Route::get('admin/vacancies', 'Admin\\VacancyController@index')->name('admin/vacancies');

Route::get('/model/provider', function (){
    $provider = new \App\Provider();
    return \App\Provider::all();

    //  CRIAR VAGA PARA UM PRESTADOR
//    $provider = \App\Provider::find(10);
//    $provider->vacancies()->create([
//        'name' => 'Desenvolvedor PHP',
//        'description' => 'Teste',
//        'level' => 'Teste',
//        'category' => 'Teste',
//        'technology' => 'Teste',
//        'salary' => 9.20,
//        'slug' => 'desenvolvedor-php',
//    ]);
//    dd($provider);

//    \App\Vacancy::create([
//        'name' => 'Desenvolvedor PHP',
//        'description' => 'Teste',
//        'level' => 'Teste',
//        'category' => 'Teste',
//        'technology' => 'Teste',
//        'salary' => 9.20,
//        'slug' => 'desenvolvedor-php',
//    ]);
//    return \App\Vacancy::all();
});

Route::get('/model/user', function (){
    return \App\User::paginate(10);
});
