<?php

namespace App\Models\Back;

use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    public const SITE_TYPE = [
        1 => 'Coaching',
        2 => 'Tutoring',
        3 => 'Commerce'
    ];

    protected $fillable = [
        'first_name', 'last_name', 'qualification'
    ];

    public function category()
    {
        return $this->belongsTo(CourseCategory::class);
    }

}
