<?php

namespace App\Models\Front;

use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    protected $fillable = ['name', 'city', 'phone', 'email', 'title', 'message'];
}
