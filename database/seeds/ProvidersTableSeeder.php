<?php

use Illuminate\Database\Seeder;

class ProvidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Provider::class, 10)->create()->each(function($provider){
            $provider->vacancy()->save(factory(\App\Vacancy::class)->make());
        });
    }
}
