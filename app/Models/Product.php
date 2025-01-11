<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use ApiPlatform\Metadata\ApiResource;
use Illuminate\Database\Eloquent\Model;


#[ApiResource]
class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
    ];
}
