<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Place;

class Emenities extends Model
{
    protected $table='emenities';
    protected $primaryKey='id';
    protected $fillable=[
        'place_id',
        'emenities_list',
        'emenities_count'
    ];
    use HasFactory;

    public function place(){
        return $this->belongsTo(Place::class);
    }
}
