<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    protected $table='wishlists';
    protected $primaryKey='id';
    protected $fillable=[
        'user',
        'place'
    ];
    use HasFactory;
    public function user(){
        return this->belongsTo(User::class);
    }
}
