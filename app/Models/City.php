<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $table = 'cities';
    protected $guarded = [];
    public function gallery(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Gallery::class,'city_id');
    }
    public function reviews(){
        return $this->hasMany(Review::class,'city_id');
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
