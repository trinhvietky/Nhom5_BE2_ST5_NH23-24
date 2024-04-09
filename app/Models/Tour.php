<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;
    public function location(){
        return $this->belongsTo(Location::class, 'location_id', 'location_id');
    }
    public function guide()
    {
        return $this->belongsTo(Guide::class, 'guide_id', 'guide_Id');
    }
}
