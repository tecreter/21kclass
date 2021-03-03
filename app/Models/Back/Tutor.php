<?php

namespace App\Models\Back;

use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    protected $fillable = [
        'first_name', 'last_name', 'qualification'
    ];

    public function category()
    {
        return $this->belongsTo(CourseCategory::class);
    }

}
