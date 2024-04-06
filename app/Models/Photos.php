<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Place;

class Photos extends Model
{
    protected $table='photos';
    protected $primaryKey='id';
    protected $fillable=[
        'filename',
        'place_id',
        'caption'
    ];
    use HasFactory;

    public function place(){
        return $this->belongsTo(Place::class);
    }
}
