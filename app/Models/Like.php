<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;


    protected $fillable=[
        'place_id',
        'user_id',
        'like',
    ];

    public function place(){
        return $this->belongsTo(Place::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
