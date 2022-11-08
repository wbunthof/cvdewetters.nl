<?php

namespace Database\Seeders;

use A17\Twill\Commands\CreateSuperAdmin;
use A17\Twill\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Mockery\Generator\StringManipulation\Pass\Pass;

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
        $user = User::create([
            'name' => 'Admin',
            'email' => 'wbunthof@gmail.com',
            'role' => 'SUPERADMIN',
            'published' => true,
        ]);

        $user->password = Hash::make('smak idool mollen doden');
        if (!$user->save()) {
            return 'Error occured';
        }
    }
}
