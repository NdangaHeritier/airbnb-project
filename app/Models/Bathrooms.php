<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Place;

class Bathrooms extends Model
{
    protected $table='bathrooms';
    protected $primaryKey='id';
    protected $fillable=[
        'place_id',
        'private',
        'dedicated',
        'shared'
    ];
    use HasFactory;

    public function place(){
        return $this->belongsTo(Place::class);
    }
}
