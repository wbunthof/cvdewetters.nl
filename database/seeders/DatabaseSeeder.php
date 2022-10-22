<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        DB::table('twill_users')->insert([
            'published' => 1,
            'name' => 'Admin',
            'email' => 'wbunthof@gmail.com',
            'password' => '$2y$10$DUQS3nd8glNFAQUuX.o25.LL7aA4hEoceaRBH6gObKAMsUfgjHO5S',
            'role' => 'SUPERADMIN',
        ]);
    }
}
