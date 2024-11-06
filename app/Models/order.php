<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $table = 'order';

    // make filable
    protected $fillable = [
        'name',
        'date',
        'price',
        'status',
        'user_id',
    ];
}
