<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'segment',
        'name',
        'brand',
        'price',
        'owner_name',
        'owner_phone',
        'owner_image',
        'user_email',
    ];
}
