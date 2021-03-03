<?php

namespace App\Models\Back;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Course extends Model
{
    protected $fillable = [
        'category_id', 'name', 'slug', 'amount', 'excerpt', 'description', 'rating', 'thumb'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function category()
    {
        return $this->belongsTo(CourseCategory::class);
    }

}
