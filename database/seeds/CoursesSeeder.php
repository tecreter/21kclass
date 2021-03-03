<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoursesSeeder extends Seeder
{
    public function run()
    {
        DB::table('courses')->insert([
            [
                'category_id' => 1,
                'name' => 'NEET Medical',
                'slug' => 'neet-medical',
                'price' => 3000.00,
                'excerpt' => 'NEET excerpt',
                'description' => 'NEET description',
                'rating' => 3.5,
                'enable_flag' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);

    }
}
