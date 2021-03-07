<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run()
    {
        // factory(App\Models\Back\Admin::class, 1)->create();

        DB::table('admins')->insert([
            [
                'name' => 'Tecreter',
                'username' => 'tecreter',
                'password' => '$2y$10$4wk4JNNxEgUKsq8F.vJ0Nejc36.goTSovZjWYUJdD3HX3es6KPwlS',
                'enable_flag' => 1,
                'is_master' => 'y'
            ],
            [
                'name' => 'Admin',
                'username' => 'tocbackoperator',
                'password' => Hash::make('$3w@pr$q5#'),
                'enable_flag' => 1,
                'is_master' => 'n'
            ],
            [
                'name' => 'Admin',
                'username' => 'admin',
                'password' => Hash::make('password'),
                'enable_flag' => 1,
                'is_master' => 'n'
            ]
        ]);

    }
}
