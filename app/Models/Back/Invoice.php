<?php

namespace App\Models\Back;

use Illuminate\Database\Eloquent\Model;
use Tzsk\Payu\Models\HasTransactions;

class Invoice extends Model
{
    use HasTransactions;

    protected $fillable = ['first_name'];
}
