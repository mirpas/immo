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

		DB::table('users')->insert([
            'name' => 'Superuser',
            'email' => 'admin@local.de',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

		// factory(App\User::class, 5)->create();
		factory(App\Building::class, 15)->create();
    }
}
