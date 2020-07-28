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

Route::get('/model/provider', function (){
    $provider = new \App\Provider();
//    $provider->name = 'Provider teste';
//    $provider->email = 'email@teste.com';
//    $provider->password = bcrypt('12345678');

//    //return $provider->save();
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

Route::get('/model/vacancies', function (){
    $vacancies = \App\Vacancy::all();
    return $vacancies;
//    return \App\Vacancy::paginate(5);
//    $provider = \App\Provider::find(11);
//    $provider->vacancies()->create([
//        'id' => null,
//        'provider_id' =>$provider->id,
//        'name' => 'Desenvolvedor PHP',
//        'description' => 'Teste',
//        'level' => 'Teste',
//        'category' => 'Teste',
//        'technology' => 'Teste',
//        'salary' => 9.20,
//        'slug' => 'desenvolvedor-php',
//    ]);
//    dd($provider);
});

Route::get('admin/vacancies', 'Admin\\VacancyController@index');
Route::post('admin/vacancies', 'Admin\\VacancyController@create');

