<?php

namespace App\Models\Back;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    protected $fillable = [
        'name', 'username', 'password',
    ];

    protected $hidden = [
        'password',
    ];

    public function isMasterAdmin()
    {
        return (strtolower($this->is_master) === 'n') ? false : true;
    }
}
