<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run()
    {
        factory(App\Models\Back\Settings\Admin::class, 1)->create();
    }
}
