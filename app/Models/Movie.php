<?php

namespace App\Models;

use ApiPlatform\Metadata\ApiResource;
use MongoDB\Laravel\Eloquent\Casts\ObjectId;
use MongoDB\Laravel\Eloquent\Model;

#[ApiResource]
class Movie extends Model
{
    protected $connection = 'mongodb';
    protected $table = 'movies';

    protected $casts = [
        'id' => ObjectId::class,
    ];


}
