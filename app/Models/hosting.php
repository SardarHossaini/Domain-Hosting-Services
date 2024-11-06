<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\domain;
use Illuminate\Http\Request;
class hosting extends Model
{
    use HasFactory;
    protected $table = 'hosting';
    protected $fillable = [
        'name',
        'price',
        'label',
        'web_space',
        'bandwidth',
        'sub_domain',
        'email_id',
        'hosting_amount',
        'description',
        'domain_id',
        'status',
    ];


}
