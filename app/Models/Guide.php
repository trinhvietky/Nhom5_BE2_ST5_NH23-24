<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guide extends Model
{
    use HasFactory;
    public function tours()
    {
        return $this->hasMany(Tour::class, 'guide_id', 'guide_Id');
    }
}
