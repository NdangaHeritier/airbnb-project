<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Place;
use App\Models\User;

class Reservation extends Model
{
    protected $table='reservations';
    protected $primaryKey='id';
    protected $fillable=[
        'user',
        'host',
        'place',
        'guests',
        'infants',
        'amount',
        'checkin_date',
        'checkout_date',
        'status'
    ];
    use HasFactory;

    function user(){
        return $this->belongsTo(User::class);
    }
    function host(){
        return $this->belongsTo(User::class);
    }
    function place(){
        return $this->belongsTo(Place::class);
    }
    public function reservations(){
        return $this->hasMany(Reservation::class);
    }
}
