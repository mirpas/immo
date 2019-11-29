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

        factory(App\Building::class, 15)->create();
        factory(App\Flat::class, 15)->create();
    }
}
