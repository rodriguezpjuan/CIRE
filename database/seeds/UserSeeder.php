<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Juan Rodriguez',
            'email' => 'guacatate@gmail.com',
            'password' => '$2y$10$UR1oOHmTUjnNprWPQ143MuS2jRX3/E0AUB0kMaZOYLVaK7edrU0ZW',
        ]);
    }
}
