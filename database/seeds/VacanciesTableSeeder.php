<?php

use Illuminate\Database\Seeder;

class VacanciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Vacancy::class, 10)->create()->each(function ($vacancy)
        {
            $vacancy->provider()->save(factory(\App\Provider::class)->make());
        });
    }
}
// ->each(function ($user) {
//            $user->vacancies()->save(factory(\App\Vacancy::class)->make());
//        });

//
//$providers = \App\Provider::all();
//
//foreach ($providers as $provider)
//{
//    $provider->vacancies()->save(factory(\App\Vacancy::class)->make());
//}
