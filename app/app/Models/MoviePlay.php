<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MoviePlay extends Model
{
    use HasFactory;

    protected $table = 'movie_plays';
    protected $fillable = [
        'movie_id',
        'hall_id',
        'play_date'
    ];
}
