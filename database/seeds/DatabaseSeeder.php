<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        App\User::create([
            'name' => 'Superuser',
            'email' => 'admin@local.de',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
        ]);

        App\BuildingType::create([
            'description' => 'Einfamilienhaus'
        ]);

        App\BuildingType::create([
            'description' => 'Mehrfamilienhaus'
        ]);

        App\BuildingType::create([
            'description' => 'Gewerbeobjekt'
        ]);

        App\FlatType::create([
            'description' => 'Wohnung'
        ]);

        App\FlatType::create([
            'description' => 'Gewerbeeinheit'
        ]);

        App\FlatType::create([
            'description' => 'Büro'
        ]);

        App\FlatType::create([
            'description' => 'Wohngemeinschaft (WG)'
        ]);

        App\Building::create([
            'building_type_id' => 3,
            'short_name' => 'NES-INDSTR-2',
            'description' => 'Bauhaus',
            'street' => 'Industriestraße 2',
            'zip' => '97616',
            'city' => 'Bad Neustadt',
            'flurnummer' => 5646548,
            'no_of_floors' => 1,
            'din_area' => 5000,
            'heated_area' => 3000,
            'useable_area' => 4500,
            'ground_area' => 8000,
            'year_of_construction' => 1990,
            'year_of_last_renovation' => 1990,
        ]);

        App\Building::create([
            'building_type_id' => 2,
            'short_name' => 'NES-HEFI-20',
            'description' => 'Hefi',
            'street' => 'Hedwig-Fichtel-Straße 20',
            'zip' => '97616',
            'city' => 'Bad Neustadt',
            'flurnummer' => 5648941,
            'no_of_floors' => 3,
            'din_area' => 400,
            'heated_area' => 350,
            'useable_area' => 420,
            'ground_area' => 800,
            'year_of_construction' => 1950,
            'year_of_last_renovation' => 1980,
        ]);

        App\Building::create([
            'building_type_id' => 2,
            'short_name' => 'L-SHAKES-47',
            'description' => 'Shakespearestraße',
            'street' => 'Shakespearestraße 47',
            'zip' => '04107',
            'city' => 'Leipzig',
            'flurnummer' => 645647,
            'no_of_floors' => 4,
            'din_area' => 800,
            'heated_area' => 500,
            'useable_area' => 600,
            'ground_area' => 987,
            'year_of_construction' => 1912,
            'year_of_last_renovation' => 2013,
        ]);


        //factory(App\Building::class, 10)->create();
        factory(App\Flat::class, 10)->create();
    }
}
