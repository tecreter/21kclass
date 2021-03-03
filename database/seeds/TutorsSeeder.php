<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TutorsSeeder extends Seeder
{
    public function run()
    {
        DB::table('tutors')->insert([
            [
                'category_id' => 1,
                'honorifics' => 'Mrs.',
                'first_name' => 'Sunitha',
                'qualification' => 'M.Sc, B.Ed',
                'position' => 'Principal',
                'excerpt' => 'Skillful Educationist with the experience of 15 years in the Field of Curriculum development and learning methodologies. Best Teacher Award 2016 from CBSE. Worked in building emotional and physical awareness in primary school and best career prospects to students in senior school.',

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);

    }
}
