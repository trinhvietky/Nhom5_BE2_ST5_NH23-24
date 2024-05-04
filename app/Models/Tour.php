<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;
    protected $primaryKey = 'tour_id';
    protected $fillable = [
        'tour_name',
        'tour_image',
        'start_day',
        'time',
        'star_from',
        'price',
        'vehicle',
        'tour_description',
        'tour_schedule',
        'tour_sale',
        'location_id',
        'guide_id',
    ];
    public function location(){
        return $this->belongsTo(Location::class, 'location_id', 'location_id');
    }
    
    public function guide()
    {
        return $this->belongsTo(Guide::class, 'guide_id', 'guide_Id');
    }
}
