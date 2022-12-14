<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'id',
        'hall_id',
        'movie_play_id',
        'seat_label',
        'status',
        'row',
        'price'
    ];
}
