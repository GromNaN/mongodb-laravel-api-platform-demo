<?php

namespace App\Models;

use ApiPlatform\Metadata\ApiResource;
use MongoDB\Laravel\Eloquent\Model;
use MongoDB\Laravel\Relations\BelongsTo;

#[ApiResource]
class Comment extends Model
{
    protected $connection = 'mongodb';
    protected $table = 'comments';
    protected $hidden = ['movie_id'];
    protected $casts = [
        //'date' => 'immutable_datetime',
    ];

    public function movie(): BelongsTo
    {
        return $this->belongsTo(Movie::class, 'movie_id');
    }
}
