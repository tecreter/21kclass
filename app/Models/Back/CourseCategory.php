<?php

namespace App\Models\Back;

use Illuminate\Database\Eloquent\Model;

class CourseCategory extends Model
{
    protected $fillable = [
        'name'
    ];

    public function courses()
    {
        return $this->hasMany(Course::class, 'category_id')->where('enable_flag', 1);
    }

}
