<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $table = 'reservations';
    protected $fillable = [
        'booking_user_id',
        'ticket_id',
    ];
}
