<?php

namespace Database\Seeders;

use App\Models\User;
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
        // \App\Models\User::factory(10)->create();
        User::create([
            'name'=> 'IVAN MANGONES',
            'email'=> 'elmangones@hotmail.com',
            'password'=> bcrypt('89050469809'),
            'role_id'=> 1,
            'is_active'=> 1,
        ]);
    }
}
