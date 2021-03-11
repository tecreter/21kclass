<?php

namespace App\Models\Back;

use Illuminate\Database\Eloquent\Model;

class CourseCategory extends Model
{
    public const SITE_TYPE = [
        1 => 'Coaching',
        2 => 'Tutoring',
        3 => 'Commerce'
    ];

    protected $fillable = [
        'type_id', 'name'
    ];

    public function courses()
    {
        return $this->hasMany(Course::class, 'category_id')->where('enable_flag', 1);
    }

    public function getSiteName()
    {
        return self::SITE_TYPE[ $this->attributes['type_id'] ];
    }

}
