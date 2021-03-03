<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
         $this->call(AdminSeeder::class);
         $this->call(CourseCategoriesSeeder::class);
         $this->call(CoursesSeeder::class);
         $this->call(TutorsSeeder::class);
    }
}
