<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Photos;
use App\Models\User;
use App\Models\Emenities;
use App\Models\Bathrooms;
use App\Models\Reservation;

class Place extends Model
{
    protected $table="places";
    protected $primaryKey="id";
    protected $fillable=[
        'place_name',
        'place_category',
        'place_type',
        'place_region',
        'street',
        'city',
        'province',
        'postal_code',
        'number_of_guests', 
        'guests_to_accept',
        'number_of_bedrooms',
        'number_of_beds',
        'all_bedroom_has_bedroom_lock',
        'hosted_by'
    ];
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function photos(){
        return $this->hasMany(Photos::class);
    }
    public function bathrooms(){
        return $this->hasMany(Bathrooms::class);
    }
    public function emenities(){
        return $this->hasMany(Emenities::class);
    }
    public function reservations(){
        return $this->hasMany(Reservation::class);
    }
}
