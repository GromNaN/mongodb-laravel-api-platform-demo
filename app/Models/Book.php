<?php

namespace App\Models;

use ApiPlatform\Metadata\ApiResource;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

#[ApiResource]
class Book extends Model
{
    protected $connection = 'mongodb';

    use HasFactory;
}
