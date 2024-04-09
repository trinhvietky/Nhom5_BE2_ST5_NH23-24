<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    public function tours(){
        return $this->hasMany(Tour::class, 'location_id', 'location_id');
    }
}
