<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Docent',
            'email' => 'docent@hz.nl',
            'password' => bcrypt('Docent1234'),
            'isAdmin' => true,
        ]);
    }
}
